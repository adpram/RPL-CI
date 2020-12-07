<?php
class User_model extends CI_Model {

    // deklarasi nama tabel
    private $_table = "users";

    public function doLogin() {
        $post = $this->input->post();

        // mencari user berdasarkan email dari inputan
        $this->db->where('email', $post["email"]);
        $user = $this->db->get($this->_table)->row();

        // pengkondisian jika user telah ada / terdaftar
        if ( $user ) {
            // cek passwordnya apakah sudah sesuai dengan yang ada di DB
            $isPasswordTrue = password_verify($post["password"], $user->password);

            // jika password benar
            if ( $isPasswordTrue ) {
                $this->session->set_userdata(['user_logged' => $user]);
                return true;
            }
        }

        return false;
    }

    public function isNotLogin() {
        return $this->session->userdata('user_logged') === null;
    }

    public function getData() {
        return $this->db->get('users');
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