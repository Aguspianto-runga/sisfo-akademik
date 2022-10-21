<?php

class Auth extends CI_Controller{

    public function index()
    {
        //$this->load->view('templates_administrator/header');
        $this->load->view('administrator/login');
        //$this->load->view('templates_administrator/footer');
    }

    public function proses_login()
    {
        $this->form_validation->set_rules('username', 'username', 'required', ['required' => 'Username harus diisi!']);
        $this->form_validation->set_rules('password', 'password', 'required', ['required' => 'Password harus diisi!']);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('administrator/login');
        }else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $username;
            $pass = MD5($password);

            $cek = $this->login_model->cek_login($user, $pass);

            if ($cek->num_rows() > 0){

                foreach ($cek->result() as $ck) {
                    $sess_data['username'] = $ck->username;
                    $sess_data['email'] = $ck->email;
                    $sess_data['level'] = $ck->level;

                    $this->session->set_userdata($sess_data);
                }
                if($sess_data['level'] == 'admin'){
                redirect('administrator/dashboard');
                }else{
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible"
                                                            role=""alert><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span></button>
                                                            <i class="icon fas fa-exclamation-triangle"> Username salah!
                                                            </div>');
                redirect('auth');
                }
            }
        }
    }

    /*public function registration()
    {
        if($this->form_validation->run() == false) {
            $data['title'] = 'Registration Page';
            $this->load->view('administrator/register', $data);
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'level' => htmlspecialchars($this->input->post('level', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-default-success" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span></button>
                                                            Akun anda berhasil ditambahkan, Silahkan Login!
                                                        </div>');
            redirect('administrator/login');
        }
    }*/

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('administrator/auth');
    }

}