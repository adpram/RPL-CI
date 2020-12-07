<?php
class Chart_model extends CI_Model {

    public function getCars() {
        $query = $this->db->query("SELECT
            c.merk AS car_name,
            count( t.car_id ) * 100 / (SELECT count(*) FROM transactions) as percentage
        FROM
            transactions AS t
            LEFT JOIN cars AS c ON t.car_id = c.id 
        GROUP BY
            t.car_id");
        return $query;
    }

    public function getTransactions() {
        $query = $this->db->query("SELECT
            tgl_transaksi,
            sum( total + denda ) AS total_transaksi 
        FROM
            transactions 
        WHERE
            `status` IN ( 1, 2 ) 
        GROUP BY
            tgl_transaksi");
        return $query;
    }

}
?>
