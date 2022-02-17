<?php
class Admin_Controller extends CI_Controller
{
    var $user;
    function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            $this->layout->setLayout('layout/layout_main');
            redirect('/Login');
        } else {
            $this->user = $this->ion_auth->user()->row();
            $this->layout->setLayout('layout/layout_loggedIn');
        }
    }
}
