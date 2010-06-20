<?php
class tx_lonewsseo_catmapping {
  function evaluateFieldValue($value, $is_in, &$set) {
  	if(strlen(trim($value))==0) {
	  	foreach($_POST['data']['tt_news_cat'] as $id => $idvalue) {
				  return($this->form_url($_POST['data']['tt_news_cat'][$id]['title']));
			}
		}
		return $value;
  }
  
  function form_url($url)
  {
  	$url = str_replace(' ', '-', $url);
  	$url = str_replace('ä', 'ae', $url);
  	$url = str_replace('Ä', 'ae', $url);
  	$url = str_replace('ö', 'oe', $url);
  	$url = str_replace('Ö', 'oe', $url);
  	$url = str_replace('ü', 'ue', $url);
  	$url = str_replace('Ü', 'ue', $url);
  	$url = str_replace('ß', 'ss', $url);
  	$url = str_replace(utf8_encode('ä'), 'ae', $url);
  	$url = str_replace(utf8_encode('Ä'), 'ae', $url);
  	$url = str_replace(utf8_encode('ö'), 'oe', $url);
  	$url = str_replace(utf8_encode('Ö'), 'oe', $url);
  	$url = str_replace(utf8_encode('ü'), 'ue', $url);
  	$url = str_replace(utf8_encode('Ü'), 'ue', $url);
  	$url = str_replace(utf8_encode('ß'), 'ss', $url);
  	return $url;
  	
  }
  
}
?>