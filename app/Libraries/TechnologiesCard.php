<?php namespace App\Libraries;

use App\Models\Technologies;

class TechnologiesCard{

    protected $technologies;
    
    public function cardView(){
        $newTechnologies = []; 
        $this->technologies = new technologies();
        $technologies = $this->technologies->findAll();
        foreach ($technologies as $technology) {
            $temp = [];
            $temp = explode(";", $technology['category']);
            $technology['category'] = $temp;
            array_push($newTechnologies, $technology);
        }
        $data['technologies'] = $newTechnologies;
        return view('components/technologies_card', $data);

    }

}
