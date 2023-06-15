<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Regional extends BaseController
{
    public function approval()
    {
        return view('approval');
    }
}
