<?php 

    class Rs_Rujuk extends CI_Controller
    {

        public function index()
        {
            $this->load->model('Rs_Rujuk_m');
            $data['rs_rujuk'] = $this->Rs_Rujuk_m->index();

            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('rs_rujuk/index', $data);
            $this->load->view('template/footer');
        }

        public function create()
        {
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('rs_rujuk/create');
            $this->load->view('template/footer');
        }

        public function store()
        {
            $nama_rs = $this->input->post('nama_rs');
            $alamat = $this->input->post('alamat');

            $data = array(
                'nama_rs' => $nama_rs,
                'alamat' => $alamat,
            );

            $this->Rs_Rujuk_m->store($data, 'rs_rujuk');
            $this->session->set_flashdata('message', 
            '<div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
              <button class="close" data-dismiss="alert">
                <span>&times;</span>
              </button>
              Data Berhasil Di Tambahkan
            </div>
            </div>');
            redirect('rs_rujuk/index');
        }

        public function edit($id)
        {
            $where = array('id' => $id);
            $data['rs_rujuk'] = $this->Rs_Rujuk_m->edit($where, 'rs_rujuk')->result();
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('rs_rujuk/edit', $data);
            $this->load->view('template/footer');
        }

        public function update()
        {
            $id = $this->input->post('id');
            $nama_rs = $this->input->post('nama_rs');
            $alamat = $this->input->post('alamat');

            $data = array(
                'nama_rs' => $nama_rs,
                'alamat' => $alamat,
            );

            $where = array(
                'id' => $id
            );

            $this->Rs_Rujuk_m->update($where, $data, 'rs_rujuk');
            $this->session->set_flashdata('message', 
            '<div class="alert alert-warning alert-dismissible show fade">
            <div class="alert-body">
              <button class="close" data-dismiss="alert">
                <span>&times;</span>
              </button>
              Data Berhasil Di Update
            </div>
            </div>');
            redirect('rs_rujuk/index');
        }

        public function destroy($id)
        {
            $where = array('id' => $id);
            $this->Rs_Rujuk_m->destroy($where, 'rs_rujuk');
            $this->session->set_flashdata('message', 
            '<div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
              <button class="close" data-dismiss="alert">
                <span>&times;</span>
              </button>
              Data Berhasil Di Hapus
            </div>
            </div>');
            redirect('rs_rujuk/index');
        }

    }

?>