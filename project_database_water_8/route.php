<?php 
    $controllers = array('agency'=>['home','error','index','search','newAgency','addAgency','updateAgency','update','deleteAgency','delete'],
                         'equipment'=>['index','search','newEquipment','addEquipment','updateEquipment','update','deleteEquipment','delete'],
                         'addEquipmentDistrict'=>['index','search','newEquipmentDistrict','add','updateEquipmentDistrict','update','deleteEquipmentDistrict','delete','searchEquipment','allEquipmentDistrict']);

    function call($controller, $action){
        require_once("controllers/".$controller."_controller.php");
        switch($controller){
            case "agency":
                require_once("models/agencyModel.php");
                $controller = new AgencyController(); break;
            case "equipment":
                require_once("models/equipmentModel.php");
                $controller = new EquipmentController(); break;
            case "addEquipmentDistrict":
                require_once("models/addEquipmentDistrictModel.php");
                require_once("models/agencyModel.php");
                require_once("models/equipmentModel.php");
                $controller = new EquipmentDistrictController(); break;
        }
        $controller->{$action}();
    }

    if(array_key_exists($controller, $controllers)){
        if(in_array($action, $controllers[$controller])){
            call($controller, $action);
        }
        else{
            call('agency', 'error');
        }
    }
    else{
        call('agency', 'error');
    }
?>