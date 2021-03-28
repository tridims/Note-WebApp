<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_note extends CI_Model {

	//Catatan
	public function get_catatan(){
		$query = $this->db->get('catatan');
		return $query->result();
	}
	//add
	function insert_catatan($data){
		$this->db->insert('catatan',$data);
		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	//delete
	function delete_catatan($where){
		$this->db->delete('catatan', $where);
		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	//update
	function update_catatan($data,$where){
		$this->db->where($where);
		$this->db->update('catatan',$data);
		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	//detail
	function detail_catatan($where){		
		$query = $this->db
        ->where('id_catatan', $where)        
        ->get('catatan')
		->row();
		return $query;	
	}

	//add pengajuan
	function insert_pengajuan($data){
		$this->db->insert('pengajuan',$data);
		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	//Profile
	public function get_profile(){
		$query = $this->db->get('profile');
		return $query->result();
	}
	//add
	function insert_profile($data){
		$this->db->insert('profile',$data);
		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	//update profile
	function update_profile($data,$where){
		$this->db->where($where);
		$this->db->update('profile',$data);
		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	//detail profile
	function detail_profile($where){		
		$profile = $this->db
        ->where('id_user', $where)        
        ->get('profile')
		->row();
		return $profile;	
	}

	//Register
	public function register($data){
		$this->db->insert('user',$data);
		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}
	}
}