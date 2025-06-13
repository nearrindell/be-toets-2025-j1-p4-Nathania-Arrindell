<?php

class Sneakers extends BaseController
{
    private $sneakersModel;

    public function __construct()
    {
        $this->sneakersModel = $this->model('SneakersModel');
    }


    public function index()
    {
        $result = $this->sneakersModel->getAllSneakers();
        
        $data = [
            'title' => 'Overzicht Sneakers',
            'sneakers' => $result
        ];

        $this->view('sneakers/index', $data);
    }
    public function create()
    {
        // Check of er op de submit knop van het formulier is gedrukt
        if ($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $result = $this->sneakersModel->create($_POST);

            if ($result)
            {
                echo "<div class='alert alert-success text-center' role='alert'><h5 class='text-succes'>Het record is toegevoegd</h5></div>";
                header('Refresh: 2; url=' . URLROOT . '/sneakers/index');
            }
        }

        $data = [
            'title' => "Nieuwe sneaker toevoegen"
        ];

        $this->view('sneakers/create', $data);
    }
    public function delete($Id)
    {
        $this->sneakersModel->delete($Id);
        header('location: ' . URLROOT . '/sneakers/index');
    }

}