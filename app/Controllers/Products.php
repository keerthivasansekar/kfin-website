<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Products extends BaseController
{
    protected $session;

    public function __construct(){
        $this->session = session();
    }

    public function index($slug = null)
    {
        $data['pageinfo'] = [
            'name' => 'Test Products',
            'description' => 'Testing Product<br/>page here'
        ];
        $this->session->setFlashdata('title', $data['pageinfo']['name']);
        return view('/products/single_product', $data);
    }

    public function test(){
        echo "Test";
    }
}
