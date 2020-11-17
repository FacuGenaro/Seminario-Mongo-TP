<?php
    require_once 'controller/SalesController.php';

    $salesController = new SalesController();

    $action = $_SERVER['REQUEST_METHOD'];

    if(isset($action)){
        if ($action == 'GET'){
            if(isset ($_GET['id'])){
                $response = $salesController->getVenta();
                var_dump($response);
            }else{
                $response =$salesController->getAll();
                var_dump($response);
            }
        }
        if($action == 'POST'){
            $salesController->addVenta();
        }

    }
?>