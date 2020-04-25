<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{

	public function index()
	{
		$dataCovid = $this->getData();
        $array_data = [];
        foreach ($dataCovid as $m) {
            $array = [
                'type' => 'Feature',
                'geometry' => [
                    'type' => 'Point',
                    'coordinates' => [floatval($m['countryInfo']['lat']), floatval($m['countryInfo']['long'])],
                ],
                'properties' => [
                    'title' => $m['country'],
					'icon' => $m['countryInfo']['flag'],
					'total' => $m['cases'],
					'active' => $m['active'],
					'recovered' => $m['recovered'],
					'deaths' => $m['deaths'],
                ]
            ];
            array_push($array_data, $array);
		}
		$data['data'] = $array_data;
		$this->load->view('layouts/header');
		$this->load->view('pages/index', $data);
		$this->load->view('layouts/js');
	}

	private function getData(){
		$curl = curl_init();
		
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://corona.lmao.ninja/v2/countries",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		));
		
		$response = curl_exec($curl);
		
		curl_close($curl);
		return json_decode($response, true);
	}

}
