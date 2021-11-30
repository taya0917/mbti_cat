<?php


/**
 * @package  app
 * @extends  Controller
 */
class Controller_Cat extends Controller
{

	public $js			= '';
	public $css			= '';
	public $meta_txt 	= '';

	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{

		$this->set_meta(CONST_CAT_TITLE_KR, CONST_CAT_DESCRIPTION_KR, 'cat');

        $country_arr = [
            'JP'    => 'jp',
            'KR'    => 'kor'
        ];
        
        // 아이피 주소 취득
        $ip = $_SERVER['REMOTE_ADDR']; 
        // ip정보 취득
        $details = json_decode(file_get_contents("http://ipinfo.io/"));

		$view_data = [
			'meta_txt'	=>$this->meta_txt, 
			'css'		=>$this->css, 
			'js'		=>$this->js
		];
// var_dump($view_data);die;
		return Response::forge(View::forge('mbti/cat/'.$country_arr[$details->country]??'kor', ['view_data'=>$view_data], false));
	}


	// 필수 메타 취득
	private function set_meta($title, $description = '', $asset_name = ''){
		$this->meta_txt .= '<meta charset="UTF-8">';
		$this->meta_txt .= '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
		$this->meta_txt .= '<title>'.$title.'</title>';
		$this->meta_txt .= '<meta name="description" content="'.$description.'">';

		$this->meta_txt .= '<meta property="og:type" content="website">';
		$this->meta_txt .= '<meta property="og:title" content="'.$title.'">';
		$this->meta_txt .= '<meta property="og:description" content="'.$description.'">';
		$this->meta_txt .= '<meta property="og:image" content="http://nyangbti.netlify.app/jy.png">';
		$this->meta_txt .= '<meta property="og:url" content="http://nyangbti.netlify.app">';

		$this->meta_txt .= '<meta name="twitter:card" content="summary">';
		$this->meta_txt .= '<meta name="twitter:title" content="'.$title.'">';
		$this->meta_txt .= '<meta name="twitter:description" content="'.$description.'">';
		$this->meta_txt .= '<meta name="twitter:image" content="http://nyangbti.netlify.app/jy.png">';
		$this->meta_txt .= '<meta name="twitter:domain" content="http://nyangbti.netlify.app">';

		if(!empty($asset_name)){
			$this->js  .=  Asset::js($asset_name.'.js');
			$this->css .=  Asset::css($asset_name.'.css');
		}
	}

}
