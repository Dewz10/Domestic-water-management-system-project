<?php 
    Class Agency{
        
        public $agencyId;
        public $agencyName;

        public function __construct($agencyId, $agencyName){
            $this->agencyId = $agencyId;
            $this->agencyName = $agencyName;
        }

        public static function get($id){
            require("connection_connect.php");
            $sql = "SELECT agency_id,agency_name FROM Agency WHERE agency_id = '$id'";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $agencyId = $my_row['agency_id'];
            $agencyName = $my_row['agency_name'];
            require("connection_close.php");

            return new Agency($agencyId, $agencyName);
        }

        public static function getAll(){
            $agencyList = [];
            require("connection_connect.php");
            $sql = "SELECT agency_id,agency_name FROM Agency";
            if($result = $conn->query($sql)){
                while($my_row = $result->fetch_assoc()){
                    $agencyId = $my_row['agency_id'];
                    $agencyName = $my_row['agency_name'];
                    $agencyList[] = new Agency($agencyId, $agencyName);
                }
                require("connection_close.php");
                return $agencyList;
            }
        }

        public static function search($key){
            $agencyList = [];
            require('connection_connect.php');
            $sql = "SELECT agency_id,agency_name FROM Agency WHERE agency_id like'%$key%' OR agency_name like'%$key%'";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $agencyId = $my_row['agency_id'];
                $agencyName = $my_row['agency_name'];
                $agencyList[] = new Agency($agencyId, $agencyName);
            }
    
            require('connection_close.php');
            return $agencyList;
        }

        public static function addAgency($agencyId, $agencyName){
            require('connection_connect.php');
            $sql = "INSERT INTO Agency (agency_id, agency_name) VALUES ($agencyId, '$agencyName')";
            $result = $conn->query($sql);
            require('connection_close.php');
    
        }

        public static function update($agencyId, $agencyName){
            require('connection_connect.php');
            $sql = "UPDATE Agency SET agency_name = '$agencyName' WHERE agency_id = $agencyId";
            $result = $conn->query($sql);
            require('connection_close.php');
        }
        public static function delete($id){
            require('connection_connect.php');
            $sql = "DELETE FROM Agency WHERE agency_id = '$id'";
            $result = $conn->query($sql);
            require('connection_close.php');
        }
        
    }
?>