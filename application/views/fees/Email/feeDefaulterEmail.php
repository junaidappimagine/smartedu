
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
       <meta content="text/html; charset=UTF-8" http-equiv="content-type">
       <title>Header and Footer example</title>
       <style type="text/css">
            @page {
                margin: 0;
            }
            body {
                font-family: Helvetica Neue;
                margin: 1cm;
                text-align: justify;
            }
            #header,
            #footer {
                position: fixed;
                left: 0;
                right: 0;
                color: #aaa;
                background-color: white;
                
            }
/*            .bottomClass{
                
                position: relative;
                top: 635px;
            }*/
            #header {
                top: 0;
                height: 3.5cm;
                /*border-bottom: 0.1pt solid #aaa;*/
                margin-left: 1cm;
                margin-right: 1cm;
            }
            #footer {
                bottom: 0;
                margin-left: 1cm;
                margin-right: 1cm;
                height: 4cm;
            }
            #header table,
            #footer table {
                width: 100%;
                border-collapse: collapse;
                border: none;
                position: absolute;
                bottom: 0;
            }
            .page-number {
                text-align: center;
            }
            .page-number:before {
                content: "Page" counter(page);
            }
            .content-table{
                padding-bottom: 4.5cm;
                padding-top: 3.8cm;
                font-size: 13px;
                width : 100%;
            }
            .left-pane {
                left: 0;
                position: fixed;
                top: 3.35cm;
            }
            .left-pane img{
                height: 20cm;
                width:0.8cm;
            }
            .logo {
                height: 2.5cm;
            }
            #header td {
                vertical-align: bottom;
            }
            .pageBottom {
                top: 15px;
                font-size: 12px;
            }
            @media print{
                .left-pane img{
                    height: 20cm;
                }
                
                #pageFooter:after {
		counter-increment: page;
		content: counter(page);
		 
		}
                #InitialNum{
		    display: none;
		}
            }

            .sedar-table-head{
                background-color: #E4E1D4;
            }
            td.test, th.test {
                border: 0.1pt solid #aaa;
            }
       </style>
    <body>
        <div id="header">
          <table>
             <tbody>
                <tr>
                   
                    <td width="88%" style="text-align: center;font-size: 16px;"><b>Ruby Campus</b></td>
                   <td style="text-align: right;">
                   <!-- <img class="logo" width="100px" src="https://sedarspine.s3.amazonaws.com/PROC/1469701058.png"><br> -->
                   <img class="logo" width="100px" src="https://images.g2crowd.com/uploads/product/image/large_detail/large_detail_1483704915/rubycampus.png"><br>
                    </td>
                </tr>
             </tbody>
          </table>
       </div>
        <div style="min-height:22.4cm;" class="left-pane">
            <div style="float:left;">
    	   <!-- <img width="30px" src="<php echo base_url();?>application/uploads/pattern.png">-->
            </div>
             <div style="margin-left: 35px;margin-top: 38px;">
	    <table class="content-table" border="1" style="border-collapse: collapse; border: 1px solid;" cellspacing="0">
		<thead>                    
                    <tr style="border:hidden;">
                        <td style="border:hidden;" colspan="2"><b>Employee Name</b></td>
                        <td style="border:hidden;" colspan="2">: <?php echo $resDetails[0]['EMP_FIRST_NAME']?></td>
                        <td style="border:hidden;" colspan="2"><b>Joining Date</b></td>
                        <td style="border:hidden;" colspan="2">: <?php echo $resDetails[0]['EMP_JOIN_DT']?></td>
                    </tr>
                    <tr style="border:hidden;" >
                        <td style="border:hidden;" colspan="2"><b>Marital Status</b></td>
                        <td style="border:hidden;" colspan="2">: Single</td>
                        <td style="border:hidden;" colspan="2"><b>Position</b></td>
                        <td style="border:hidden;" colspan="2">: <?php echo $resDetails[0]['EMP_POSITION']?></td>
                        
                    </tr>
                    <tr style="border:hidden;" >
                        <td style="border:hidden;" colspan="2"><b>Department</b></td>
                        <td style="border:hidden;" colspan="2">: <?php echo $resDetails[0]['EMP_DEPT']?></td>
                        <td style="border:hidden;" colspan="2"><b>Qualification</b></td>
                        <td style="border:hidden;" colspan="2">:  <?php echo $resDetails[0]['EMP_QUALI']?></td>
                        
                    </tr>
                        <tr style="border:hidden;" >
                        <td style="border:hidden;" colspan="2"><b>Mail</b></td>
                        <td style="border:hidden;" colspan="2">: <?php echo $resDetails[0]['EMP_EMAIL']?></td>
                        <td style="border:hidden;" colspan="2"><b>Total Experience</b></td>
                        <td style="border:hidden;" colspan="2">: 1 Years</td>
                        
                    </tr>
                    <tr style="height: 14px;border-right:hidden; border-left:hidden;"></tr>
                    <tr class="sedar-table-head">
                        <th colspan="4" style="text-align: left">S.No</th>
                        <th colspan="4" style="text-align: left">Employee Name</th>
                       
		    </tr>
		</thead>    
                 <tbody>     
                    <tr>
                         <tr>
                            <td colspan="2" style="border:1px solid; padding: 5px">Regular Earnings</td>
                            <td colspan="2" style="border:1px solid; padding: 5px;text-align: right;">5500.00</td>
                            <td colspan="2" style="border:1px solid; padding: 5px;">Advance if any</td>
                            <td colspan="2" style="border:1px solid; padding: 5px;text-align: right;">0.00</td>
                            
                        </tr>
                        <tr>
                           
                            <td colspan="2" style="border:1px solid; padding: 5px">HRA</td>
                            <td colspan="2" style="border:1px solid; padding: 5px;text-align: right;">4000.00</td>
                            <td colspan="2" style="border:1px solid; padding: 5px;">Loan</td>
                            <td colspan="2" style="border:1px solid; padding: 5px;text-align: right;">-</td>
                            
                      
                        <tr>
                            
                            <td colspan="2" style="border:1px solid; padding: 5px">Conveyance</td>
                            <td colspan="2" style="border:1px solid; padding: 5px;text-align: right;">500</td>
                            <td colspan="2" style="border:1px solid; padding: 5px;">Other Deductiom</td>
                            <td colspan="2" style="border:1px solid; padding: 5px;text-align: right;">0.00</td>
                            
                        </tr>
                        <tr>
                            
                            <td colspan="2" style="border:1px solid; padding: 5px">Special Allowance</td>
                            <td colspan="2" style="border:1px solid; padding: 5px;text-align: right;">0.00</td>
                            <td colspan="2" style="border:1px solid; padding: 5px;"></td>
                            <td colspan="2" style="border:1px solid; padding: 5px;"></td>
                            
                        </tr>
                        <tr>
                            <td colspan="2" style="border:1px solid; padding: 5px">Total Earnings</td>
                            <td colspan="2" style="border:1px solid; padding: 5px;text-align: right;">10000</td>
                            <td colspan="2" style="border:1px solid; padding: 5px;">Total Deductions</td>
                            <td colspan="2" style="border:1px solid; padding: 5px;text-align: right;">0.00</td>
                        </tr>
                        <tr>
                            <td colspan="4" style="border:1px solid; padding: 5px;height: 33px;">Current NET Salary</td>
                            <td colspan="4" style="border:1px solid; padding: 5px;text-align: right;">10000</td>
                        </tr>
                    </tr>
                </tbody>
	    </table>
             </div>
        </div>

        <div style="margin-left:36px;">
          <table border="1" style="border-collapse: collapse; border: 1px solid;" width="100%">
                <tbody>
                    <tr style="border-top:hidden;border-right:hidden;border-left:hidden;  ">
                        <td style="font-size: 14px;border-right:hidden" colspan="2"><b>RubyCampus</b><br> No 27 & 28 Bhajanai madam street<br>Pondicherry<br>pincode 605005</td>
                    </tr>
                    <tr class="foot" style="border-top:1px solid;border-bottom:hidden;">
                        <td style="font-size:13px!important;border-right:hidden;border-left:hidden"><b>Prepared By</b></td>
                        <td style="font-size:14px!important;border-right:hidden">: Admin</td>
                        <td style="font-size:13px!important;border-right:hidden"><b>Approved By</b></td>
                        <td style="font-size:14px!important;border-right:hidden">: Admin</td>
                        <td style="font-size:13px!important;border-right:hidden"><b>Run Date</b></td>
                        <td style="font-size:14px!important;border-right:hidden">: 21-02-2017</td>
                        
                        <td align="left" style="font-size:12px!important;border-right:hidden"><span id="pageFooter"><b>Page No:</b>&nbsp;</span><span id="InitialNum">1</span> of 1<span style="font-weight: normal !important;">
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
