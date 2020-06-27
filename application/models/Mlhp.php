<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Mlhp extends CI_Model
{
	
	function total_rows($cari)
	{
		$this->db->like('nomerlhp', $cari);
		$this->db->or_like('tanggallhp', $cari);
		$this->db->or_like('tahun', $cari);
		$this->db->or_like('auditor', $cari);
		$this->db->or_like('dinas', $cari);
		$this->db->from('ppenyebab');
		return $this->db->count_all_results();
	}

	function get_limit($cari, $offset, $num)
	{
		$this->db->like('kdpokokpb', $cari);
		$this->db->or_like('tanggallhp', $cari);
		$this->db->or_like('tahun', $cari);
		$this->db->or_like('auditor', $cari);
		$this->db->or_like('dinas', $cari);
		$this->db->from('ppenyebab');
		$this->db->order_by('nomerlhp', 'asc');
		$this->db->limit($offset, $num);
		return $this->db->get()->result();
	}

	function get_all($cari = null)
	{
		if($cari){
			$this->db->like('nomerlhp', $cari);
			$this->db->or_like('tanggallhp', $cari);
			$this->db->or_like('tahun', $cari);
			$this->db->or_like('auditor', $cari);
			$this->db->or_like('dinas', $cari);
		}
		$this->db->from('ppenyebab');
		$this->db->order_by('nomerlhp', 'asc');
		return $this->db->get()->result();
	}

	function get_by_id($id)
	{
		$this->db->where('nomerlhp', $id);
		$this->db->from('ppenyebab');
		return $this->db->get()->row();
	}

	function insert($data){
		if($this->db->insert('ppenyebab', $data)){
			return '';
		}else {
			return $this->db->error();
		}
	}

	function update($id, $data){
		$this->db->where('nomerlhp', $id);
		if($this->db->update('ppenyebab',$data)){
			return '';
		}else {
			return $this->db->error();
		}
	}

	function delete($id){
		$this->db->where('nomerlhp', $id);
		if($this->db->delete('ppenyebab')){
			return '';
		}else {
			return $this->db->error();
		}
	}
}