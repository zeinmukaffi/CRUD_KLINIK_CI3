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

        public function detail($id)
        {
            $data['dokter'] = $this->Dokter_m->show($id, 'dokter');            
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('dokter/detail', $data);
            $this->load->view('template/footer');
        }

        public function store()
        {
          $config['upload_path']          = './assets/foto';
          $config['allowed_types']        = 'jpeg|jpg|png';
          $this->load->library('upload', $config);
          if (!$this->upload->do_upload('foto')){
                  $error = array('error' => $this->upload->display_errors());
                  $this->load->view('upload', $error);
          }else{
              $_data = array('upload_data' => $this->upload->data());
               $data = array(
                  'nama_dokter'=> $this->input->post('nama_dokter'),
                  'sip'=> $this->input->post('sip'),
                  'nip'=> $this->input->post('nip'),
                  'jk'=> $this->input->post('jk'),
                  'kualifikasi'=> $this->input->post('kualifikasi'),
                  'foto' => $_data['upload_data']['file_name']
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
          $_image = $this->db->get_where('dokter',['id' => $id])->row();

          $config['upload_path'] = './assets/foto';
          $config['allowed_types'] = 'jpeg|jpg|png';
          $this->load->library('upload', $config);
          if (!$this->upload->do_upload('foto')){
            $data = array(
              'nama_dokter'=> $this->input->post('nama_dokter'),
              'sip'=> $this->input->post('sip'),
              'nip'=> $this->input->post('nip'),
              'jk'=> $this->input->post('jk'),
              'kualifikasi'=> $this->input->post('kualifikasi'),
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
          }else{
              $_data = array('upload_data' => $this->upload->data());
              $data = array(
                'nama_dokter'=> $this->input->post('nama_dokter'),
                'sip'=> $this->input->post('sip'),
                'nip'=> $this->input->post('nip'),
                'jk'=> $this->input->post('jk'),
                'kualifikasi'=> $this->input->post('kualifikasi'),
                'foto' => $_data['upload_data']['file_name']
              );
              $query = $this->db->update('dokter', $data, array('id' => $id));;
              if($query){
                  unlink("foto/".$_image->foto);
              }
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
