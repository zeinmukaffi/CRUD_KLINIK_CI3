<?php 

    class Pasien extends CI_Controller
    {

        public function index()
        {
            $this->load->model('Pasien_m');
            $data['pasien'] = $this->Pasien_m->index();

            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('pasien/index', $data);
            $this->load->view('template/footer');
        }

        public function create()
        {
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('pasien/create');
            $this->load->view('template/footer');
        }

        public function store()
        {
            $nama_pasien = $this->input->post('nama_pasien');
            $alamat = $this->input->post('alamat');
            $jk = $this->input->post('jk');
            $no_telp = $this->input->post('no_telp');
            $tgl_lahir = $this->input->post('tgl_lahir');

            $data = array(
                'nama_pasien' => $nama_pasien,
                'alamat' => $alamat,
                'jk' => $jk,
                'no_telp' => $no_telp,
                'tgl_lahir' => $tgl_lahir,
            );

            $this->Pasien_m->store($data, 'pasien');
            $this->session->set_flashdata('message', 
            '<div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
              <button class="close" data-dismiss="alert">
                <span>&times;</span>
              </button>
              Data Berhasil Di Tambahkan
            </div>
            </div>');
            redirect('pasien/index');
        }

        public function edit($id)
        {
            $where = array('id' => $id);
            $data['pasien'] = $this->Pasien_m->edit($where, 'pasien')->result();
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('pasien/edit', $data);
            $this->load->view('template/footer');
        }

        public function detail($id)
        {
            $data['pasien'] = $this->Pasien_m->show($id, 'pasien');            
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('pasien/detail', $data);
            $this->load->view('template/footer');
        }
        
        public function update()
        {
            $id = $this->input->post('id');
            $nama_pasien = $this->input->post('nama_pasien');
            $alamat = $this->input->post('alamat');
            $jk = $this->input->post('jk');
            $no_telp = $this->input->post('no_telp');
            $tgl_lahir = $this->input->post('tgl_lahir');

            $data = array(
                'nama_pasien' => $nama_pasien,
                'alamat' => $alamat,
                'jk' => $jk,
                'no_telp' => $no_telp,
                'tgl_lahir' => $tgl_lahir,
            );

            $where = array(
                'id' => $id
            );

            $this->Pasien_m->update($where, $data, 'pasien');
            $this->session->set_flashdata('message', 
            '<div class="alert alert-warning alert-dismissible show fade">
            <div class="alert-body">
              <button class="close" data-dismiss="alert">
                <span>&times;</span>
              </button>
              Data Berhasil Di Update
            </div>
            </div>');
            redirect('pasien/index');
        }

        public function destroy($id)
        {
            $where = array('id' => $id);
            $this->Pasien_m->destroy($where, 'pasien');
            $this->session->set_flashdata('message', 
            '<div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
              <button class="close" data-dismiss="alert">
                <span>&times;</span>
              </button>
              Data Berhasil Di Hapus
            </div>
            </div>');
            redirect('pasien/index');
        }

    }

?>