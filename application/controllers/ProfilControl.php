<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ProfilControl extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Modelusaha");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["usaha"] = $this->Modelusaha->getAll();
        $this->load->view("penjual/product/profil_view", $data);
    }

    public function add()
    {
        $usaha = $this->Modelusaha;
        $validation = $this->form_validation;
        $validation->set_rules($usaha->rules());

        if ($validation->run()) {
            $usaha->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("penjual/product/buat_baru_usaha");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('usaha');
       
        $usaha = $this->Modelusaha;
        $validation = $this->form_validation;
        $validation->set_rules($usaha->rules());

        if ($validation->run()) {
            $usaha->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["usaha"] = $usaha->getById($id);
        if (!$data["usaha"]) show_404();
        
        $this->load->view("penjual/product/buat_baru_usaha", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Usaha_model->delete($id)) {
            redirect(site_url('usaha'));
        }
    }

    
}
