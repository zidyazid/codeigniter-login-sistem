<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admincontroller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index(){
        $data['title'] = "Dashboard";
            $data['judul'] = "Admin Page";
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            // $data['menu'] = $this->db->get_where('user_sub_menu', ['role_id' => $this->session->userdata('role_id')])->row_array();
            $this->load->view('komponen/header', $data);
            $this->load->view('komponen/sidebar', $data);
            // $this->load->view('komponen/topnav', $data);
            $this->load->view('admin/index', $data);
            // $this->load->view('komponen/footer', $data);
    }

    public function pertambahan_penduduk()
    {
        $data['title'] = "Pertambahan Penduduk";
        $data['judul'] = "Pertambahan Penduduk";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // $data['menu'] = $this->db->get_where('user_sub_menu', ['role_id' => $this->session->userdata('role_id')])->row_array();
        $this->load->view('komponen/header', $data);
        $this->load->view('komponen/sidebar', $data);
        // $this->load->view('komponen/topnav', $data);
        $this->load->view('admin/pertambahan_penduduk', $data);
        // $this->load->view('komponen/footer', $data);
    }

    public function pengurangan_penduduk()
    {
        $data['title'] = "Pengurangan Penduduk";
        $data['judul'] = "Pengurangan Penduduk";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // $data['menu'] = $this->db->get_where('user_sub_menu', ['role_id' => $this->session->userdata('role_id')])->row_array();
        $this->load->view('komponen/header', $data);
        $this->load->view('komponen/sidebar', $data);
        // $this->load->view('komponen/topnav', $data);
        $this->load->view('admin/pengurangan_penduduk', $data);
        // $this->load->view('komponen/footer', $data);
    }

    public function total_penduduk()
    {
        $data['title'] = "Total Penduduk";
        $data['judul'] = "Total Penduduk";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // $data['menu'] = $this->db->get_where('user_sub_menu', ['role_id' => $this->session->userdata('role_id')])->row_array();
        $this->load->view('komponen/header', $data);
        $this->load->view('komponen/sidebar', $data);
        // $this->load->view('komponen/topnav', $data);
        $this->load->view('admin/total_penduduk', $data);
        // $this->load->view('komponen/footer', $data);
    }
}