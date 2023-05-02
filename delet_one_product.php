<?php
include("connect_db.php");
if($con)
{$id=$_GET['id'];
    $Size=$_GET['size'];
    $requette="DELETE FROM stock_quantity where Id_Produit ='$id' and Size='$Size'";
    $result=mysqli_query($con,$requette);
    echo"ok";
    if($result){
        header("Location: gestionproduit.php");
    }
    else{
        echo "invalid"; 
    }
}
// 

?>