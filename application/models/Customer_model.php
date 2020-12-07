<?php
class Customer_model extends CI_Model {

    // deklarasi nama tabel
    private $_table = "customers";

    public function getData() {
        return $this->db->get('customers');
    }

    public function storeData($data,$table){
		$this->db->insert($table,$data);
    }
    
    public function editData($where, $table){
        return $this->db->get_where($table,$where);
    }

    public function updateData($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function destroyData($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

}
?>