<?php
include("htdocs\gestion_produit\config.php");
if($con){
extract($_GET);    
$id=$_GET['id'];   
echo $id;
$req="SELECT * FROM stock_quantity WHERE Id_Produit='$id'";
$res=mysqli_query($con,$req);
if(mysqli_num_rows($res)==0)
{
    echo "<script>alert('id invalid1'); setTimeout(function() { window.location.href = 'gestionproduit.php'; }, 20);</script>";
    exit();
}  
else{   
$requet="UPDATE stock_quantity SET Size='$size',quantity_in_stock= $Quantity_in_Stock WHERE Id_Produit ='$id' and Size='$ancien_size'";
$result=mysqli_query($con,$requet);
}
$req="SELECT * FROM Produit WHERE Id_Produit='$id'";
$res=mysqli_query($con,$req);
if(mysqli_num_rows($res)==0)
{
    echo "<script>alert('id invalid2'); setTimeout(function() { window.location.href = 'gestionproduit.php'; }, 20);</script>";
} else{
$requet1="UPDATE Produit SET Product_name='$Product_Name',Url_image= '$URL_image',unit_price=$price WHERE Id_Produit ='$id'";
$result1=mysqli_query($con,$requet1);
}
    echo "<script>alert('modification avec succee'); setTimeout(function() { window.location.href = 'gestionproduit.php'; }, 200);</script>";


}

?>