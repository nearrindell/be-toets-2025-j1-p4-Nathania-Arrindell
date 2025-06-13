<?php

class torens extends BaseController
{
    private $torensModel;

    public function __construct()
    {
        $this->torensModel = $this->model('TorensModel');
    }


    public function index()
    {
        $result = $this->torensModel->getAllTorens();
        
        $data = [
            'title' => 'Overzicht Torens',
            'torens' => $result
        ];

        $this->view('torens/index', $data);
    }
}