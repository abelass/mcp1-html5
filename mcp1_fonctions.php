<?php
/**
 * Plugin My Chacra - Pack basique
 * (c) 2012 My Chacra
 * Licence GNU/GPL
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

//Etablit si un objet doit être caché
function a_cacher($objet){
	include_spip('inc/config');

	$a_cacher=lire_config('mcp1/cacher_site_public');

	$cacher=false;	
	if(is_array($a_cacher)){
		if(in_array($objet,$a_cacher))$cacher=true;
		}
	return $cacher;
	}
?>
