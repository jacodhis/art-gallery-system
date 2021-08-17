<?php

session_start();

// session_destroy();
if($_SERVER["REQUEST_METHOD"] == "POST"){
     if(isset($_POST['add-to-cart'])){

    
       
         //if cart has any item
         if(isset($_SESSION['cart'])){
              //checks if item is in cart already
              
             $my_items = array_column($_SESSION['cart'],'name');
             if(in_array($_POST['item-name'],$my_items)){
                 echo "<script>alert('item already added');
                window.location.href = 'all-Arts';
                 </script>";
               

             }else{
                    //if item is not added to cart
                    $count = count($_SESSION['cart']);
                    $_SESSION['cart'][$count] = array('name'=>$_POST['item-name'],'price'=>$_POST['price'],'quantity'=>1,'user_id'=>$_POST['user_id']);
                    //  print_r($_SESSION['cart']);
                    echo "<script>alert('item  added');
                    window.location.href = 'mycart';
                    </script>";
             }
           

   
         }else{
            $_SESSION['cart'][0 ] = array('name'=>$_POST['item-name'],'price'=>$_POST['price'],'quantity'=>1,'user_id'=>$_POST['user_id']);
            echo "<script>alert('item  added');
            window.location.href = 'all-Arts';
             </script>";
            // print_r($_SESSION['cart']);
         }
        //  $name = $_POST['name'];
        //  $price = $_POST['price'];

     }
     if(isset($_POST['remove_item'])){

         foreach($_SESSION['cart'] as $key =>$value){
             if($value['name'] == $_POST['item_name']){
                   unset($_SESSION['cart'][$key]);
                   $_SESSION['cart'] = array_values($_SESSION['cart']);
                   
                  echo "<script>alert('item removed ');
                           window.location.href = 'mycart';
                        </script>";

                  
                    // header("Location:mycart.php");

             }
             
         }
     }
}else{
    echo "no post";
}
?>

