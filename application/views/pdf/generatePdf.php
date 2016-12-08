<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <style>
          @page {
          size: A4 landscape;  
          margin: 30pt 30pt 70pt 30pt;
          border: 1px solid red;
          }
          .main{
              border: 1px solid;
          }
          .title{
              border: 1px solid red;
          }
          table {
             border-collapse: collapse;
            }
          th,td{
              padding: 12px;
          }
          @media al{
              border-collapse: collapse;
          }
        </style>
    </head>
<body>
<table>
    <tr>
        <td> <img id="previewing" src="<?php echo base_url();?>/assets/img/logo.jpg"  name="profile" width="70px" height="70px"></td>
        <td><h1>School Name</h1> City</td>
    </tr>
</table>
<div class="main">
    <table style="width: 100%;" colspan="500" rowspan="500">
        <tr style="border-bottom: 1px solid;">
            <th style="text-align:left;border-bottom: 1px solid" colspan="4">
                <span style="font-size: 25px;"><b>Payslip</b></span>
            </th>
             <th style="text-align: right; border-bottom: 1px solid" colspan="4">
                <span style="font-size: 14px;">07 December 16 - 07 December 16</span>
            </th>
        </tr>
        <tr>
            <td>Employee Name</td>
            <td  style="text-align:left;border-right: 1px solid"  colspan="3">:   Name</td>
            <td>Number of Working days</td>
            <td colspan="3">:   30</td>
        </tr>
        <tr>
            <td>Department</td>
            <td  style="text-align:left;border-right: 1px solid"  colspan="3">:   System Admin</td>
           <td>Number of days present</td>
            <td colspan="3">:   28</td>
        </tr>
        <tr>
            <td>Category</td>
            <td  style="text-align: left;border-right: 1px solid" colspan="3">:   System admin</td>
           <td>Number of days absent</td>
            <td colspan="3">:   2</td>
        </tr>
        <tr>
            <td style="border-bottom: 1px solid">Position</td>
            <td  style="text-align: left;border-bottom: 1px solid;border-right: 1px solid" colspan="3">:   System admin</td>
            <td style="border-bottom: 1px solid">Loss of pay</td>
            <td style="border-bottom: 1px solid" colspan="3">:   2</td>
        </tr>
        <tr style="border-bottom: 1px solid;">
            <th style="text-align: left;border-bottom: 1px solid" colspan="4">
                <span style="font-size: 20px;"><b>Earnings</b></span>
            </th>
             <th style="text-align:left;border-bottom: 1px solid" colspan="4">
                <span style="font-size: 20px;"><b>Deductions</b></span>
            </th>
        </tr>
        <tr>
            <td colspan="3">Food Coupon</td>
            <th  style="text-align:right;border-right: 1px solid">$1000.00</th>
            <td colspan="3">Food Coupon</td>
            <th  style="text-align:right;">$2500.00</th>
        </tr>
        <tr>
            <td colspan="3">DA</td>
            <th style="text-align:right;border-right: 1px solid">$5000.00</th>
            <td colspan="3">LOP</td>
            <th  style="text-align:right;">$1000.00</th>
        </tr>
       <tr>
            <td colspan="3">HRA</td>
            <th style="text-align:right;border-right: 1px solid">$500.00</th>
            <td colspan="3"><b>Total deductions</b></td>
            <th  style="text-align:right;">$3500.00</th>
        </tr>
       <tr>
            <td style="border-bottom: 1px solid" colspan="3"><b>Total earnings</b></td>
            <th style="text-align:right;border-bottom: 1px solid;border-right: 1px solid">$11000.00</th>
            <th style="border-bottom: 1px solid"colspan="5"></th>
        </tr>
       <tr>
            <td colspan="5"></td>
            <td colspan="2"><b>Net Salary</b></td>
            <th  style="text-align:right;font-size: 25px"><b>$16500.00</b></th>
        </tr>
    </table>
</div>
</body>
</html>


























