<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Menu;

class Site extends BaseController
{
    protected $menuModel;
    protected $session;

    public function __construct(){
        $this->session = session();
    }

    public function index($slug = 'home'){
        $this->menuModel = new Menu();
        $data['pageinfo'] = $this->menuModel->where('slug', $slug)->first();
        if ($data['pageinfo']) {
            $this->session->setFlashdata('title', $data['pageinfo']['name']);
            return view('static_pages/'.$data['pageinfo']['view_file'], $data);
        } else {
            return redirect()->to('error/page-not-found');
        }

        return view('static_pages/'.$slug);
    }


}
