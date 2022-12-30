<?php 
    Class AddEquipmentDistrict{
        
        public $agencyId;
        public $equipmentId;
        public $activeStatus;
        public $defectiveState;
        public $duringUse;
        public $total;

        public function __construct($agencyId, $equipmentId, $activeStatus, $defectiveState, $duringUse, $total){
            $this->agencyId = $agencyId;
            $this->equipmentId = $equipmentId;
            $this->activeStatus = $activeStatus;
            $this->defectiveState = $defectiveState;
            $this->duringUse = $duringUse;
            $this->total = $total;
        }

        public static function getTable($agencyId){
            $addEquipmentDistrictList = [];
            require("connection_connect.php");
            $sql = "SELECT agency_id, equipment_id, Sum(active_status) AS active_status, Sum(defective_state) AS defective_state, SUM(during_use) As during_use, SUM(active_status+defective_state+during_use) AS total FROM AddEquipmentDistrict WHERE agency_id = $agencyId GROUP BY equipment_id;";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $agencyId = $my_row['agency_id'];
                $equipmentId = $my_row['equipment_id'];
                $activeStatus = $my_row['active_status'];
                $defectiveState = $my_row['defective_state'];
                $duringUse = $my_row['during_use'];
                $total = $my_row['total'];
                $addEquipmentDistrictList[] = new AddEquipmentDistrict($agencyId, $equipmentId, $activeStatus, $defectiveState, $duringUse, $total);
            }
            require("connection_close.php");
            
            return $addEquipmentDistrictList;
            
        }

        public static function get($agencyId, $equipmentId){
            require("connection_connect.php");
            $sql = "SELECT * FROM AddEquipmentDistrict WHERE agency_id LIKE '%$agencyId%' AND equipment_id LIKE '%$equipmentId%'";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $agencyId = $my_row['agency_id'];
            $equipmentId = $my_row['equipment_id'];
            $activeStatus = $my_row['active_status'];
            $defectiveState = $my_row['defective_state'];
            $duringUse = $my_row['during_use'];
            $total = $my_row['total'];
            
            require("connection_close.php");
            
            return new AddEquipmentDistrict($agencyId, $equipmentId, $activeStatus, $defectiveState, $duringUse, $total);
            
        }

        public static function getDelete($agencyId, $equipmentId){
            require("connection_connect.php");
            $sql = "SELECT * FROM Agency NATURAL JOIN AddEquipmentDistrict NATURAL JOIN Equipment WHERE agency_id = $agencyId AND equipment_id = $equipmentId";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $agencyId = $my_row['agency_id'];
            $equipmentId = $my_row['equipment_id'];
            $activeStatus = $my_row['agency_name'];
            $defectiveState = $my_row['equipment_name'];
            $duringUse = $my_row['during_use'];
            $total = $my_row['total'];
            
            require("connection_close.php");
            
            return new AddEquipmentDistrict($agencyId, $equipmentId, $activeStatus, $defectiveState, $duringUse, $total);
            
        }

        public static function getAllEquipmentDistrict(){
            $addEquipmentDistrictList = [];
            require("connection_connect.php");
            $sql = "SELECT agency_id,equipment_id, Sum(active_status) AS active_status, Sum(defective_state) AS defective_state, SUM(during_use) As during_use, SUM(active_status+defective_state+during_use) AS total FROM AddEquipmentDistrict GROUP BY agency_id,equipment_id ORDER BY agency_id;";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $agencyId = $my_row['agency_id'];
                $equipmentId = $my_row['equipment_id'];
                $activeStatus = $my_row['active_status'];
                $defectiveState = $my_row['defective_state'];
                $duringUse = $my_row['during_use'];
                $total = $my_row['total'];
                $addEquipmentDistrictList[] = new AddEquipmentDistrict($agencyId, $equipmentId, $activeStatus, $defectiveState, $duringUse, $total);
            }
            
            require("connection_close.php");
            
            return $addEquipmentDistrictList;
        }

        public static function search($key){
            $addEquipmentDistrictList = [];
            require('connection_connect.php');
            $sql = "SELECT agency_id,equipment_id, Sum(active_status) AS active_status, Sum(defective_state) AS defective_state, SUM(during_use) As during_use, SUM(active_status+defective_state+during_use) AS total FROM AddEquipmentDistrict NATURAL JOIN Agency NATURAL JOIN Equipment WHERE agency_id LIKE '%$key%' OR agency_name LIKE '%$key%' OR equipment_name LIKE '%$key%' GROUP BY agency_id,equipment_id ORDER BY agency_id;";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $agencyId = $my_row['agency_id'];
                $equipmentId = $my_row['equipment_id'];
                $activeStatus = $my_row['active_status'];
                $defectiveState = $my_row['defective_state'];
                $duringUse = $my_row['during_use'];
                $total = $my_row['total'];
                $addEquipmentDistrictList[] = new AddEquipmentDistrict($agencyId, $equipmentId, $activeStatus, $defectiveState, $duringUse, $total);
            }
    
            require('connection_close.php');
            return $addEquipmentDistrictList;
        }

        public static function addEquipmentDistrict($agencyId, $equipmentId, $activeStatus, $defectiveState, $duringUse){
            require('connection_connect.php');
            $sql = "INSERT INTO AddEquipmentDistrict (agency_id, equipment_id, active_status, defective_state, during_use) VALUES ($agencyId, $equipmentId, $activeStatus, $defectiveState, $duringUse)";
            $result = $conn->query($sql);
            require('connection_close.php');
    
        }
        public static function update($agencyId, $equipmentId, $activeStatus, $defectiveState, $duringUse){
            require('connection_connect.php');
            $sql = "UPDATE AddEquipmentDistrict SET active_status = $activeStatus,defective_state = $defectiveState, during_use = $duringUse WHERE agency_id = $agencyId AND equipment_id = $equipmentId";
            $result = $conn->query($sql);
            require('connection_close.php');
        }
        public static function delete($id, $equipmentId){
            require('connection_connect.php');
            $sql = "DELETE FROM AddEquipmentDistrict WHERE agency_id = '$id' && equipment_id = '$equipmentId'";
            $result = $conn->query($sql);
            require('connection_close.php');
        }
        
    }
?>