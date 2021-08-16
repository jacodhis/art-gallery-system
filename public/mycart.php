
<?php 
session_start() ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my cart</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                    <h1>My Cart</h1>
            </div>

            <div class="col-lg-8">
            
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Serial Number</th>
                                <th scope="col">Item name</th>
                                <th scope="col">Item Price</th>
                                <th scope="col">Quantity</th>
                                </tr>
                            </thead>
                        <tbody class="text-center">
                            <?php 
                          
                            $total = 0;

                            if(isset($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $key => $value){
                                    $sr = $key+1;
                                    $total = $total+$value['price'];
                                    ?>
                                   
                                    <tr>
                                        <td><?php echo $sr; ?></td>
                                        <td><?php echo $value['name'];?></td>
                                        <td><?php echo $value['price'];?></td>
                                        <td><?php echo $value['price'];?></td>
                                        <td><input type="number" class = "text-center" value="<?php echo $value['quantity'];?>" min="1" max="10"></td>
                                        <td>
                                            <form action="manage_cart.php" method="POST">
                                                <input type="hidden" name="item_name" value="<?php echo $value['name']?>">
                                                
                                            <button class="btn btn-sm btn-outline-danger" name="remove_item">remove</button>
                                            </form>
                                        </td>
                                    </tr>
             
             
                                <?php
                                 }
                                
                            }else{
                                echo "cart items = 0 ";
                            }
                            
                            ;?>
                            
                        
                         </tbody>
                        </table>

            </div>

            <div class="col-lg-4">
                <div class="border bg-light rounded p-4">
                <h3 class="">Total : <?php echo $total;?></h3>
                <form action="" method="post">
                    <div class="form-check">
                    <!-- <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Default radio
                    </label>
                    </div> -->
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      check on delivery option
                    </label>
                    </div>
                    <button class="btn btn-primary btn-block">make payment</button>
                </form>

                </div>
              
            </div>
        </div>
    </div>
    

</body>
</html>