<?php    

require_once 'core.php';

$orderId = $_POST['orderId'];

$sql = "SELECT order_date, client_name, client_contact, sub_total, vat, total_amount, discount, grand_total, paid, due, payment_place,gstn FROM orders WHERE order_id = $orderId";

$orderResult = $connect->query($sql);
$orderData = $orderResult->fetch_array();

$orderDate = $orderData[0];
$clientName = $orderData[1];
$clientContact = $orderData[2]; 
$subTotal = $orderData[3];
$vat = $orderData[4];
$totalAmount = $orderData[5]; 
$discount = $orderData[6];
$grandTotal = $orderData[7];
$paid = $orderData[8];
$due = $orderData[9];
$payment_place = $orderData[10];
$gstn = $orderData[11];


$orderItemSql = "SELECT order_item.product_id, order_item.rate, order_item.quantity, order_item.total,
product.product_name FROM order_item
   INNER JOIN product ON order_item.product_id = product.product_id 
 WHERE order_item.order_id = $orderId";
$orderItemResult = $connect->query($orderItemSql);

 $table = '<style>
.star img {
    visibility: visible;
}</style>
<table align="center" cellpadding="0" cellspacing="0" style="width: 100%;border:1px solid black;margin-bottom: 10px;">
               <tbody>
               <style>
				.tbody{
				font-family:Georgia, Times New Roman, Times, serif;
     		 }</style>
                  <tr>
                     <td colspan="5" style="text-align:center;color: red;text-decoration: underline;    font-size: 25px;">PAYMENT INVOICE</td>
                  </tr>
                  <tr>
                     <td rowspan="8" colspan="2" style="border-left:1px solid black;" background-image="woo-inv-log.png"><img src="woo-inv-log.png" alt="logo" width="250px;"></td>
                     <td colspan="3" style=" text-align: right;">ORIGINAL</td>
                  </tr>
                  <tr>
                     <td colspan="3" style=" text-align: right;color: red;font-style: italic;font-weight: 600;text-decoration: underline;font-size: 25px;">WSI</td>
                  </tr>
                  <tr>
                     <td colspan="3" style=" text-align: right;">Mr. dev67,</td>
                  </tr>
                  <tr>
                     <td colspan="3" style=" text-align: right;">Nairobi, 00100</td>
                  </tr>
                  <tr>
                     <td colspan="3" style=" text-align: right;">Tel: +254 703 501 929 | +254 778 018 264.</td>
                  </tr>
                  <tr>
                     <td colspan="3" style=" text-align: right;">Email: info@woostem.com</td>
                  </tr>
                  <tr>
                     <td colspan="3" style=" text-align: right;color: blue;text-decoration: underline;">devl67@gmail.com</td>
                  </tr>
                  <tr>
                     <td colspan="2" style="padding: 0px;vertical-align: top;border-right:1px solid black;">
                        <table align="left" cellpadding="0" cellspacing="0" style="border: thin solid black; width: 100%">
                           <tbody>
                              <tr>
                                 <td style="width: 74px;vertical-align: top;color: red;" rowspan="3">TO, </td>
                                 <td style="border-bottom-style: solid; border-bottom-width: thin; border-bottom-color: red">&nbsp;'.$clientName.'</td>
                              </tr>
                              <tr>
                                 <td style="border-bottom-style: solid; border-bottom-width: thin; border-bottom-color: black">&nbsp;</td>
                              </tr>
                              <tr>
                                 <td style="border-bottom-style: solid; border-bottom-width: thin; border-bottom-color: black">&nbsp;</td>
                              </tr>
                           </tbody>
                        </table>
                        <table align="left" cellspacing="0" style="width: 100%; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-width: thin; border-bottom-width: thin; border-left-width: thin; border-right-color: black; border-bottom-color: black; border-left-color: black;">
                           <tbody>
                              <tr>
                                 <td style=" border-bottom-style: solid; border-bottom-width: thin; border-bottom-color: red;color: red;">G.S.T.IN :'.$gstn.'</td>
                                 <td style="border-left-style: solid; border-left-width: thin; border-left-color: black; border-bottom-style: solid; border-bottom-width: thin; border-bottom-color: red;color: red;">Mobile No: '.$clientContact.'</td>
                              </tr>
                           </tbody>
                        </table>
                     </td>
                     <td style="padding: 0px;vertical-align: top;" colspan="3">
                        <table align="left" cellpadding="0" cellspacing="0" style="width: 100%">
                           <tbody>
                              <tr>
                                 <td style="border-bottom-style: solid;border-bottom-width: thin;border-bottom-color: black;border-top: 1px solid black;border-right: 1px solid black;color: red;">Bill No : .</td>
                              </tr>
                              <tr>
                                 <td style="border-bottom-style: solid;border-bottom-width: thin;border-bottom-color: black;border-right: 1px solid black;    color: red;">Date: '.$orderDate.'</td>
                              </tr>
                              <tr>
                                 <td style="border-bottom-style: solid;border-bottom-width: thin;border-bottom-color: black;height: 52px;border-right: 1px solid black;    color: red;">G.S.T.IN: </td>
                              </tr>
                           </tbody>
                        </table>
                     </td>
                  </tr>
                  <tr>
                     <td style="width: 123px;text-align: center;background-color: black;color: white;border-right: 1px solid white;border-left: 1px solid black;border-bottom: 1px solid black;-webkit-print-color-adjust: exact;">D.C.NO<br>
                     </td>
                     <td style="width: 50%;text-align: center;border-top-style: solid;border-right-style: solid;border-bottom-style: solid;border-top-width: thin;border-right-width: thin;border-bottom-width: thin;border-top-color: black;border-right-color: white;border-bottom-color: black;color: white;background-color: black;-webkit-print-color-adjust: exact;">Description Of Goods</td>
                     <td style="width: 150px;text-align: center;border-top-style: solid;border-right-style: solid;border-bottom-style: solid;border-top-width: thin;border-right-width: thin;border-bottom-width: thin;border-top-color: black;border-right-color: #fff;border-bottom-color: black;background-color: black;color: white;-webkit-print-color-adjust: exact;">Qty.</td>
                     <td style="width: 150px;text-align: center;border-top-style: solid;border-right-style: solid;border-bottom-style: solid;border-top-width: thin;border-right-width: thin;border-bottom-width: thin;border-top-color: black;border-right-color: #fff;border-bottom-color: black;background-color: black;color: white;-webkit-print-color-adjust: exact;">Rate&nbsp; Ksh.<br>
                        Ps
                     </td>
                     <td style="width: 150px;text-align: center;border-top-style: solid;border-right-style: solid;border-bottom-style: solid;border-top-width: thin;border-right-width: thin;border-bottom-width: thin;border-top-color: black;border-right-color: black;border-bottom-color: black;color: white;background-color: black;-webkit-print-color-adjust: exact;">Amount&nbsp; Ksh.<br>
                     </td>
                  </tr>';
                  $x = 1;
                  $cgst = 0;
                  $igst = 0;
                  if($payment_place == 2)
                  {
                     $igst = $subTotal*18/100;
                  }
                  else
                  {
                     $cgst = $subTotal*9/100;
                  }
                  $total = $subTotal+2*$cgst+$igst;
            while($row = $orderItemResult->fetch_array()) {       
                        
               $table .= '<tr>
                     <td style="border-left: 1px solid black;border-right: 1px solid black;height: 27px;">'.$x.'</td>
                     <td style="border-left: 1px solid black;height: 27px;">'.$row[4].'</td>
                     <td style="border-left: 1px solid black;height: 27px;">'.$row[2].'</td>
                     <td style="border-left: 1px solid black;height: 27px;">'.$row[1].'</td>
                     <td style="border-left: 1px solid black;border-right: 1px solid black;height: 27px;">'.$row[3].'</td>
                  </tr>
               ';
            $x++;
            } // /while
                $table.= '
                  <tr style="border-bottom: 1px solid black;">
                     <td style="border-left: 1px solid black;border-right: 1px solid black;height: 27px;"></td>
                     <td style="border-left: 1px solid black;height: 27px;"></td>
                     <td style="border-left: 1px solid black;height: 27px;"></td>
                     <td style="width: 149px;border-right-style: solid;border-bottom-style: solid;border-right-width: thin;border-bottom-width: thin;border-right-color: black;border-bottom-color: #000;background-color: black;color: white;padding-left: 5px;-webkit-print-color-adjust: exact;">Total</td>
                     <td style="width: 218px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-top-width: thin; border-right-width: thin; border-bottom-width: thin; border-top-color: black; border-right-color: black; border-bottom-color: black;">'.$subTotal.'</td>
                  </tr>
                  <tr>
                     <td colspan="3" style="border-top: 1px solid black;border-bottom: 1px solid black;border-left: 1px solid black;padding: 5px;">A/C For:- WCB </td>
                     <td rowspan="2" style="border-bottom: 1px solid black;width: 199px;color: white;background-color: black;padding-left: 5px;-webkit-print-color-adjust: exact;">S.G.S.T. 9%</td>
                     <td rowspan="2" style="border-bottom: 1px solid black;width: 288px;border-right: 1px solid black;">'.$cgst.'</td>
                  </tr>
                  <tr>
                     <td colspan="3" style="border-bottom: 1px solid black;width: 859px;border-left: 1px solid black;padding: 5px;">Branch:- 1 Hurly Avenue, Nrb, MfV RD</td>
                  </tr>
                  <tr>
                     <td colspan="3" style="border-bottom: 1px solid black;border-left: 1px solid black;padding: 5px;">Bank UKYK CODE:- z0078m32q11p</td>
                     <td rowspan="2" style="border-bottom: 1px solid black;width: 149px;background-color: black;color: white;padding-left: 5px;-webkit-print-color-adjust: exact;">C.G.S.T. 9%</td>
                     <td rowspan="2" style="width:218px;border-bottom: 1px solid black;border-right: 1px solid black;">'.$cgst.'
                     </td>
                  </tr>
                  <tr>
                     <td colspan="3" style="border-bottom: 1px solid black;border-left: 1px solid black;padding: 5px;">AC. HO. Name:- Woostem Inc.</td>
                  </tr>
                  <tr>
                     <td colspan="3" style="border-bottom: 1px solid black;border-left: 1px solid black;padding: 5px;">AC.NO. :-00230-03002</td>
                     <td style="border-bottom: 1px solid black;background-color: black;color: white;padding: 5px;-webkit-print-color-adjust: exact;">I.G.S.T. 18%</td>
                     <td style="border-bottom: 1px solid black;border-right: 1px solid black;">'.$igst.'</td>
                  </tr>
                  <tr>
                     <td colspan="3" style="border-left: 1px solid black;border-bottom: 1px solid black;color: red;padding: 5px;">Amount in words</td>
                     <td style="border-bottom: 1px solid #fff;background-color: black;color: white;padding: 5px;-webkit-print-color-adjust: exact;">G. Total</td>
                     <td style="border-bottom: 1px solid black;border-right: 1px solid;">'.$total.'</td>
                  </tr>
                  <tr>
                     <td colspan="3" style="border-left: 1px solid black;border-bottom: 1px solid black;padding: 5px;border-right: 1px solid black;">* Subject to woostem org.             <span style="float: right;"> E.&amp;.O.E.</span></td>
                     <td rowspan="2" colspan="2" style="vertical-align: bottom;padding: 5px;color: red;border-right: 1px solid black;text-align: center;"> Woostem Inc.</td>
                  </tr>
                  <tr>
                     <td colspan="3" style="border-left: 1px solid black;padding-left: 5px;border-right: 1px solid black;">
                        * Intrest will be charged upon all acounts 
                        <p style="margin: 0px;">remaning unpaid after due date</p>
                     </td>
                  </tr>
               </tbody>
            </table>';
$connect->close();

echo $table;