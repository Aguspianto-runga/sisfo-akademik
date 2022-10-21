<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
        //$this->load->model('m_mahasiswa');
        //$this->load->library('form_validation');
    }

    
    public function index()
    {
        $judul['title'] = 'Profil';
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $user = array(
            'username' => $data->username,
            'level' => $data->level,
            'email' => $data->email,
            'date_created' => $data->date_created,
            'foto' => $data->foto
        );
        $this->load->view('templates_administrator/header', $judul);
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('user', $user);
        $this->load->view('templates_administrator/footer');
    }

}