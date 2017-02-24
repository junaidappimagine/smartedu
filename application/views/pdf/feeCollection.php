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
          .textAlign{
            margin-left:10px!important;
          }
         
        .innerTable th{
           text-align: left!important;
           padding-left: 10px;
           font-size: 12px;
            font-family: "Helvetica";
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
                        <span style="font-size: 14px;"><b>Fee Collection</b></span><br>
                    </th>
                </tr>
            </table>
            </center> <br><br>
            <table style="line-height: 29px;">
                <tr>
                    <td style="width:50%">
                        <span>Name    : Karthik</span>
                    </td>
                </tr>
                <tr>
                     <td style="width:50%">
                        <span>Admission no   : STD002</span>
                    </td>
                </tr>
                <tr>
                    <td style="width:50%">
                        <span>Roll number : C1003</span>
                    </td>
                </tr>
                <tr>
                    <td style="width:50%">
                        <span>Class   : Bachelor of Commerce</span>
                    </td>
                </tr>
                <tr>
                    <td style="width:50%">
                        <span>Batch   : BSc - B</span>
                    </td>
                </tr>
                <tr>
                    <td style="width:50%">
                        <span>Fee Collection Name  : Term 2 fee collection</span>
                    </td>
                </tr>
            </table><br>
             <table style="width:100%;line-height: 28px;" id="number3">
                <thead style="background-color: #EDEDED;font-weight: 500!important;" class="innerTable">
                    <tr>
                    <th style="width:10%;">
                      Sl.No
                    </th>
                    <th style="width:25%;">
                       Particulars
                    </th>
                    <th style="width:21%;">
                        Amount(Rs.)
                    </th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="textAlign">1</td>
                        <td class="textAlign">Admission fee </td>
                        <td class="textAlign"> 5000.00</td>
                    </tr>
                     <tr>
                        <td class="textAlign">2</td>
                        <td class="textAlign">Tuition fee </td>
                        <td class="textAlign"> 4000.00</td>
                    </tr>
                    
                </tbody>
                <br>
            </table>
              <table style="width:100%;line-height: 28px;" id="number3">
                <thead style="background-color: #EDEDED;font-weight: 500!important;" class="innerTable">
                    <tr>
                    <th style="width:10%;">
                        
                    </th>
                    <th colspan="2" style="width:46%;">
                       Discount
                    </th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="textAlign">1</td>
                        <td class="textAlign">Discount(15.0%)</td>
                        <td class="textAlign"> 1350.00</td>
                    </tr>
                </tbody>
            </table>
              <br>
              <table  style="width:100%;line-height: 28px;" id="number3">
                <thead style="background-color: #EDEDED;font-weight: 500!important;" class="innerTable">
                <tr>
                    <th style="width:10%;">
                     
                    </th>
                    <th colspan="2" style="width:46%;">
                        Fine
                    </th>
                </tr>
                </thead>
                <tbody>
                     <tr style="width:100% !important;">
                        <td class="textAlign">1</td>
                        <td class="textAlign">Fine on 02-08-2017</td>
                        <td class="textAlign"> 150.00</td>
                          
                    </tr>
                
                </tbody>
            </table>
              <br>
            </table>
              <table style="width:100%;line-height: 28px;" id="number3">
                <thead style="background-color: #EDEDED;font-weight: 500!important;" class="innerTable">
                    <tr>
                    <th style="width:10%;">
                       
                    </th>
                    <th colspan="2" style="width:25%;">
                      Summary
                    </th>
                    
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="textAlign">1</td>
                        <td class="textAlign">Total Particular Fees</td>
                        <td class="textAlign"> 9000.00</td>
                    </tr>
                     <tr>
                        <td class="textAlign">2</td>
                        <td class="textAlign">Total discount</td>
                        <td class="textAlign"> 1350.00</td>
                    </tr>
                    <tr>
                        <td class="textAlign">3</td>
                        <td class="textAlign">Total Fine</td>
                        <td class="textAlign"> 150.00</td>
                    </tr>
                      <tr>
                        <td colspan="2" class="textAlign">Total fees</td>
                        <td class="textAlign"> 7650.00</td>
                    </tr>
                        <tr>
                        <td colspan="2" class="textAlign">Payment done</td>
                        <td class="textAlign"> 0.00</td>
                    </tr>
                     <tr>
                        <td colspan="2" class="textAlign">Amount to pay</td>
                        <td class="textAlign"> 7800.00</td>
                    </tr>
                    
                </tbody>
            </table>
             <br>
        
            </div>
    </div>

</body>
</html>


























