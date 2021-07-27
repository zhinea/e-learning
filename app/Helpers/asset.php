<?php


if(!function_exists('ui_asset')){

	function ui_asset($uri){
		return config('e-learning.asset.ui') . '/' . trim($uri);
	}
}
