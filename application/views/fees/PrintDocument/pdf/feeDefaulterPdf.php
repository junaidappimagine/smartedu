<html>
    <head>
        <meta http-equiv="Content-Type" content="charset=utf-8"/>
        <style>
            
            table
            {                   
                font-size: 12px;
                font-family: Helvetica;
            }
            
            .lineTable
            {                
                border: 1px solid black;
                border-collapse: collapse;
                height: 50px;
                margin-left: 38px;                
                padding: 1px;
                width: 92%;
                /*margin-top: 30px; */
                text-align: left;                                  
            }
            
            td
            {
                font-size: 12px;
                font-family: Helvetica;
                border:none;
            }
            
            th
            {
                
                font-family: "Helvetica", monospace;
                border: solid 1px black;
                font-size: 12px;
                font-family: Helvetica;
                text-align: center;
            }
            
            tr
            {
                border-bottom: 1px solid #000;
                font-size: 12px;
                font-family: Helvetica;
            }
            
            body
            {
                width: 100%;                
                margin-top: 350px;                
                text-align: justify;
                font-size: 12px;
                font-family: Helvetica;
            }
            
            .logo
            {
                float: right;
            }
            
            .sideBar
            {                                               
                float: left;
                height: 845px;
                margin-top: -330px;
                width: 22px;
            }
            
            .hrClass
            {
                float: right;
                margin-right: -70px;
                margin-top: 175px;
                width: 250px;
            }
            
            .signature
            {
                float: right;
                margin-right: -138px;
                margin-top:0px;
                width: 250px;
            }
           
            .lineTable { border: none; }            
            .lineTable tr {border: none;}
            .lineTable td { border-left: 1px solid #000; }            
            .lineTable tr:last-child{border-bottom: 1px solid #000;}            
            .lineTable th:last-child {border-left: 1px solid #000;}
            .lineTable td:last-child {border-right: 1px solid #000;}
            /*#content {padding-bottom: 180px; margin-top:0px}*/
            @page { margin: 0px; }
            #headerpreview
            {                
                height: 150px;
                left: 40px;
                padding: 8px;
                position: fixed;
                right: 60px;
                text-align: center;
                /*top: 20px;*/
            }
            #footerpreview {position: fixed; left: 35px; bottom: 45px; right: 0px; height: 100px; padding: 10px; width:100% }
            #footerpreview .page:after { content: counter(page, upper-roman); }
            .page-number:before { content: counter(page);}
            #signaturetr
            {                
               
                margin-left: 40px;
                padding: 8px;
                text-align: center;
                /*top: 20px;*/
            }
            .detailTable
            {
                margin: 0px 90px 25px 0;
            }
            
            .pageBottom td
            { 
                padding: 5px;
            }
            
            .bottomLine
            {
                margin-right: 30px;
                margin-left: 8px;
            }
            .print{
                page-break-before: always;
            }
           /* .print:last-child {
                    page-break-after: auto;
               }*/
       
        </style>
    </head>
    
    <body>
        
       
        <?php
            $total= $pdfId;
            for($i=0;$i<count($total);$i++){
                $resDetails=$this->financefeesmod->getPdf_details($total[$i]);
                //print_r($resDetails);
                    
        ?>
        <div>
            <div id="headerpreview" >
                <img class="logo" width="100px" src="<?php echo base_url(); ?>assets/img/rubycampus.png"><br>
                <h3 style="color: #000000;margin-left: 0px; margin-top: 90px; "><b>Payslip</b></h3><br>
                <!--<hr size="1px" style="background-color: black;margin-left: 6px;margin-right: 30px;">-->
                <table style="width: 100%;">
                    <tr>
                        <td align="left" width="9%"><b>E-Name</b></td>
                        <td align="left" width="60.5%" style="text-align: justify">: <?php echo $resDetails[0]['EMP_FIRST_NAME']?></td>
                        <td align="left" width="11%"><b>Joining Date</b></td>
                        <td align="right" width="20.5%" style="text-align: justify">: <?php echo $resDetails[0]['EMP_JOIN_DT']?></td>
                    </tr>
                    <tr>
                        <td align="left" width="20%"><b>Marital Status</b></td>
                        <td align="left" width="30.5%" style="text-align: justify">: Single</td>
                        <td align="left" width="11%"><b>Position</b></td>
                        <td align="right" width="20.5%" style="text-align: justify">: <?php echo $resDetails[0]['EMP_POSITION']?></td>
                    </tr>
                    <tr>
                        <td align="left" width="9%"><b>Department</b></td>
                        <td align="left" width="30.5%" style="text-align: justify">: <?php echo $resDetails[0]['EMP_DEPT']?></td>
                        <td align="left" width="20%"><b>Qualification</b></td>
                        <td align="right" width="20.5%" style="text-align: justify">: <?php echo $resDetails[0]['EMP_QUALI']?></td>
                        
                    </tr>
                    <tr>
                        <td align="left" width="9%"><b>Mail Id</b></td>
                        <td align="left" width="30.5%" style="text-align: justify">: <?php echo $resDetails[0]['EMP_EMAIL']?></td>
                        <td align="left" width="11%"><b>Total Experience</b></td>
                        <td align="right" width="20.5%" style="text-align: justify">: 1 Years</td>
                        
                    </tr>
                    
                </table>
            </div>
            <div id="footerpreview">
                <div id="">
                    <table style="width: 100%; margin-left: 0px;padding: 8px;">
                        <tr>
                            <td align="left" width="50%"><b>Employee Signature</b></td>
                           
                            <td align="left" width="11%"><b>Director Signature</b></td>
                            
                        </tr>
                    </table>
                </div>
                <hr size="1px" style="background-color: black;margin-left: 6px;margin-right: 30px;">
                <div class="detailTable">
                    <table class="pageBottom" width="120%">
                        <tbody>
                            <tr class="" style="font-family: Helvetica;">
                                <td style="font-size: 12px;width:21%" align:"right">Prepared By:&nbsp;  <span style="font-weight: normal;">Admin</span></td>
                                <td  style="font-size: 12px;width:20%">Approved By: &nbsp; <span style="font-weight: normal;">Admin</span> </td>
                                <td style="font-size: 12px;width:25%">Run Date: &nbsp; <span style="font-weight: normal;">24-02-2017</span></td>
                                <td align="left" style="width:18%">Page No :&nbsp;  <span style="font-weight: normal !important;margin-top: 200px;"><script type="text/php">
                                    if ( isset($pdf) ) {
                                        $font = Font_Metrics::get_font("helvetica","regular");
                                        $pdf->page_text(552, 767, "{PAGE_NUM} of {PAGE_COUNT}", $font, 9.5, array(0,0,0));
                                    }
                                </script></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="content" style="margin-top: -85px;">
                <table class="lineTable">
                    <thead>
                        <tr>
                            <th colspan="2" style="background-color: #E5E2D5; padding: 5px 5px 5px 5px;text-align: left; ">Earnings</th>
                            <th colspan="2" style="background-color: #E5E2D5; padding: 5px 0px 5px 5px;text-align: left;">Deduction</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="border:1px solid; padding: 5px">Regular Earnings</td>
                            <td style="border:1px solid; padding: 5px;text-align: right;">5500.00</td>
                            <td style="border:1px solid; padding: 5px;">Advance if any</td>
                            <td style="border:1px solid; padding: 5px;text-align: right;">0.00</td>
                            
                        </tr>
                        <tr>
                           
                            <td style="border:1px solid; padding: 5px">HRA</td>
                            <td style="border:1px solid; padding: 5px;text-align: right;">4000.00</td>
                            <td style="border:1px solid; padding: 5px;">Loan</td>
                            <td style="border:1px solid; padding: 5px;text-align: right;">-</td>
                            
                      
                        <tr>
                            
                            <td style="border:1px solid; padding: 5px">Conveyance</td>
                            <td style="border:1px solid; padding: 5px;text-align: right;">500</td>
                            <td style="border:1px solid; padding: 5px;">Other Deductiom</td>
                            <td style="border:1px solid; padding: 5px;text-align: right;">0.00</td>
                            
                        </tr>
                        <tr>
                            
                            <td style="border:1px solid; padding: 5px">Special Allowance</td>
                            <td style="border:1px solid; padding: 5px;text-align: right;">0.00</td>
                            <td style="border:1px solid; padding: 5px;"></td>
                            <td style="border:1px solid; padding: 5px;"></td>
                            
                        </tr>
                        <tr>
                            <td style="border:1px solid; padding: 5px">Total Earnings</td>
                            <td style="border:1px solid; padding: 5px;text-align: right;">10000</td>
                            <td style="border:1px solid; padding: 5px;">Total Deductions</td>
                            <td style="border:1px solid; padding: 5px;text-align: right;">0.00</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="border:1px solid; padding: 5px;height: 33px;">Current NET Salary</td>
                            <td colspan="2" style="border:1px solid; padding: 5px;text-align: right;">10000</td>
                        </tr>
                       
                    </tbody>
                    
                </table>
                
               
              
            </div>
        </div>
        <div class="print"></div>
       <?php }?>
   
    </body>
     
</html>
