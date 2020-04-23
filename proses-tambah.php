<?php

include 'koneksi.php';

if(isset($_POST['simpan']))
{
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $company = $_POST['company'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $code = $_POST['code'];
  $varian = $_POST['varian'];
  $size = $_POST['size'];
  $bank_name = $_POST['bank_name'];
  $card_number = $_POST['card_number'];
  $region = $_POST['region'];
  $sql = "INSERT INTO beli (first_name, last_name, company, email, phone, code, varian, size, bank_name, card_number, region)
            VALUES ('$first_name', '$last_name', '$company', '$email', '$phone', '$code', '$varian', '$size', '$bank_name', '$card_number', '$region')";

$res = mysqli_query($koneksi, $sql);

$count = mysqli_affected_rows($koneksi);

if($count == 1)
{
   header("Location: http://localhost/Covid/main/product.php");
}
else
{
   header("Location: buy.php");
}
}
?>
