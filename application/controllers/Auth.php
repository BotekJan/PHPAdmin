<?php

class Auth extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('');
    }

    function loginPage()
    {
        $data["title"] = "Login";
        $data["main"] = "loginPage";
        $data["message"] = $this->session->message;
        $this->layout->generate($data);
    }

    function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $return = $this->ion_auth->login($username, $password);

        if ($return) {
            redirect('Admin');
        } else {
            $this->session->set_flashdata('message', 'User does not exist');

            redirect('Login');
        }
    }

    function logout()
    {
        $this->ion_auth->logout();
        redirect('/');
    }
}
