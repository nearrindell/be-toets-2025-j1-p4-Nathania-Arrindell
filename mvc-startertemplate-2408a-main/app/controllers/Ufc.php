<?php

class ufc extends BaseController
{
    private $ufcModel;

    public function __construct()
    {
        $this->ufcModel = $this->model('UfcModel');
    }


    public function index()
    {
        $result = $this->ufcModel->getAllUfc();
        
        $data = [
            'title' => "UFC Men's Pound-for-Pound Ranking",
            'ufc' => $result
        ];

        $this->view('ufc/index', $data);
    }
}