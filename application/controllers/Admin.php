<?php

class Admin extends Admin_Controller
{


    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data["title"] = "Login";
        $data["main"] = "adminPage";
        $this->layout->generate($data);
    }

    function logout()
    {
        $this->ion_auth->logout();
        redirect('/');
    }
}
