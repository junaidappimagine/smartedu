<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <style>
          @page {
          size: A4 portrait;  
          margin: 30pt 60pt 70pt 60pt;
         }
         
          @media al{
              border-collapse: collapse;
          }
          
          table#number3 td,  table#number3 th, table#number3
          {
            border:1px solid #DADADA;
            border-collapse: collapse;
           
          }
           table#number4 td,  table#number4 th, table#number4
          {
            padding: 10px;
          }
          table td{
            font-size: 13px;
          }
          
        </style>
    </head>
<body>
    <div>
        <table>
            <tr>
                <td> <img id="previewing" src="<?php echo base_url();?>/assets/img/logo.jpg"  name="profile" width="60px" height="60px"></td>
                <td><p>&nbsp;&nbsp;&nbsp;&nbsp; School Name <p>&nbsp;&nbsp;&nbsp;&nbsp; City</p><p> </td>
            </tr>
        </table>
        <br>
        <br>
        <div class="main">
            <center>
            <table style="width: 100%;border-top: 1px solid;border-bottom: 1px solid;line-height: 28px;" id="number1">
                <tr>
                    <th>
                        <span style="font-size: 14px;"><b>Fees Defaulters</b></span><br>
                    </th>
                </tr>
            </table>
            </center> <br><br>
            <table>
                <tr>
                    <td style="width:50%">
                        <span>Class    : G01 - A</span>
                    </td>
                </tr>
            </table>
             <table style="width:100%;line-height: 28px;" id="number3">
                <thead style="background-color: #EDEDED;">
                    <tr>
                    <th style="width:10%;text-align: center;">
                        <span style="font-size: 14px;">Sl.No</span>
                    </th>
                     <th style="width:25%;text-align: center;">
                        <span style="font-size: 14px;">Name</span>
                    </th>
                    <th style="width:20%;text-align: center;">
                        <span style="font-size: 14px;">Roll Number</span>
                    </th>
                    <th style="width:21%;text-align: center;">
                        <span style="font-size: 14px;">Amount(Rs.) </span>
                    </th>
                </tr>
                </thead>
                <tbody>
                    <tr style="text-align: center;">
                        <td>1</td>
                        <td>STD001 </td>
                        <td>G11501</td>
                        <td>Karthik</td>
                    </tr>
                    
                    <!--<tr style="text-align: center;">
                        <td>2</td>
                        <td>STD002</td>
                        <td>G11502</td>
                        <td>Arun</td>
                    </tr>-->
                </tbody>
              
               
            </table>
             <br>
        
            </div>
    </div>

</body>
</html>


























