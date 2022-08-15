<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContributionModel;

class IuranController extends BaseController
{
    public function __construct()
    {
        $this->contributionModel = new ContributionModel();
    }
    public function check()
    {
        return view('panel/cek-iuran');
    }

    public function check_detail(){
        $data = $this->request->getvar();
        $contributions = $this->contributionModel->where('address', $data['data_perdos'])->get()->getResult();
        return view('panel/cek-iuran-detail', compact('contributions'));
    }

    public function index(){
        $data = $this->contributionModel->get()->getResult();
        return view('panel/data-iuran', compact('data'));
    }

    public function save(){
        try {
            $data = $this->request->getVar();
            $this->contributionModel->insert($data);
            return redirect()->back()->with('status', 'success');
        } catch (\Exception $e) {
            return redirect()->back()->with('status', 'failed');
        }
    }

    public function update(){
        try {
        $data = $this->request->getVar();
            $this->contributionModel->update($data['id_contribution'], $data);
            return redirect()->back()->with('status', 'success');
        } catch (\Exception $e) {
            return redirect()->back()->with('status', 'failed');
        }
    }

    public function delete(){
        try {
            $data = $this->request->getVar();
            $this->contributionModel->delete($data['id_contribution']);
            return redirect()->back()->with('status', 'success');
        } catch (\Exception $e) {
            return redirect()->back()->with('status', 'failed');
        }
    }

    public function check_detail_lecturer($address){
        $contributions = $this->contributionModel->where('address', $address)->get()->getResult();
        return view('lecturer/cek-iuran-detail', compact('contributions'));
    }
}
