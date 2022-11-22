<?php 

    class Obat extends CI_Controller
    {

        public function index()
        {
            $this->load->model('Obat_m');
            $data['obat'] = $this->Obat_m->index();

            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('obat/index', $data);
            $this->load->view('template/footer');
        }

        public function detail($id)
        {
            $data['obat'] = $this->Obat_m->show($id, 'obat');            
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('obat/detail', $data);
            $this->load->view('template/footer');
        }

        public function create()
        {
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('obat/create');
            $this->load->view('template/footer');
        }

        public function store()
        {
            $nama_obat = $this->input->post('nama_obat');
            $jenis = $this->input->post('jenis');
            $stok = $this->input->post('stok');
            $tgl_exp = $this->input->post('tgl_exp');
            $deskripsi = $this->input->post('deskripsi');
            $dosis = $this->input->post('dosis');
            $ket = $this->input->post('ket');

            $data = array(
                'nama_obat' => $nama_obat,
                'jenis' => $jenis,
                'stok' => $stok,
                'tgl_exp' => $tgl_exp,
                'deskripsi' => $deskripsi,
                'dosis' => $dosis,
                'ket' => $ket,
            );

            $this->Obat_m->store($data, 'obat');
            $this->session->set_flashdata('message', 
            '<div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
              <button class="close" data-dismiss="alert">
                <span>&times;</span>
              </button>
              Data Berhasil Di Tambahkan
            </div>
            </div>');
            redirect('obat/index');
        }

        public function edit($id)
        {
            $where = array('id' => $id);
            $data['obat'] = $this->Obat_m->edit($where, 'obat')->result();
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('obat/edit', $data);
            $this->load->view('template/footer');
        }

        public function update()
        {
            $id = $this->input->post('id');
            $nama_obat = $this->input->post('nama_obat');
            $jenis = $this->input->post('jenis');
            $stok = $this->input->post('stok');
            $tgl_exp = $this->input->post('tgl_exp');
            $deskripsi = $this->input->post('deskripsi');
            $dosis = $this->input->post('dosis');
            $ket = $this->input->post('ket');

            $data = array(
                'nama_obat' => $nama_obat,
                'jenis' => $jenis,
                'stok' => $stok,
                'tgl_exp' => $tgl_exp,
                'deskripsi' => $deskripsi,
                'dosis' => $dosis,
                'ket' => $ket,
            );

            $where = array(
                'id' => $id
            );

            $this->Obat_m->update($where, $data, 'obat');
            $this->session->set_flashdata('message', 
            '<div class="alert alert-warning alert-dismissible show fade">
            <div class="alert-body">
              <button class="close" data-dismiss="alert">
                <span>&times;</span>
              </button>
              Data Berhasil Di Update
            </div>
            </div>');
            redirect('obat/index');
        }

        public function destroy($id)
        {
            $where = array('id' => $id);
            $this->Obat_m->destroy($where, 'obat');
            $this->session->set_flashdata('message', 
            '<div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
              <button class="close" data-dismiss="alert">
                <span>&times;</span>
              </button>
              Data Berhasil Di Hapus
            </div>
            </div>');
            redirect('obat/index');
        }

    }

?>