<?php
/*
Plugin Name: English to American Autocorrecter
Description: This plugin replaces common English spellings of words with their respective American English spellings.
Version:     1.1
Author:      Eric Burt
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

/*
	Word Source: https://greyorgray.com/most-commonly-misspelled-words/
*/

/* FUNCTIONS */
function english_american_startcase($text){
	$English = array(
	'Grey', 'Travelled', 'Centre', 'Theatre', 'Colour', 'Labour', 'Defence', 'Jewellery', 'Kerb', 'Litre', 'Metre', 'Tyre', 'Aluminium', 'Neighbour', 'Aeroplane', 'Carburettor', 'Fillet', 'Moustache', 'Speciality', 'Doughnut', 'Orientated', 'Disorientated', 'Phoney', 'Plough', 'Sceptic', 'Sulphur', 'Vice', 'Cosy', 'Chilli'
	);

	$American = array(
	'Gray', 'Traveled', 'Center', 'Theater', 'Color', 'Labor', 'Defense', 'Jewelry', 'Curb', 'Liter', 'Meter', 'Tire', 'Aluminum', 'Neighbor', 'Airplane', 'Carburetor', 'Filet', 'Mustache', 'Specialty', 'Donut', 'Oriented', 'Disoriented', 'Phony', 'Plow', 'Skeptic', 'Sulfur', 'Vise', 'Cozy', 'Chili'
	);

	return str_replace($English, $American, $text);
}

function english_american_lowercase($text){
	$english = array(
		'grey', 'travelled', 'centre', 'theatre', 'colour', 'labour', 'defence', 'jewellery', 'kerb', 'litre', 'metre', 'tyre', 'aluminium', 'neighbour', 'aeroplane', 'carburettor', 'fillet', 'moustache', 'speciality', 'doughnut', 'orientated', 'disorientated', 'phoney', 'plough', 'sceptic', 'sulphur', 'vice', 'cosy', 'chilli'
	);

	$american = array(
		'gray', 'traveled', 'center', 'theater', 'color', 'labor', 'defense', 'jewelry', 'curb', 'liter', 'meter', 'tire', 'aluminum', 'neighbor', 'airplane', 'carburetor', 'filet', 'mustache', 'specialty', 'donut', 'oriented', 'disoriented', 'phony', 'plow', 'skeptic', 'sulfur', 'vise', 'cozy', 'chili'
	);

	return str_replace($english, $american, $text);
}

function english_american_uppercase($text){
	$ENGLISH = array(
		'GREY', 'TRAVELLED', 'CENTRE', 'THEATRE', 'COLOUR', 'LABOUR', 'DEFENCE', 'JEWELLERY', 'KERB', 'LITRE', 'METRE', 'TYRE', 'ALUMINIUM', 'NEIGHBOUR', 'AEROPLANE', 'CARBURETTOR', 'FILLET', 'MOUSTACHE', 'SPECIALITY', 'DOUGHNUT', 'ORIENTATED', 'DISORIENTATED', 'PHONEY', 'PLOUGH', 'SCEPTIC', 'SULPHUR', 'VICE', 'COSY', 'CHILLI'
	);

	$AMERICAN = array(
		'GRAY', 'TRAVELED', 'CENTER', 'THEATER', 'COLOR', 'LABOR', 'DEFENSE', 'JEWELRY', 'CURB', 'LITER', 'METER', 'TIRE', 'ALUMINUM', 'NEIGHBOR', 'AIRPLANE', 'CARBURETOR', 'FILET', 'MUSTACHE', 'SPECIALTY', 'DONUT', 'ORIENTED', 'DISORIENTED', 'PHONY', 'PLOW', 'SKEPTIC', 'SULFUR', 'VISE', 'COZY', 'CHILI'
	);

	return str_replace($ENGLISH, $AMERICAN, $text);
}
/* FILTERS */

add_filter('the_title', 'english_american_startcase');
add_filter('the_content', 'english_american_startcase');

add_filter('the_title', 'english_american_lowercase');
add_filter('the_content', 'english_american_lowercase');

add_filter('the_title', 'english_american_uppercase');
add_filter('the_content', 'english_american_uppercase');

?>
