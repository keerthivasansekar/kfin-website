<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Services as service;

class Services extends BaseController
{
    protected $session;
    private $services;

    public function __construct(){
        $this->session = session();
        $this->services = new service();
    }

    public function index($slug = null)
    {
        $data['service'] = $this->services->where('slug', $slug)->first();
        $data['pageinfo'] = [
            'name' => $data['service']['name'],
            'description' => $data['service']['description']
        ];
        $this->session->setFlashdata('title', $data['pageinfo']['name']);
        return view('/services/single_service', $data);
    }

    public function test(){
        echo "Test";
    }
}