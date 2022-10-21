<?php

class Prodi extends CI_Controller{

    function __construct() {
        parent::__construct();

        if (!isset($this->session->userdata['username'])) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible"
                                            role=""alert><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                            <h6><i class="icon fas fa-exclamation-triangle"></i> Anda belum login!</h6>
                                            </div>');
            redirect('administrator/auth');
        }
    }

    public function index()
    {
        $judul['title'] = 'Prodi';
        $user = $this->user_model->ambil_data($this->session->userdata['username']);
        $data['prodi'] = $this->prodi_model->tampil_data('prodi')->result();
        $this->load->view('templates_administrator/header', $judul);
        $this->load->view('templates_administrator/sidebar', $user);
        $this->load->view('administrator/prodi', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_prodi()
    {
        $judul['title'] = 'Tambah Prodi';
        $user = $this->user_model->ambil_data($this->session->userdata['username']);
        $data['jurusan'] = $this->prodi_model->tampil_data('jurusan')->result();
        $this->load->view('templates_administrator/header', $judul);
        $this->load->view('templates_administrator/sidebar', $user);
        $this->load->view('administrator/prodi_form', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_prodi_aksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE)
        {
            $this->tambah_prodi();
        }else{
            $kode_jurusan = $this->input->post('kode_jurusan');
            $nama_jurusan = $this->input->post('nama_jurusan');

            $data = array(
                'kode_jurusan' => $kode_jurusan,
                'nama_jurusan' => $nama_jurusan
            );

            $this->prodi_model->insert_data($data, 'prodi');
            $this->session->set_flashdata('pesan', '<div class="alert alert-default-success alert-dismissible"
                                                    role=""alert><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                        Data <strong>Prodi</strong> berhasil ditambahkan!
                                                    </div>');
            redirect('administrator/prodi');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_jurusan', 'kode_jurusan', 'required', ['required' => 'Kode jurusan harus diisi!']);
        $this->form_validation->set_rules('nama_jurusan', 'nama_jurusan', 'required', ['required' => 'Nama jurusan harus diisi!']);
    }

    public function update($id)
    {
        $judul['title'] = 'Ubah Prodi';
        $user = $this->user_model->ambil_data($this->session->userdata['username']);
        $where = array('id_jurusan' => $id);
        $data['prodi'] = $this->db->query("select * from prodi prd, jurusan jrs where prd.nama_jurusan=jrs.nama_jurusan and prd.id_jurusan='$id'")->result();
        $data['jurusan'] = $this->prodi_model->tampil_data('jurusan')->result();

        $this->load->view('templates_administrator/header', $judul);
        $this->load->view('templates_administrator/sidebar', $user);
        $this->load->view('administrator/prodi_update', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_jurusan');
        $kode_jurusan = $this->input->post('kode_jurusan');
        $nama_jurusan = $this->input->post('nama_jurusan');

        $data = array(
            'kode_jurusan' => $kode_jurusan,
            'nama_jurusan' => $nama_jurusan
        );
        
        $where = array(
            'id_jurusan' => $id
        );

        $this->prodi_model->update_data($where, $data, 'prodi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-default-success alert-dismissible"
                                                        role=""alert><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                            Data <strong>Prodi</strong> berhasil diubah!
                                                        </div>');
        redirect('administrator/prodi');
    }

    public function delete($id)
    {
        $where = array('id_jurusan' => $id);
        $this->prodi_model->hapus_data($where, 'prodi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-default-danger alert-dismissible"
                                                        role=""alert><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                            Data <strong>Prodi</strong> berhasil dihapus!
                                                        </div>');
        redirect('administrator/prodi');
    }

}