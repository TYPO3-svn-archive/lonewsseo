#
# Table structure for table 'tt_news'
#
CREATE TABLE tt_news (
	tx_lonewsseo_alias tinytext NOT NULL,
	tx_lonewsseo_metatitle tinytext NOT NULL,
	tx_lonewsseo_metadescription tinytext NOT NULL
);



#
# Table structure for table 'tt_news_cat'
#
CREATE TABLE tt_news_cat (
	tx_lonewsseo_alias tinytext NOT NULL,
	tx_lonewsseo_title tinytext NOT NULL,
	tx_lonewsseo_description tinytext NOT NULL,
	tx_lonewsseo_keywords text NOT NULL
);