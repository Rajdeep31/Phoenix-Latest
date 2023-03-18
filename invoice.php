<?php
include('vendor/autoload.php');
$html='<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="style.css" />
<div class="wishlist-table table-responsive">
   <table>
      <thead>
         <tr>
            <th class="product-thumbnail">Product Name</th>
            <th class="product-thumbnail">Product Image</th>
            <th class="product-name">Quantity</th>
            <th class="product-price">Price</th>
            <th class="product-price">Total Price</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td class="product-name">AMD Ryzen 5 4500</td>
            <td class="product-name"><img src="media/product/9326659370_AMD-Ryzen-5-4500.webp"></td>
            <td class="product-name">1</td>
            <td class="product-name">₹8290</td>
            <td class="product-name">₹8290</td>
         </tr>
         <tr>
            <td class="product-name">Ant Esports GM610 RGB Gaming Mouse</td>
            <td class="product-name"><img src="/media/product/6279111600_Ant-Esports-GM610-RGB-Gaming-Mouse.webp"></td>
            <td class="product-name">1</td>
            <td class="product-name">₹1290</td>
            <td class="product-name">₹1290</td>
         </tr>
         <tr>
            <td colspan="3"></td>
            <td class="product-name">Total Price</td>
            <td class="product-name">₹9580</td>
         </tr>
      </tbody>
   </table>
</div>';
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);

//Cell(width , height , text , border , end line , [align] )

$mpdf->Cell(130 ,5,'GEMUL APPLIANCES.CO',0,0);
$mpdf->Cell(59 ,5,'INVOICE',0,1);//end of line

//set font to arial, regular, 12pt
$mpdf->SetFont('Arial','',12);

$mpdf->Cell(130 ,5,'[Street Address]',0,0);
$mpdf->Cell(59 ,5,'',0,1);//end of line

$mpdf->Cell(130 ,5,'[City, Country, ZIP]',0,0);
$mpdf->Cell(25 ,5,'Date',0,0);
$mpdf->Cell(34 ,5,'[dd/mm/yyyy]',0,1);//end of line

$mpdf->Cell(130 ,5,'Phone [+12345678]',0,0);
$mpdf->Cell(25 ,5,'Invoice #',0,0);
$mpdf->Cell(34 ,5,'[1234567]',0,1);//end of line

$mpdf->Cell(130 ,5,'Fax [+12345678]',0,0);
$mpdf->Cell(25 ,5,'Customer ID',0,0);
$mpdf->Cell(34 ,5,'[1234567]',0,1);//end of line




$mpdf->Output();
