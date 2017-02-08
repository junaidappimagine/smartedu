<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function checkTokenAccess(){
    $ci =& get_instance();
    $user_token=$ci->session->userdata('user_token');
        $headers = apache_request_headers();

        if(array_key_exists('access_token', $headers) ){
                $tokenFromUI = $headers['access_token'];
                if($user_token!=$tokenFromUI){
                $data=array([
                'status' => FALSE,
                'message' => 'Invalid User/Token  '
                ]);
                echo json_encode($data);
                exit;
            }else{
                $data=array([
                'status' => TRUE,
                'message' => 'Valid User'
                ]);
            }
        }else{
            $data=array([
                'status' => FALSE,
                'message' => 'Plz Send the User Active Token'
                ]);
            echo json_encode($data);
            exit;
        }
}
function checkAccess(){
    $ci =& get_instance();
    $accessA=array();
    $accessA[]=$ci->session->userdata('USER_READ');
    $accessA[]=$ci->session->userdata('USER_WRITE');
    $accessA[]=$ci->session->userdata('USER_EDIT');
    $accessA[]=$ci->session->userdata('USER_DELETE');
    $methodtype=$_SERVER['REQUEST_METHOD'];
    $href = $ci->uri->segment(2).'/'.$ci->uri->segment(3);
    $roleID=$ci->session->userdata('USER_ROLE_ID');

        $sql="SELECT user_roles.api_id FROM user,user_roles where user.user_role_id='$roleID' and user.user_role_id=user_roles.id ";
        $resultofApi = $ci->db->query($sql, $return_object = TRUE)->result_array();
        if(!count($resultofApi)>0){
            dontAccess();
        }

        $jsonData=$resultofApi[0]['api_id'];
        $result=json_decode($jsonData,true);

        $arrayApi='';
        foreach ($result as $key => $value) {
            if($arrayApi==''){
                $arrayApi=$value;
            }else{
                $arrayApi=$arrayApi.','.$value;
            }
        }
       
        $sqlAPI="SELECT api_end_points FROM end_points where id in ($arrayApi) ";
        $result = $ci->db->query($sqlAPI, $return_object = TRUE)->result_array();
        $access=false;
        
        foreach ($result as $key => $value) {
            if($value['api_end_points']==$href){
                $checkM=checkMethod($methodtype,$accessA);
                if($checkM)
                    $access=true;
                else
                    $access=false;
                break;
            }
        }
        if(!$access){
            dontAccess();
        }else{
            // echo "Success - Right To Access this API";
            // exit;
        }

}
function checkMethod($methodtype,$accessA){
    if($methodtype=="GET" && $accessA[0]=='Y'){
        return true;
    }else if($methodtype=="POST" && $accessA[1]=='Y'){
        return true;
    }else if($methodtype=="DELETE" && $accessA[2]=='Y'){
        return true;
    }else if($methodtype=="PUT" && $accessA[3]=='Y'){
        return true;
    }else{
        return false;
    }
}
function dontAccess(){
    $data=array([
        'status' => FALSE,
        'message' => 'User dont have Access to this url'
        ]);
    echo json_encode($data);
    exit;
}



