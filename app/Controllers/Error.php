<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Error extends BaseController
{
    protected $session;

    public function __construct(){
        $this->session = session();
    }

    public function show404(){
        $this->session->setFlashdata('title', $data['pageinfo']['name'] = '404');
        return view('static_pages/404');

    }

    public function maintenance_mode(){
        $this->session->setFlashdata('title', $data['pageinfo']['name'] = 'Maintenance Mode');
        return view('static_pages/maintenance');
    }

    public function coming_soon(){
        $data['name'] = "Coming Soon";
        return view('static_pages/comingsoon', $data);
    }
}
