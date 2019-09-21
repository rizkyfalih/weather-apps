<?php 
class Dashboard extends CI_Controller {
	
	public function index(){
		
		$search_api = new GuzzleHttp\Client(['base_uri' => 'https://www.metaweather.com/api/location/search/']);
		$location = $search_api->request('GET', '?query=jakarta');
		$location = json_decode($location->getBody(),true);

		$location_api = new GuzzleHttp\Client(['base_uri' => 'https://www.metaweather.com/api/location/']);
		$forecast_location = $location_api->request('GET', strval($location[0]['woeid']));
		$forecast_location = json_decode($forecast_location->getBody(),true);
        
		$data['current_location'] = $location;
		$data['forecast_location'] = $forecast_location;
        $this->load->view('dashboard',$data);
		
	}


}
