<?php require_once "include/connect.php";?>
<?php
$nameFull=$_POST['nameFull'];
$phone=$_POST['phone'];
$texti=$_POST['texti'];
$today = date("Y-m-d");
$con->query("INSERT INTO `orders` (`Id_order`, `Name_order`, `Phone_order`, `Order_about`, `Order_date`, `Id_customer`) 
  VALUES (NULL, '$nameFull', '$phone', '$texti', '$today', '3213')");
 $response = [
  "status" => true,
  "type" => 2,
  "message" => "Дані збережені"
];
echo json_encode($response);