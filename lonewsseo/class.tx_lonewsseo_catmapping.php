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
  	$url = str_replace('�', 'ae', $url);
  	$url = str_replace('�', 'ae', $url);
  	$url = str_replace('�', 'oe', $url);
  	$url = str_replace('�', 'oe', $url);
  	$url = str_replace('�', 'ue', $url);
  	$url = str_replace('�', 'ue', $url);
  	$url = str_replace('�', 'ss', $url);
  	$url = str_replace(utf8_encode('�'), 'ae', $url);
  	$url = str_replace(utf8_encode('�'), 'ae', $url);
  	$url = str_replace(utf8_encode('�'), 'oe', $url);
  	$url = str_replace(utf8_encode('�'), 'oe', $url);
  	$url = str_replace(utf8_encode('�'), 'ue', $url);
  	$url = str_replace(utf8_encode('�'), 'ue', $url);
  	$url = str_replace(utf8_encode('�'), 'ss', $url);
  	return $url;
  	
  }
  
}
?>