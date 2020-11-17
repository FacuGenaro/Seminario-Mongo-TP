<?php
    require_once './vendor/autoload.php';

    class ApiModelVentas{
    
        protected $connection;
        protected $db;
        protected $collection;
        public function __construct() {
            $this->connection = new MongoDB\Client;
            $this->db = $this->connection->tienda;
            $this->collection = $this->db->ventas;
        }

        //Add
        function addVenta ($venta){
            $this->collection->insertOne($venta);
        }
        //Get
        function getVenta($id_venta){
            return $this->collection->find(['_id' => new \MongoDB\BSON\ObjectID ($id_venta)]) -> toArray();
        }

        //Get all
        
        function getAll(){
            return $this->collection->find()->toArray();
        }
    }
?>