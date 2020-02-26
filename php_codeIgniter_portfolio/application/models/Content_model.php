<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function getContent($select, $table, $where = null, $value = null, $returnType = 'array') {
	    $this->db->select($select)
            ->from($table);

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
	public function getRecommandation($select, $where = null, $value = null, $returnType = 'array') {
		$this->db->select($select)
			->from('recommandation r')
			->join('users u','r.id_user = u.id');

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


	public function updateContent($table,$dataUpdate, $dataWhere) {
		$this->db->update($table, $dataUpdate, $dataWhere);
	}




	public function getContact($email) {
		$result = $this->db->select('id')
			->from('Contact')->where('email',$email)
			->get()->row();
		return $result;


	}




}
