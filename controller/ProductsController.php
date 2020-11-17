<?php
    require_once './model/ApiModelProductos.php';

    class ProductsController {

        public function __construct(){
            $this->apiModelProductos = new ApiModelProductos();
        } 

        function addProducto(){
            $data = json_decode(file_get_contents('php://input'));
            $producto = array ('Nombre' => $data->Nombre, 'Precio' => $data->Precio);
            $this->apiModelProductos->addProducto($producto);
        }

        function getAll(){
            $data = $this->apiModelProductos->getAll();
            return $data;
        }

        function getProducto(){
            $id_producto = $_GET['id'];
            $data = $this->apiModelProductos->getProducto($id_producto);
            return $data;
        }

        function updateProducto(){
            $data = json_decode(file_get_contents('php://input'));
            $datosAct = array ('Nombre' => $data->Nombre, 'Precio' => $data->Precio);
            $response = $this->apiModelProductos->updateProducto($datosAct, $_GET['id']);
            return $response;
        }

        function deleteProducto(){
            $data = json_decode(file_get_contents('php://input'));
            $datosAct = array ('Nombre' => $data->Nombre, 'Precio' => $data->Precio);
            $response = $this->apiModelProductos->deleteProducto($datosAct, $_GET['id']);
            return $response;
        }
    }

?>