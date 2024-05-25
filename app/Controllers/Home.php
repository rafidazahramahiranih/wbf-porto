<?php

namespace App\Controllers;

use App\Models\AboutModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new AboutModel();
        $data['about'] = $model->first();
        return view('index', $data);
    }
}
