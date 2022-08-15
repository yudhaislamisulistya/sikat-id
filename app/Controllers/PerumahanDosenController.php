<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LecturerHousingModel;

class PerumahanDosenController extends BaseController
{
    public function __construct()
    {
        $this->lectureHousingModel = new LecturerHousingModel();
    }
    public function index()
    {
        $data = $this->lectureHousingModel->get()->getResult();
        return view('panel/data-perumahan-dosen', compact('data'));
    }
    public function save(){
        try {
            $data = $this->request->getVar();
            $this->lectureHousingModel->insert($data);
            return redirect()->back()->with('status', 'success');
        } catch (\Exception $e) {
            return redirect()->back()->with('status', 'failed');
        }
    }

    public function update(){
    try {
        $data = $this->request->getVar();
            $this->lectureHousingModel->update($data['id_lecturer_housing'], $data);
            return redirect()->back()->with('status', 'success');
        } catch (\Exception $e) {
            return redirect()->back()->with('status', 'failed');
        }
    }

    public function delete(){
        try {
            $data = $this->request->getVar();
            $this->lectureHousingModel->delete($data['id_lecturer_housing']);
            return redirect()->back()->with('status', 'success');
        } catch (\Exception $e) {
            return redirect()->back()->with('status', 'failed');
        }
    }
    
}
