<?php
/**
* 
*/
class mesboard extends CI_Controller
{
	public function index()
	{
		$this->load->model('mesboard_model','mes');
		$data['mes'] = $this->mes->findall();
		$this->load->view('mesboard/index',$data);
		$this->load->view('mesboard/menu');
	}
	public function creat()
	{
		$this->load->helper('url'); //URL 輔助函數用來處理包含網址的資料內容。
		$this->load->model('mesboard_model','mes'); //mesboard_model替換為mes
		$this->mes->creat();
		redirect('/mesboard/index'); //從新導向 需要URL輔助函數
	}
	public function destroy($id)
	{
		$this->load->helper('url');
		$this->load->model('mesboard_model', 'msg');
		$this->msg->delete($id);
		redirect('/mesboard/index');
	}
		public function edit($id)
	{
		$this->load->model('mesboard_model', 'mes');
		$data['mes'] = $this->mes->findById($id);
		$this->load->view('mesboard/updata', $data);
		$this->load->view('mesboard/menu');
	}
	public function updata($id)
	{
		$this->load->helper('url'); 
		$this->load->model('mesboard_model','mes'); 
		$this->mes->updata($id);
		redirect('/mesboard/index');
	}
	public function delete($id)
	{
		$this->load->helper('url'); 
		$this->load->model('mesboard_model','mes'); 
		$this->mes->delete($id);
		redirect('/mesboard/index');
	}
}
?>