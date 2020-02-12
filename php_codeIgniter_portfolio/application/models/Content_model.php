<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function getContent($select, $where = null, $value = null, $returnType = 'array') {
	    $this->db->select($select)
            ->from('CV');

        if($where != null && $value != null){
            $this->db->where($where,$value);
        }

        $result = $this->db->get();


        if($returnType === 'row') {
            if ($result->num_rows() > 0) {
                return $result->row();
            } else {
                return false;
            }
        } else {
            if($result->num_rows() > 0){
                return $result->result();
            } else {
                return false;
            }
        }
    }

}
