<?php


    require('connection.inc.php');
    require('functions.inc.php');
    require('add_to_cart.inc.php');

    $product_id=get_safe_value($con,$_POST['pid']);
    $qty=get_safe_value($con,$_POST['qty']);
    $type=get_safe_value($con,$_POST['type']);

    $productSoldQtyByProductId=productSoldQtyByProductId($con,$product_id);
    $productQty=productQty($con,$product_id);

    $pending_qty=$productQty-$productSoldQtyByProductId;
    // if($qty>$pending_qty){
    //     echo "not_available";
    //     die();
    // }



    $obj=new add_to_cart();

    if($type=='add'){
        $obj->addProduct($product_id,$qty);
    }

    if($type=='remove'){
        $obj->removeProduct($product_id);
    }


    if($type=='update'){
        $obj->updateProduct($product_id,$qty);
    }


    echo $obj->totalProduct();
?>






