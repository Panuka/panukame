<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController {

	public function index() {
		$url = 'https://api.instagram.com/v1/users/self/media/recent/?access_token='.env('INSTAGRAM_ACCESS_KEY');

		$data = json_decode(file_get_contents($url), true);
		$bd = 791812800; // 03/02/1995
		$yo = ((int)date('Y', \time() - $bd) - 1970);

		return view('index', [
			'data' => $data['data'],
			'yo' => $yo
		]);
	}
}
