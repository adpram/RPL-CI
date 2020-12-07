<?php
class Transaction_model extends CI_Model {

    // deklarasi nama tabel
    private $_table = "transactions";

    public function getData() {
        $this->db->select('transactions.*, cars.merk, customers.nama');
        $this->db->from('transactions');
        $this->db->join('cars', 'cars.id = transactions.car_id', 'left');
        $this->db->join('customers', 'customers.id = transactions.customer_id', 'left');
        return $this->db->get();
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