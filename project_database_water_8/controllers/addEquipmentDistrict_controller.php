<?php 
    Class EquipmentDistrictController{
        public function index(){
            $agency_list = Agency::getAll();
            require_once('views/addEquipmentDistrict/equipmentDistrictIndex.php');
        }
        public function newEquipmentDistrict(){
            $agency_list = Agency::getAll();
            $equipment_list = Equipment::getAll();
            require_once('views/addEquipmentDistrict/equipmentDistrictNew.php');
        }
        public function search(){
            $key = $_GET['key'];
            $equipment_list = Equipment::getAll();
            $agency_list = Agency::getAll();
            $addEquipmentDistrict_list = AddEquipmentDistrict::getTable($key);
            require_once('views/addEquipmentDistrict/equipmentDistrictSummary.php');
        }
        public function add(){
            $agencyId = $_GET['agency_id'];
            $equipmentId = $_GET['equipment_id'];
            $activeStatus = $_GET['activeStatus'];
            $defectiveState = $_GET['defectiveState'];
            $duringUse = $_GET['duringUse'];
            AddEquipmentDistrict::addEquipmentDistrict($agencyId, $equipmentId, $activeStatus, $defectiveState, $duringUse);
            EquipmentDistrictController::index();
        }
        public function updateEquipmentDistrict(){
            $agencyId = $_GET['agency_id'];
            $equipmentId = $_GET['equipment_id'];
            $addEquipmentDistrict = AddEquipmentDistrict::get($agencyId, $equipmentId);
            $agency_list = Agency::getAll();
            $equipment_list = Equipment::getAll();
            require_once('views/addEquipmentDistrict/updateEquipmentDistrict.php');
        }
        public function update(){
            $agencyId = $_GET['agency_id'];
            $equipmentId = $_GET['equipment_id'];
            $activeStatus = $_GET['activeStatus'];
            $defectiveState = $_GET['defectiveState'];
            $duringUse = $_GET['duringUse'];
            AddEquipmentDistrict::update($agencyId, $equipmentId, $activeStatus, $defectiveState, $duringUse);
            EquipmentDistrictController::index();
        }
        public function deleteEquipmentDistrict(){
            $agencyId = $_GET['agency_id'];
            $equipmentId = $_GET['equipment_id'];
            $addEquipmentDistrict = AddEquipmentDistrict::getDelete($agencyId, $equipmentId);
            $agency_list = Agency::getAll();
            require_once('views/addEquipmentDistrict/deleteEquipmentDistrict.php');
        }
        public function delete(){
            $agencyId = $_GET['key'];
            $equipmentId = $_GET['equipment_id'];
            AddEquipmentDistrict::delete($agencyId, $equipmentId);
            EquipmentDistrictController::index();
        }
        public function searchEquipment(){
            $key = $_GET['key_s'];
            $addEquipmentDistrict_list = AddEquipmentDistrict::search($key);
            $equipment_list = Equipment::getAll();
            $agency_list = Agency::getAll();
            require_once('views/addEquipmentDistrict/equipmentDistrictSearch.php');
        }
        public function allEquipmentDistrict(){
            $addEquipmentDistrict_list = AddEquipmentDistrict::getAllEquipmentDistrict();
            $agency_list = Agency::getAll();
            $equipment_list = Equipment::getAll();
            require_once('views/addEquipmentDistrict/allEquipmentDistrict.php');
        }
        
    }
?>