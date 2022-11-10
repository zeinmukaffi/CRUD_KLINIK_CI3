<?php 

    class Berobat extends CI_Controller
    {
        public function __construct(){
            parent::__construct();
            $this->load->model('Berobat_m');
        }

        public function index()
        {
            $data['berobat'] = $this->Berobat_m->index();

            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('berobat/index', $data);
            $this->load->view('template/footer');
        }

        public function create()
        {
            $this->load->model('Dokter_m', 'Obat_m', 'Pasien_m', 'Rs_Rujuk_m');
            $data['dokter'] = $this->Dokter_m->index();
            $data['obat'] = $this->Obat_m->index();
            $data['pasien'] = $this->Pasien_m->index();
            $data['rs_rujuk'] = $this->Rs_Rujuk_m->index();

            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('berobat/create', $data);
            $this->load->view('template/footer');
        }

        public function store()
        {
            $nama_pasien_id = $this->input->post('nama_pasien_id');
            $tgl_berobat = $this->input->post('tgl_berobat');
            $keluhan = $this->input->post('keluhan');
            $nama_dokter_id = $this->input->post('nama_dokter_id');
            $rujukan_id = $this->input->post('rujukan_id');
            $obat_id = $this->input->post('obat_id');
            $biaya = $this->input->post('biaya');

            $data = array(
                'nama_pasien_id' => $nama_pasien_id,
                'tgl_berobat' => $tgl_berobat,
                'keluhan' => $keluhan,
                'nama_dokter_id' => $nama_dokter_id,
                'rujukan_id' => $rujukan_id,
                'obat_id' => $obat_id,
                'biaya' => $biaya,
            );

            $this->Berobat_m->store($data, 'berobat');
            $this->session->set_flashdata('message', 
            '<div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
              <button class="close" data-dismiss="alert">
                <span>&times;</span>
              </button>
              Data Berhasil Di Tambahkan
            </div>
            </div>');
            redirect('berobat/index');
        }

        public function edit($id)
        {
            $this->load->model('Dokter_m', 'Obat_m', 'Pasien_m', 'Rs_Rujuk_m');
            $data['dokter'] = $this->Dokter_m->index();
            $data['obat'] = $this->Obat_m->index();
            $data['pasien'] = $this->Pasien_m->index();
            $data['rs_rujuk'] = $this->Rs_Rujuk_m->index();
            $data['berobat'] = $this->Berobat_m->edit($id, 'berobat');

            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('berobat/edit', $data);
            $this->load->view('template/footer');
        }

        public function update()
        {
            $id = $this->input->post('id');
            $nama_pasien_id = $this->input->post('nama_pasien_id');
            $tgl_berobat = $this->input->post('tgl_berobat');
            $keluhan = $this->input->post('keluhan');
            $nama_dokter_id = $this->input->post('nama_dokter_id');
            $rujukan_id = $this->input->post('rujukan_id');
            $obat_id = $this->input->post('obat_id');
            $biaya = $this->input->post('biaya');

            $data = array(
                'nama_pasien_id' => $nama_pasien_id,
                'tgl_berobat' => $tgl_berobat,
                'keluhan' => $keluhan,
                'nama_dokter_id' => $nama_dokter_id,
                'rujukan_id' => $rujukan_id,
                'obat_id' => $obat_id,
                'biaya' => $biaya,
            );

            $where = array(
                'id' => $id
            );

            $this->Berobat_m->update($where, $data, 'berobat');

            $this->session->set_flashdata('message', 
            '<div class="alert alert-warning alert-dismissible show fade">
            <div class="alert-body">
              <button class="close" data-dismiss="alert">
                <span>&times;</span>
              </button>
              Data Berhasil Di Update
            </div>
            </div>');
            redirect('berobat/index');
        }

        public function destroy($id)
        {
            $where = array('id' => $id);
            $this->Berobat_m->destroy($where, 'berobat');
            $this->session->set_flashdata('message', 
            '<div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
              <button class="close" data-dismiss="alert">
                <span>&times;</span>
              </button>
              Data Berhasil Di Hapus
            </div>
            </div>');
            redirect('berobat/index');
        }
    }

?>