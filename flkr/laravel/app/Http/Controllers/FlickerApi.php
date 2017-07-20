<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Flickr;

class FlickerApi extends Controller
{

	public function getAllLatestPhotos($per_page)
    {
    		if( ! filter_var($per_page, FILTER_VALIDATE_INT) ){
 				 $per_page=25;
			}

			$args = array(
				'method' => 'flickr.photos.getRecent',
				'api_key' => 'cdb719418350b088f44ae1ffb9a7f75a',
				'per_page' => $per_page,
				'extras'=>'url_m',
				'format' => 'json',
				'nojsoncallback'=>1
			);
			$baseUrl = 'https://api.flickr.com/services/rest/?'; 
			$requesrUrl = $baseUrl.http_build_query($args);
			return Flickr::sendCurlRequest($requesrUrl);			
		
		
   }

    public function getAllSizesOfPhoto($photo_id)
    {
    	$args = array(
			'method' => 'flickr.photos.getSizes',
			'api_key' => 'cdb719418350b088f44ae1ffb9a7f75a',
			'photo_id' => $photo_id,
			'format' => 'json',
			'nojsoncallback'=>1
		);
		$baseUrl = 'https://api.flickr.com/services/rest/?'; 
		$requesrUrl = $baseUrl.http_build_query($args);
		return Flickr::sendCurlRequest($requesrUrl);	
    }

}










