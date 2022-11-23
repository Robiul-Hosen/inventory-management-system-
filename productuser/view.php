<?php
$con = new mysqli('localhost','root'.'','','ims');
 
 $sql = "SELECT p.product_id, p.product_name,p.product_details,p.product_Total_quantity,p.product_price,s.Supplier_Name,c.name as category FROM product p INNER JOIN supplier s ON p.Supplier_ID = s.Supplier_ID INNER JOIN category c ON p.Category_id=c.id";
$result = mysqli_query($con,$sql);

?>