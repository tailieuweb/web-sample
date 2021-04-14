<?php

class bai_viet extends Model {
    
    public function danh_sach_bai_viet() {
        $sql = 'SELECT * FROM `bai_viet`';
        $bai_viet = $this->select($sql);
        return $bai_viet;
    }
}