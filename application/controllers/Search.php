<?php 
class Search extends CI_Controller {

	public function index(){
        $keyword = $this->input->post('keyword');
        
        try{
		$search_api = new GuzzleHttp\Client(['base_uri' => 'https://www.metaweather.com/api/location/search/']);
		$location = $search_api->request('GET', '?query='.$keyword);
		$location = json_decode($location->getBody(),true);
        
        } catch(Exception $e){
            $location = [];
        }

        if (sizeof($location) > 0){
            $location_api = new GuzzleHttp\Client(['base_uri' => 'https://www.metaweather.com/api/location/']);
            $forecast_location = $location_api->request('GET', strval($location[0]['woeid']));
            $forecast_location = json_decode($forecast_location->getBody(),true);
            
            $data['current_location'] = $location;
            $data['forecast_location'] = $forecast_location;
            $this->m_city->save_city($location[0]['title']);
            $this->load->view('dashboard',$data);
        } else {
            $this->m_city->save_city($keyword);
            $this->load->view('error');
        }
		
	}

}
