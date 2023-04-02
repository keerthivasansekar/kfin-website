<?php namespace App\Libraries;

class PageHeader{
    
    public function header($pageinfo){

        return view('components/page_header', ['pageinfo' => $pageinfo]);

    }

}
