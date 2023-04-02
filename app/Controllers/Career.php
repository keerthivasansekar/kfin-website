<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Jobapplications;
use App\Models\Jobs;
use Gregwar\Captcha\CaptchaBuilder;
use Config\Services;

class Career extends BaseController
{

    protected $session;
    protected $jobs;
    protected $captcha;
    protected $jobapplications;

    public function __construct(){
        $this->session = session();
        $this->jobs = new Jobs();
        $this->captcha = new CaptchaBuilder();
        $this->jobapplications = new Jobapplications();
    }

    public function index()
    {
        $data['pageinfo'] = [
            'name' => 'Careers',
            'description' => 'Join our team by<br/>applying here'
        ];
        $this->session->setFlashdata('title', $data['pageinfo']['name']);

        $data['jobs'] = $this->jobs->where('is_open', true)->findAll();
        return view('career/list', $data);
    }

    public function apply(){
        helper(['form']);
        $data['pageinfo'] = [
            'name' => 'Job Application',
            'description' => 'Join our team by<br/>applying here'
        ];
        $this->session->setFlashdata('title', $data['pageinfo']['name']);

        if ($this->request->getMethod() === 'post') {

            $rules = [
                'fullname' => [
                    'label' => 'Fullname',
                    'rules' => 'required'
                ],
                'email' => [
                    'label' => 'Email',
                    'rules' => 'required|valid_email'
                ],
                'mobile' => [
                    'label' => 'Mobile',
                    'rules' => 'required|min_length[10]|max_length[13]|numeric'
                ],
                'title' => [
                    'label' => 'Job Title',
                    'rules' => 'required'
                ],
                'totalexp' => [
                    'label' => 'Total Experience',
                    'rules' => 'required'
                ],
                'currentctc' => [
                    'label' => 'Current CTC',
                    'rules' => 'required'
                ],
                'currentcompany' => [ 
                    'label' => 'Current Company',
                    'rules' => 'required'
                ],
                'resume' => [ 
                    'label' => 'Resume',
                    'rules' => 'uploaded[resume]|max_size[resume, 2048]|mime_in[resume, application/pdf]',
                    'errors' => [
                        'uploaded' => 'Upload your {field}',
                        'mime_in' => '{field} Shoud be in PDF format'
                    ],
                ],
                'recaptcha' => [
                    'label' => 'Captcha',
                    'rules' => 'required|validateCaptcha[recaptcha]',
                    'errors' => [
                        'validateCaptcha' => 'Enter valid {field}'
                    ],
                ]
            ];
            if ($this->validate($rules)) {
                $file = $this->request->getFile('resume');
                if ($file->isValid() && !$file->hasMoved()) {
                    $resumeName = str_replace(" ", "",strtolower($this->request->getPost('fullname')))."_".date('YmdHis').'.pdf';
                    $file->move('./assets/resumes/', $resumeName);
                }
                $data = [
                    'name' => $this->request->getPost('fullname'),
                    'email' => $this->request->getPost('email'),
                    'mobile' => $this->request->getPost('mobile'),
                    'job_title' => $this->request->getPost('title'),
                    'total_exp' => $this->request->getPost('totalexp'),
                    'current_ctc' => $this->request->getPost('currentctc'),
                    'current_company' => $this->request->getPost('currentcompany'),
                    'resume_filename' => $resumeName
                ];

                $this->jobapplications->save($data);
                $this->session->setFlashdata('status', 'success');
                return redirect()->to('careers/apply');

            }
        }

        $this->captcha->build();
        $this->session->setFlashdata('captcha', $this->captcha->getPhrase());
        $data['captcha'] = $this->captcha;
        $data['jobs'] = $this->jobs->where('is_open', true)->findAll();
        $data['validation'] = Services::validation();
        return view('career/apply', $data);
    }

}
