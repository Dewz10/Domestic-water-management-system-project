<?php 
    Class AgencyController{
        public function home(){
            require_once('views/agency/agencyHome.php');
        }
        public function error(){
            require_once('views/agency/agencyError.php');
        }
        public function index(){
            $agency_list = Agency::getAll();
            require_once('views/agency/agencyIndex.php');
        }
        public function search(){
            $key = $_GET['key'];
            $agency_list = Agency::search($key);
            require_once('views/agency/agencyIndex.php');
        }
        public function newAgency(){
            require_once('views/agency/agencyNew.php');
        }
        public function addAgency(){
            $agencyId = $_GET['agencyId'];
            $agencyName = $_GET['agencyName'];
            Agency::addAgency($agencyId, $agencyName);
            $agency_list = Agency::getAll();
            require_once('views/agency/agencyIndex.php');
        }
        public function updateAgency(){
            $agencyId = $_GET['agency_id'];
            $agency = Agency::get($agencyId);
            $agency_list = Agency::getAll();
            require_once('views/agency/updateAgency.php');
        }
        public function update(){
            $agencyId = $_GET['agencyId'];
            $agencyName = $_GET['agencyName'];
            Agency::update($agencyId, $agencyName);
            AgencyController::index();
        }
        public function deleteAgency(){
            $agencyId = $_GET['agency_id'];
            $agency = Agency::get($agencyId);
            require_once('views/agency/deleteAgency.php');
        }
        public function delete(){
            $agencyId = $_GET['agencyId'];
            Agency::delete($agencyId);
            AgencyController::index();
        }
    }
    
?>