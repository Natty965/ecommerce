<?php 
session_start();
if (isset($_POST['add_to_cart'])){

    // If user has already added products to the cart
    if (isset($_SESSION['cart'])) {
        // Check if product is already in the cart
        $products_array_ids = array_column($_SESSION['cart'], "product_id");
        
        if (!in_array($_POST['product_id'], $products_array_ids)) {
            // If not, add product to the cart
            $product_array = array(
                'product_id' => $_POST['product_id'],
                'product_name' => $_POST['product_name'],
                'product_price' => $_POST['product_price'],
                'product_image' => $_POST['product_image'],
                'product_quantity' => $_POST['product_quantity'] // Fixed typo here
            );
            $_SESSION['cart'][$_POST['product_id']] = $product_array;

        } else {
            // If product is already in the cart
            echo '<script>alert("Product already added");</script>';
        }

    } else {
        // If this is the first product in the cart
        $product_array = array(
            'product_id' => $_POST['product_id'],
            'product_name' => $_POST['product_name'],
            'product_price' => $_POST['product_price'],
            'product_image' => $_POST['product_image'],
            'product_quantity' => $_POST['product_quantity']
        );
        $_SESSION['cart'][$_POST['product_id']] = $product_array;
    }
    // removing item from cart
}else if(isset($_POST['remove_product'])){
    $product_id = $_POST['product_id'];
    unset($_SESSION['cart'][$product_id]);
    
    // cart edit btn
}else if(isset($_POST['edit_quantity'])){
    $product_id = $_POST['product_id'];
    $product_quantity = $_POST['product_quantity'];

    $product_array = $_SESSION['cart'][$product_id];
    $product_array['product_quantity'] = $product_quantity;
    if($product_quantity <= 0){
        $product_quantity = 1;
    }else{
        $_SESSION['cart'][$product_id ] = $product_array;

    }



}else {
    header('Location: cart.php');
    exit;
}
?>
