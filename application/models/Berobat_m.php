<?php 

    class Berobat_m extends CI_Model
    {
        private $table = 'berobat';
        
        public function index()
        {
            $this->db->select('b.id, p.nama_pasien, b.tgl_berobat, b.keluhan, d.nama_dokter, r.nama_rs, o.nama_obat, b.biaya');
            $this->db->from('berobat b');
            $this->db->join('dokter d', 'd.id=b.nama_dokter_id', 'left');
            $this->db->join('pasien p', 'p.id=b.nama_pasien_id', 'left');
            $this->db->join('rs_rujuk r', 'r.id=b.rujukan_id', 'left');
            $this->db->join('obat o', 'o.id=b.obat_id', 'left');
            $query = $this->db->get();
            return $query->result();
        }

        public function history()
        {
            $this->db->select('berobat.id, pasien.nama_pasien, berobat.*');
            $this->db->from('berobat');
            $this->db->join('pasien', 'pasien.id=berobat.nama_pasien_id');
            $this->db->limit(4);
            $this->db->order_by('id',"DESC");
            $query = $this->db->get();
            return $query->result();
        }

        public function count()
        {
            return $this->db->from("berobat")->count_all_results();
        }

        public function store($data, $table)
        {
            $this->db->insert($table, $data);
        }

        public function show($id, $table)
        {
            return $this->db->where('id', $id)->get($table)->row();
        }

        public function edit($id, $table)
        {
            return $this->db->where('id', $id)->get($table)->row();
        }

        public function update($id, $data, $table)
        {
            $this->db->where($id, 'id')->update($table, $data);
        }

        public function destroy($where, $table)
        {
            $this->db->where($where);
            $this->db->delete($table);
        }
    }

?>