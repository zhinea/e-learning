<?php

if(!function_exists('ui_asset')){

	function ui_asset($uri){
		return config('e-learning.asset.ui') . '/' . trim($uri);
	}
}


if(!function_exists('active_menu')){

	function active_menu($url){
		return request()->is($url) ? 'active' : '';
	}
}