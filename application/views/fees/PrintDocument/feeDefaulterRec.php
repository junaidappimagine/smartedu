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
                        <span style="font-size: 14px;"><b>Fee Defaulter Print Doc</b></span><br>
                    </th>
                </tr>
            </table>
            </center> <br><br>
            <table style="line-height: 29px;">
                <tr>
                    <td style="width:50%">
                        <span>Class    : G01 - A</span>
                    </td>
                </tr>
              
            </table>
             <table style="width:100%;line-height: 28px;" id="number3">
                <thead style="background-color: #EDEDED;font-weight: 500!important;" class="innerTable">
                    <tr>
                    <th style="width:10%;">
                      Sl.No
                    </th>
                    <th style="width:25%;">
                       Name
                    </th>
                    <th style="width:25%;">
                       Roll Number
                    </th>
                    <th style="width:21%;">
                        Amount(Rs.)
                    </th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="textAlign">1</td>
                        <td class="textAlign">Karthik</td>
                        <td class="textAlign"> G11501</td>
                        <td class="textAlign"> 5000.00</td>
                    </tr>
                </tbody>
            </table>
              <br>
            </table>
    </div>

</body>
</html>


























