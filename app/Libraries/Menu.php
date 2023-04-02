<?php namespace App\Libraries;

use App\Models\Services;
use App\Models\Products;
class Menu{

    protected $menuList;
  
    public function servicesMenu($category = null){
        $this->menuList = new Services();
        if ($category != null) {
            $data['slug_prefix'] = 'services/';
            $data['menuList'] = $this->menuList->where('category', $category)->findAll();
        }        
        return view('components/dropdown_menu', $data);
    }

    public function productsMenu($offset = 0){
        $this->menuList = new Products();
        $data['slug_prefix'] = 'products/';
        $data['menuList'] = $this->menuList->get(5, $offset)->getResultArray();
        return view('components/dropdown_menu', $data);
    }



}
