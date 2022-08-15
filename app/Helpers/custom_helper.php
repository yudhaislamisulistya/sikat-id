<?php

use App\Models\LecturerHousingModel;

function getDataPerdos(){
    $lectureHousingModel = new LecturerHousingModel();
    $data = $lectureHousingModel->get()->getResult();
    return $data;
}

?>