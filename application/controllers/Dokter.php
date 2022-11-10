<?php 

    class Dokter extends CI_Controller
    {

        public function index()
        {
            $this->load->model('Dokter_m');
            $data['dokter'] = $this->Dokter_m->index('dokter');

            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('dokter/index', $data);
            $this->load->view('template/footer');
        }
    
        public function create()
        {
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('dokter/create');
            $this->load->view('template/footer');
        }

        public function store()
        {
            $nama_dokter = $this->input->post('nama_dokter');
            $nip = $this->input->post('nip');
            $sip = $this->input->post('sip');

            $data = array(
                'nama_dokter' => $nama_dokter,
                'nip' => $nip,
                'sip' => $sip,
            );

            $this->Dokter_m->store($data, 'dokter');
            $this->session->set_flashdata('message', 
            '<div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
              <button class="close" data-dismiss="alert">
                <span>&times;</span>
              </button>
              Data Berhasil Di Tambahkan
            </div>
            </div>');
            redirect('dokter/index');
        }

        public function edit($id)
        {
            $where = array('id' => $id);
            $data['dokter'] = $this->Dokter_m->edit($where, 'dokter')->result();
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('dokter/edit', $data);
            $this->load->view('template/footer');
        }

        public function update()
        {
            $id = $this->input->post('id');
            $nama_dokter = $this->input->post('nama_dokter');
            $nip = $this->input->post('nip');
            $sip = $this->input->post('sip');

            $data = array(
                'nama_dokter' => $nama_dokter,
                'nip' => $nip,
                'sip' => $sip,
            );

            $where = array(
                'id' => $id
            );

            $this->Dokter_m->update($where, $data, 'dokter');
            $this->session->set_flashdata('message', 
            '<div class="alert alert-warning alert-dismissible show fade">
            <div class="alert-body">
              <button class="close" data-dismiss="alert">
                <span>&times;</span>
              </button>
              Data Berhasil Di Update
            </div>
            </div>');
            redirect('dokter/index');
        }

        public function destroy($id)
        {
            $where = array('id' => $id);
            $this->Dokter_m->destroy($where, 'dokter');
            $this->session->set_flashdata('message', 
            '<div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
              <button class="close" data-dismiss="alert">
                <span>&times;</span>
              </button>
              Data Berhasil Di Hapus
            </div>
            </div>');
            redirect('dokter/index');
        }

    }

?>