<?php 

    Class Equipment{

        public $equipmentId;
        public $equipmentName;

        public function __construct($equipmentId, $equipmentName){
            $this->equipmentId = $equipmentId;
            $this->equipmentName = $equipmentName;
        }

        public static function get($id){
            require("connection_connect.php");
            $sql = "SELECT * FROM Equipment WHERE equipment_id = '$id'";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $equipmentId = $my_row['equipment_id'];
            $equipmentName = $my_row['equipment_name'];
            require("connection_close.php");

            return new Equipment($equipmentId, $equipmentName);
        }

        public static function getAll(){
            $equipmenList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM Equipment";
            if($result = $conn->query($sql)){
                while($my_row = $result->fetch_assoc()){
                    $equipmentId = $my_row['equipment_id'];
                    $equipmentName = $my_row['equipment_name'];
                    $equipmenList[] = new Equipment($equipmentId, $equipmentName);
                }
                require("connection_close.php");
                return $equipmenList;
            }
        }

        public static function search($key){
            $equipmenList = [];
            require('connection_connect.php');
            $sql = "SELECT equipment_id,equipment_name FROM Equipment WHERE equipment_id LIKE '%$key%' OR equipment_name like'%$key%'";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $equipmentId = $my_row['equipment_id'];
                $equipmentName = $my_row['equipment_name'];
                $equipmentList[] = new Equipment($equipmentId, $equipmentName);
            }
    
            require('connection_close.php');
            return $equipmentList;
        }

        public static function addEquipment($equipmentName){
            require('connection_connect.php');
            $sql = "INSERT INTO Equipment (equipment_name) VALUES ('$equipmentName')";
            $result = $conn->query($sql);
            require('connection_close.php');
    
        }

        public static function update($equipmentId, $equipmentName){
            require('connection_connect.php');
            $sql = "UPDATE Equipment SET equipment_name = '$equipmentName' WHERE equipment_name = '$equipmentId' ";
            $result = $conn->query($sql);
            require('connection_close.php');
        }
        public static function delete($equipmentName){
            require('connection_connect.php');
            $sql = "DELETE FROM Equipment WHERE equipment_name = '$equipmentName'";
            $result = $conn->query($sql);
            require('connection_close.php');
        }

    }
?>