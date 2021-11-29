<?php


/**
 * @package  app
 * @extends  Controller
 */
class Controller_Cat extends Controller
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{

        $country_arr = [
            'JP'    => 'jp',
            'KR'    => 'kor'
        ];
        
        // 아이피 주소 취득
        $ip = $_SERVER['REMOTE_ADDR']; 
        // ip정보 취득
        $details = json_decode(file_get_contents("http://ipinfo.io/"));

		return Response::forge(View::forge('mbti/cat/'.$country_arr[$details->country]??'kor'));
	}
}
