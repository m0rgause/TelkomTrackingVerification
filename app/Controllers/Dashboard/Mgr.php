<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Mgr extends BaseController
{
    public function assign()
    {
        return view('assign-verificator');
    }
}
