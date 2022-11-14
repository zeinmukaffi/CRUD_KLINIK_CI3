<?php 

    class Obat_m extends CI_Model
    {
        private $table = 'obat';
        
        public function index()
        {
            return $this->db->get('obat')->result();
        }

        public function count()
        {
            return $this->db->from("obat")->count_all_results();
        }

        public function store($data, $table)
        {
            $this->db->insert($table, $data);
        }

        public function edit($where, $table)
        {
            return $this->db->get_where($table, $where);
        }

        public function update($where, $data, $table)
        {
            $this->db->where($where);
            $this->db->update($table, $data);
        }

        public function destroy($where, $table)
        {
            $this->db->where($where);
            $this->db->delete($table);
        }
    }

?>