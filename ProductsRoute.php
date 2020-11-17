<?php
    require_once 'controller/ProductsController.php';

    $productsController = new ProductsController();
    //$salesController = new SalesController();

    $action = $_SERVER['REQUEST_METHOD'];

    if(isset($action)){
        if ($action == 'GET'){
            if(isset ($_GET['id'])){
                $response = $productsController->getProducto();
                var_dump($response);
            }else{
                $response =$productsController->getAll();
                var_dump($response);
            }
        }
        if($action == 'POST'){
            $productsController->addProducto();
        }
        if($action == 'PUT'){
            if(isset($_GET['id'])){
                $productsController->updateProducto();
            }
        }
        if($action == 'DELETE'){
            if(isset($_GET['id'])){
                $productsController->deleteProducto();
            }  
        }
    }
?>