<?php
class Car_model extends CI_Model {

    // deklarasi nama tabel
    private $_table = "cars";

    public function getData() {
        return $this->db->get('cars');
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

    public function getAvailableCar(){
        $this->db->where('status', 0); 
        $hasil = $this->db->get('cars');
        return $hasil;
    }

}
?>