<?php
    class Kategori extends CI_Controller{
        public function elektronik() {
            $data['elektronik'] = $this->model_kategori->data_elektronik()->result();
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('elektronik', $data);
            $this->load->view('templates/footer');
        }
        public function pakaian_pria() {
            $data['pakaian_pria'] = $this->model_kategori->data_pakaian_pria()->result();
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('pakaian_pria', $data);
            $this->load->view('templates/footer');
        }
        public function pakaian_wanita() {
            $data['pakaian_wanita'] = $this->model_kategori->data_pakaian_wanita()->result();
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('pakaian_wanita', $data);
            $this->load->view('templates/footer');
        }
        public function pakaian_anak() {
            $data['pakaian_anak'] = $this->model_kategori->data_pakaian_anak()->result();
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('pakaian_anak', $data);
            $this->load->view('templates/footer');
        }
        public function peralatan_olahraga() {
            $data['peralatan_olahraga'] = $this->model_kategori->data_peralatan_olahraga()->result();
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('peralatan_olahraga', $data);
            $this->load->view('templates/footer');
        }
        public function sepatu() {
            $data['sepatu'] = $this->model_kategori->data_sepatu()->result();
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('sepatu', $data);
            $this->load->view('templates/footer');
        }
    }

?>