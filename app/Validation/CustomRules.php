<?php namespace App\Validation;


class CustomRules{
    
    public function validateCaptcha(string $str, string $fields, array $data){
        $session = session();
        if ($data['recaptcha'] == $session->getFlashdata('captcha')) {
            return true;
        } else {
            return false;
        }
    }
}
