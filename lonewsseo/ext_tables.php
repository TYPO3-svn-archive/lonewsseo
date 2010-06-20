<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');


$tempColumns = Array (
	"tx_lonewsseo_alias" => Array (		
		"exclude" => 1,		
		"label" => "LLL:EXT:lonewsseo/locallang_db.xml:tt_news.tx_lonewsseo_alias",		
		"config" => Array (
			"type" => "input",	
			"size" => "30",	
			"eval" => "tx_lonewsseo_mapping,lower,alphanum_x,nospace,unique",
		)
	),
	"tx_lonewsseo_metatitle" => Array (		
		"exclude" => 1,		
		"label" => "LLL:EXT:lonewsseo/locallang_db.xml:tt_news.tx_lonewsseo_metatitle",		
		"config" => Array (
			"type" => "input",	
			"size" => "65",	
			"max" => "65",
		)
	),
	"tx_lonewsseo_metadescription" => Array (		
		"exclude" => 1,		
		"label" => "LLL:EXT:lonewsseo/locallang_db.xml:tt_news.tx_lonewsseo_metadescription",		
		"config" => Array (
			"type" => "input",	
			"size" => "160",	
			"max" => "160",
		)
	),
);


t3lib_div::loadTCA("tt_news");
t3lib_extMgm::addTCAcolumns("tt_news",$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes("tt_news","--div--;Meta Data,tx_lonewsseo_alias;;;;1-1-1, tx_lonewsseo_metatitle, tx_lonewsseo_metadescription");

$tempColumns = Array (
	"tx_lonewsseo_alias" => Array (		
		"exclude" => 1,		
		"label" => "LLL:EXT:lonewsseo/locallang_db.xml:tt_news_cat.tx_lonewsseo_alias",		
		"config" => Array (
			"type" => "input",	
			"size" => "30",
			"eval" => "tx_lonewsseo_catmapping,lower,nospace,unique",
		)
	),
	"tx_lonewsseo_title" => Array (		
		"exclude" => 1,		
		"label" => "LLL:EXT:lonewsseo/locallang_db.xml:tt_news_cat.tx_lonewsseo_title",		
		"config" => Array (
			"type" => "input",	
			"size" => "65",	
			"max" => "65",
		)
	),
	"tx_lonewsseo_description" => Array (		
		"exclude" => 1,		
		"label" => "LLL:EXT:lonewsseo/locallang_db.xml:tt_news_cat.tx_lonewsseo_description",		
		"config" => Array (
			"type" => "input",	
			"size" => "160",	
			"max" => "160",
		)
	),
	"tx_lonewsseo_keywords" => Array (		
		"exclude" => 1,		
		"label" => "LLL:EXT:lonewsseo/locallang_db.xml:tt_news_cat.tx_lonewsseo_keywords",		
		"config" => Array (
			"type" => "text",
			"cols" => "30",	
			"rows" => "5",
		)
	),
);


t3lib_div::loadTCA("tt_news_cat");
t3lib_extMgm::addTCAcolumns("tt_news_cat",$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes("tt_news_cat","tx_lonewsseo_alias;;;;1-1-1, tx_lonewsseo_title, tx_lonewsseo_description, tx_lonewsseo_keywords");
?>