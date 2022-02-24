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

    function registerPage()
    {
        $data["title"] = "Register";
        $data["main"] = "registerPage";
        $data["message"] = $this->session->message;
        $this->layout->generate($data);
    }

    function register()
    {
        $username = $this->input->post('name');
        $password = $this->input->post('password');
        $passwordRepeat = $this->input->post('passwordRepeat');

        if (!($password == $passwordRepeat)) {
            $this->session->set_flashdata('message', 'Passwords dont match');
            redirect('Register');
        }

        $return = $this->ion_auth->register($username, $password, '');

        if ($return != null) {
            redirect('Admin');
        } else {
            $this->session->set_flashdata('message', 'Username already taken');

            redirect('Register');
        }
    }

    function register2()
    {
        $tables = $this->config->item('tables', 'ion_auth');
        $username = $this->input->post('name');
        $password = $this->input->post('password');
        $passwordRepeat = $this->input->post('passwordRepeat');

        $this->form_validation->set_rules('name', 'Name', 'required|is_unique[' . $tables['users'] . ', .username]');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[passwordRepeat]');
        $this->form_validation->set_rules('passwordRepeat', 'Repeat password', 'required');

        $return = $this->form_validation->run();

        if ($return) {
            $this->ion_auth->register($username, $password);
            $this->session->set_flashdata('message', 'Your account has been created, you can now log in.');
            redirect('Login');
        } else {
        }
    }
}
