<?php

use App\Models\ContributionModel;
use App\Models\LecturerHousingModel;
use App\Models\UserModel;

function getDataPerdos(){
    $lectureHousingModel = new LecturerHousingModel();
    $data = $lectureHousingModel->get()->getResult();
    return $data;
}

function getDataPerdosByAddress($address){
    $lectureHousingModel = new LecturerHousingModel();
    $data = $lectureHousingModel->where('address', $address)->first();
    return $data;
}

function getDataContribtionByAddress($address){
    $contributionModel = new ContributionModel();
    $data = $contributionModel->where('address', $address)->first();
    return $data;
}

function rupiah($angka){
    $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
	return $hasil_rupiah;
}

function getUserByEmail($email){
    $userModel = new UserModel();
    $data = $userModel->where('email', $email)->first();
    return $data;
}

?>