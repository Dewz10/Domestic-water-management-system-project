<?php 
    Class EquipmentController{
        public function index(){
            $equipment_list = Equipment::getAll();
            require_once('views/equipment/equipmentIndex.php');
        }
        public function search(){
            $key = $_GET['key'];
            $equipment_list = Equipment::search($key);
            require_once('views/equipment/equipmentIndex.php');
        }
        public function newEquipment(){
            require_once('views/equipment/equipmentNew.php');
        }
        public function addEquipment(){
            $equipmentName = $_GET['equipmentName'];
            Equipment::addEquipment($equipmentName);
            $equipment_list = Equipment::getAll();
            EquipmentController::index();
        }
        public function updateEquipment(){
            $equipmentId = $_GET['equipment_id'];
            $equipment = Equipment::get($equipmentId);
            $equipment_list = Equipment::getAll();
            require_once('views/equipment/updateEquipment.php');
        }
        public function update(){
            $equipmentId = $_GET['equipmentId'];
            $equipmentName = $_GET['equipmentName'];
            Equipment::update($equipmentId, $equipmentName);
            EquipmentController::index();
        }
        public function deleteEquipment(){
            $equipmentId = $_GET['equipment_id'];
            $equipment = Equipment::get($equipmentId);
            require_once('views/equipment/deleteEquipment.php');
        }
        public function delete(){
            $equipmentName = $_GET['equipmentName'];
            Equipment::delete($equipmentName);
            EquipmentController::index();
        }
    }
?>