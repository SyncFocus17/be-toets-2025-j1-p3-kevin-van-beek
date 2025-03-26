<?php

class Vulkaan extends BaseController
{
    private $vulkaanModel;

    public function __construct()
    {
        $this->vulkaanModel = $this->model('VulkaanModel');
    }

    public function index()
    {
        $vulkanen = $this->vulkaanModel->getVulkanenBySpecificLanden();

        $data = [
            'title' => 'Actiefste Vulkanen',
            'vulkanen' => $vulkanen
        ];

        $this->view('vulkaan/index', $data);
    }
}