<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('encryption');
		$this->encryption->initialize(
			array(
				'cipher' => 'aes-256',
				'mode' => 'ctr',
				'key' => 'JeSuisuneCléEtmyMotdep@sseIsTrèsCOmpliqué,BonneCh@anceifyouwantetodécouvrirdiesesPasswort!!'
			)
		);
	}


	public function hash_generate($p_input){

		$password = $this->encryption->encrypt($p_input);
		return $password;

	}


	public function attempt($input){

		$pseudo = $input['login-pseudo'];
		$password = $input['login-password'];


		if ($this->verify_pass($pseudo, $password) == true){


			return $this->getUserByField('*', 'register_pseudo', $pseudo);
		}
	}



	public function checkExistUser($where) {


		$query = $this->db->select('*')
			->from('users')
			->where($where)
			->get();

		if ($query->num_rows() > 0) {

			return $query->row();
		} else {
			return false;
		}

	}

	public function checkExistUserNotMe($where, $idToExclude) {


		$query = $this->db->select('*')
			->from('users')
			->where($where)
			->where_not_in('id', $idToExclude)
			->get();

		if ($query->num_rows() > 0) {

			return $query->row();
		} else {
			return false;
		}

	}

	public function createUser($data) {
		$this->db->insert('users', $data);
	}

	public function updateUser($dataUpdate, $dataWhere) {
		$this->db->update('users', $dataUpdate, $dataWhere);
	}

	public function verify_pass($pseudo, $password){

		$userInfos = $this->getUserByField('use_password' , 'use_pseudo', $pseudo);

		if ( $userInfos != null){
			$hash = $userInfos->register_password;

			if ($this->hash_verify($hash, $password)){
				return true;
			}
		} else {
			return false;
		}
	}

	protected function getUserByField($select, $where, $value){



		$getData = $this->db->select($select)
			->from('users')
			->where($where, $value)
			->get();

		if ($getData->num_rows() > 0) {
			return $getData->row();
		} else {
			return false;
		}
	}

	public function hash_verify($p_bdd, $p_input){

		$bdd_output = $this->encryption->decrypt($p_bdd);


		if ($p_input == $bdd_output){
			return true;
		}else{
			return false;
		}

	}


	public function getUser($select, $where = null, $value = null, $returnType = 'array') {
		$this->db->select($select)
			->from('users');

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
