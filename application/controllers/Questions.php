<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Questions extends CI_Controller
{

    public function index()
    {
        //check if admin is already login
        if ($this->session->userdata('user_id')) {
            $this->load->view('questions');

        }else
        {
            redirect('authentication');
        }
    }
}