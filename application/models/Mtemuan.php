<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Mtemuan extends CI_Model
{
	
	function total_rows($cari)
	{
		$this->db->like('nolhp', $cari);
		$this->db->or_like('tanggallhp', $cari);
		$this->db->or_like('notemuan', $cari);
		$this->db->or_like('tahun', $cari);
		$this->db->or_like('auditor', $cari);
		$this->db->or_like('dinas', $cari);
		$this->db->from('ptemuan');
		return $this->db->count_all_results();
	}

	function get_limit($cari, $offset, $num)
	{
		$this->db->like('nolhp', $cari);
		$this->db->or_like('tanggallhp', $cari);
		$this->db->or_like('notemuan', $cari);
		$this->db->or_like('tahun', $cari);
		$this->db->or_like('auditor', $cari);
		$this->db->or_like('dinas', $cari);
		$this->db->from('ptemuan');
		$this->db->order_by('nolhp', 'asc');
		$this->db->limit($offset, $num);
		return $this->db->get()->result();
	}

	function get_all($cari = null)
	{
		if($cari){
			$this->db->like('nolhp', $cari);
			$this->db->or_like('tanggallhp', $cari);
			$this->db->or_like('notemuan', $cari);
			$this->db->or_like('tahun', $cari);
			$this->db->or_like('auditor', $cari);
			$this->db->or_like('dinas', $cari);
		}
		$this->db->from('ptemuan');
		$this->db->order_by('nolhp', 'asc');
		return $this->db->get()->result();
	}

	function get_by_id($id)
	{
		$this->db->where('nolhp', $id);
		$this->db->from('ptemuan');
		return $this->db->get()->row();
	}

	function insert($data){
		if($this->db->insert('ptemuan', $data)){
			return '';
		}else {
			return $this->db->error();
		}
	}

	function update($id, $data){
		$this->db->where('nolhp', $id);
		if($this->db->update('ptemuan',$data)){
			return '';
		}else {
			return $this->db->error();
		}
	}

	function delete($id){
		$this->db->where('nolhp', $id);
		if($this->db->delete('ptemuan')){
			return '';
		}else {
			return $this->db->error();
		}
	}
}