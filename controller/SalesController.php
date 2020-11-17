<?php
    require_once './model/ApiModelVentas.php';

    class SalesController {

        public function __construct(){
            $this->apiModelVentas = new ApiModelVentas();
        } 

        function getAll(){
            $data = $this->apiModelVentas->getAll();
            return $data;
        }

        function getVenta(){
            $id_venta = $_GET['id'];
            $data = $this->apiModelVentas->getVenta($id_venta);
            return $data;
        }

        function addVenta(){
            $data = json_decode(file_get_contents('php://input'));
            $precioTotal = 0;
            foreach ($data as $arr){
                foreach ($arr as $i){
                    $precioTotal = $precioTotal + $i->Precio;
                }
            }
            $productos=[];
             foreach ($data as $arr){
                 foreach ($arr as $p){
                     array_push($productos, $p->Nombre);
                 }
             }
            var_dump($productos);
            $venta = array ('Productos' => $productos, 'Precio' => $precioTotal);
            $this->apiModelVentas->addVenta($venta);
        }
    }

?>