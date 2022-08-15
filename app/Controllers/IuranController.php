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
}
