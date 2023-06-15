<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Area extends BaseController
{
    public function pengajuan_tim_ut()
    {
        return view('pengajuan-tim-ut');
    }
    public function actual_uat()
    {
        return view('actual-uat');
    }
}
