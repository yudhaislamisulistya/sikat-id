<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContributionModel;
use CodeIgniter\API\ResponseTrait;

class IuranController extends BaseController
{
    use ResponseTrait;
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
            $data['name'] = getDataPerdosByAddress($data['address'])['name'];
            $data['month_all'] = $data['month_1'] + $data['month_2'] + $data['month_3'] + $data['month_4'] + $data['month_5'] + $data['month_6'] + $data['month_7'] + $data['month_8'] + $data['month_9'] + $data['month_10'] + $data['month_11'] + $data['month_12'];
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

    // API
    public function api_get_iuran(){
        $data = $this->contributionModel->get()->getResult();
        return $this->respond(
            [
                'status' => true,
                'data' => $data
            ]
        );
    }
}
