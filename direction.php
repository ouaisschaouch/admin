

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</div>
                            <div class="p-3">
                                <table class="table-responsive w-full rounded">
                                    <thead>
                                      <tr>
                                      <th class="border w-1/4 px-4 py-2">Product Code </th>
                                        <th class="border w-1/4 px-4 py-2">Product Name </th>
                                        <th class="border w-1/6 px-4 py-2">Size</th>
                                        <th class="border w-1/6 px-4 py-2">Price</th>
                                        <th class="border w-1/6 px-4 py-2">Quantity in stock</th>
                                        


                                       
                                      </tr>
                                    </thead>
                                     <tbody>
                                        <!-- debut -->
                                        <?php 
                                        include("connect_db.php");
                                        if($con){
                                            $requette="SELECT DISTINCT *
                                            FROM Produit
                                            JOIN stock_quantity
                                            ON Produit.Id_Produit = stock_quantity.Id_Produit";
                                           $result = mysqli_query($con, $requette);
                                           if( mysqli_num_rows($result)>0){
                                            while ($row = mysqli_fetch_array($result)){
                                               

                
                                        ?>
                                        <tr>
                                            

                                            <td class="border px-4 py-2"><?php echo $row[0];?></td>
                                            <td class="border px-4 py-2"><?php echo $row[1];?></td>
                                            <td class="border px-4 py-2"><?php echo $row[5];?></td>
                                            <td class="border px-4 py-2"><?php echo $row[3];?></td>
                                            <td class="border px-4 py-2"><?php echo $row[6];?></td>
                                              
                                          
                                            
                                            <td class="border px-4 py-2"> 

                                                <a href="modifie.php?id=<?php echo $row[0];?>&size=<?php echo $row[5];?>" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                        <i class="modal-trigger  fas fa-edit" data-modal='centeredFormModal'></i></a>
                                                <a href="./delet_one_product.php?id=<?php echo $row[0];?>&size=<?php echo $row[5];?>" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                                                        <i class="fas fa-trash"  ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php                            }
                                            }
                                        }  ?>
                                        <!-- fin -->
                                      </tbody>
                                    </thead>
                                </table>



  


                               
                            </div>
   
</body>
</html>