<?php
$con=mysqli_connect("localhost","root","","reverso2a28");
if(!$con){
    die("connexion invalid");
}
?>


<!-- SELECT DISTINCT * FROM Produit JOIN stock_quantity ON Produit.Id_Produit = stock_quantity.Id_Produit JOIN Vente ON stock_quantity.Id_Produit = Vente.Id_Produit -->
