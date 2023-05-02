<?php
include("connect_db.php");
if($con){
extract($_GET);
$req="SELECT * FROM Produit where Id_Produit ='$Id_product'";
$res=mysqli_query($con,$req);
if(mysqli_num_rows($res)==0){
    $requette="INSERT INTO Produit VALUES('$Id_product','$Product_Name','$URL_image',$price)";
    $result=mysqli_query($con,$requette);
}
$req="SELECT * FROM stock_quantity where Id_Produit ='$Id_product'";
$res=mysqli_query($con,$req);
if(mysqli_num_rows($res)==0){
    $requette1="INSERT INTO stock_quantity VALUES('$Id_product','$size',$Quantity_in_Stock)";
    $result1=mysqli_query($con,$requette1);
}

header("Location: gestionproduit.php");
}
?>