<?php
    require_once './vendor/autoload.php';

    class ApiModelProductos{
        protected $connection;
        protected $db;
        protected $collection;
        public function __construct() {
            $this->connection = new MongoDB\Client;
            $this->db = $this->connection->tienda;
            $this->collection = $this->db->productos;
        }
        //CRUD Productos

        //Create
        function addProducto ($producto){
            $this->collection->insertOne($producto);
        }
        //Read

        function getAll(){
            return $this->collection->find()->toArray();
        }

        function getProducto($id_producto){
            var_dump($id_producto);
            return $this->collection->find(['_id' => new \MongoDB\BSON\ObjectID ($id_producto)]) -> toArray();
        }

        //Update

        function updateProducto($datosAct, $id){
            $this->collection->updateOne(['_id' => new \MongoDB\BSON\ObjectID($id)],['$set' => $datosAct]);
        }

        //Delete

        function deleteProducto($datosAct, $id){
            $this->collection->deleteOne(['_id' => new \MongoDB\BSON\ObjectID($id)],['$set' => $datosAct]);
        }
    }
?>