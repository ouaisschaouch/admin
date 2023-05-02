<?php
include("connect_db.php");
if($con)
{
    extract($_GET);
    echo $Product_Name;
    echo $Quantity_in_Stock;
    echo $Price;
    echo $Size;
    echo $Image;
    echo $id;
    $reqeutte="UPDATE stock_quantity
    SET Size = '$Size',quantity_in_stock=$Quantity_in_Stock
    WHERE Size = '$ancien_size' AND Id_Produit  = '$id'";
}

?>