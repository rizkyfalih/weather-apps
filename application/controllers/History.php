<?php 
class History extends CI_Controller {
	
	public function index(){
		$data['lists'] = $this->m_city->get_all_city();
        $this->load->view('history', $data);
	}


}
