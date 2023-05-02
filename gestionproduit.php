<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reverso2a28";

// Create connection
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// Set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Récupérer les données du formulaire
@$Keywords = $_POST["Keywords"];
@$valider = $_POST["valider"];

if (isset($valider) && !empty(($Keywords))) {
    $words=explode(" ",trim($Keywords));
    // Préparer la requête SQL avec le paramètre à rechercher
    $pdo = $conn->prepare("SELECT Product_name from produit where Product_name LIKE '%$1212%' ");
    $pdo->setFetchMode(PDO::FETCH_ASSOC);
    $pdo->execute();
    $tab = $pdo->fetchAll();
    $afficher = "oui";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Css -->
    <link rel="stylesheet" href="./dist/styles.css">
    <link rel="stylesheet" href="./dist/all.css">
    
    <title>REVERSO DASHBOARD</title>
</head>
<style>
    .button {
  width: 70px; 
            height: 35px;
            border-radius: 70px;
            
            background-color: rgb(233, 178, 59);
            color: black;
}
</style>
<style>
.searchBox {
    position: absolute; 
    top: 50%;
    left: 50%;
    transform:  translate(-50%,50%); 
    background: #2f3640;
   /* height: 50px; */
    border-radius: 50px;
    padding: 10px;
}
</style>

<body>
<!--Container -->
<div class="mx-auto bg-grey-lightest">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                    <h1 class="text-white p-2">REVERSO DASHBOARD</h1>
                </div>
               
            </div>
        </header>
        <!--/Header-->

        <div class="flex flex-1">
            <!--Sidebar-->
            <aside id="sidebar"
            class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

            <ul class="list-reset flex flex-col">
                <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
                    <a href="index.html"
                        class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                        <i class="fas fa-tachometer-alt float-left mx-2"></i>
                        Dashboard
                        <span><i class="fas fa-angle-right float-right"></i></span>
                    </a>
                </li>
            <li class="w-full h-full py-3 px-2 border-b border-light-border bg-white">
                <a href="tables.html" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                    <i class="fas fa-table float-left mx-2"></i>
                    user management
                    <span><i class="fa fa-angle-right float-right"></i></span>
                </a>
            </li>
            <li class="w-full h-full py-3 px-2 border-b border-light-border bg-white">
                <a href="mail.html" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                    <i class="fab fa-wpforms float-left mx-2"></i>
                    delivery management
                    <span><i class="fa fa-angle-right float-right"></i></span>
                </a>
            </li>
            <li class="w-full h-full py-3 px-2 border-b border-light-border bg-white">
                <a href="gestionsformateurs.html"
                    class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                    <i class="fas fa-table float-left mx-2"></i>
                    training management1
                    <span><i class="fa fa-angle-right float-right"></i></span>
                </a></li>
                <li class="w-full h-full py-3 px-2 border-b border-light-border bg-white">
                    <a href="gestionproduit.php"
                        class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                        <i class="fas fa-table float-left mx-2"></i>
                        product management
                        <span><i class="fa fa-angle-right float-right"></i></span>
                    </a></li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border bg-white">
                        <a href="gestionreclamation.html"
                            class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-table float-left mx-2"></i>
                            reclamation management
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a></li>
           
            </ul>

        </aside>
            <!--/Sidebar-->
            <!--Main-->
            <main class="bg-white-500 flex-1 p-3 overflow-hidden">

<div class="flex flex-col">
    <!-- Card Sextion Starts Here -->
    
    <!-- /Cards Section Ends Here -->

    <!--Grid Form-->

    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                OUR PRODUCTS
                <!--php -->
                <?php include("direction.php") ?>
                <br>
            <li class="w-full h-full py-3 px-2 border-b border-light-border bg-white">
                <a href="reverso2/index.html" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                    <i class="fab fa-wpforms float-left mx-2"></i>
                    check product window on the web site
                    <span><i class="fa fa-angle-right float-right"></i></span>
                </a>
                
                
            </li>
            
            
            
        </div>
        
    </div>
<a href="ajout.html">
            <button style=" width: 70px; 
            height: 35px;
            border-radius: 70px;
            
            background-color: rgb(233, 178, 59);
            color: black;"> Add Product
            </button>
        
            </a>
            <br>
            
        
        
  
    <!--/Grid Form-->
</div>
<div>
    <form name='fo' method="POST" action="">
    <input type="text" name="Keywords" value=" <?php echo @$Keywords ?>"  placeholder="mots_clés" />
    <input type="submit" name="valider" value="Recherche">
    </form>
    <?php if (@$afficher=="oui") {?>
    <div id='resultas'>
        <div id="nbr"> <? =count($tab)."  ".(count($tab))>1 "résultats trouvées" : "résultat trouvé"      ?>  </div>
        <ol>
            <?php for ($i=0; $i <count($tab) ; $i++){ 
                
             ?>
            <li> <?php echo $tab[$i]["Product_name"] ?></li>
            <?php } ?>
        </ol>
    </div>
    <?php } ?>
</div>
<div> 
   





</main>
<!--/Main-->
</div>



</div>


   


</body>

</html>