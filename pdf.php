<?php
include "db.php";

require 'vendor/autoload.php';


$result =$conn->query('select * from products');
$pdf=new TCPDF();
$pdf->AddPage();
$pdf->SetFont('times','B',12);


$html = '<table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Category</th>
            <th>Product Quantity</th>
            <th>Supplier Name</th>
        </tr>
';
while ($row=$result->fetch_assoc()) {
    $html.='<tr>
    <td>'.$row['id'].'</td>
    <td>'.$row['pname'].'</td>
    <td>'.$row['pprice'].'</td>
    <td>'.$row['pcategory'].'</td>
    <td>'.$row['pquantity'].'</td>
    <td>'.$row['sname'].'</td>
    </tr>
    ';
}
$html.= '</table>';
$pdf->writeHTML($html, true, false, true, false,'');
$pdf->Output('product.pdf','D');

?>