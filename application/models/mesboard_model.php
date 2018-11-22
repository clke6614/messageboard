<?php
/**
* 
*/
class mesboard_model extends CI_Model
{
	private $tbl = "broard"; //變數只能在類別內的函數使用
	
	function __construct()
	{
		$this->load->database();
		parent::__construct();
	}
	public function findall()
	{
		$query=$this->db->get($this->tbl);
		return $query->result_array();     //將結果回傳一個陣列資料，失敗時回傳空陣列。
	}
	public function creat()
	{
		$msg = $this->input->post('mes');
		$this->db->insert($this->tbl,$msg);
	}
	public function delete($id)
	{
		$this->db->delete($this->tbl,['id'=>$id]);
	}
	public function findById($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get($this->tbl);
		return $query->row_array(); // 回傳單筆陣列(array)資料
	}
	public function updata($id)
	{
		$msg = $this->input->post('mes');
		$this->db->where('id', $id);
		$this->db->update($this->tbl, $msg);
	}
}
?>