<?php

if (!defined('_ECRIRE_INC_VERSION')) return;

function triche_declarer_tables_objets_sql($tables) {

	$tables['spip_articles']['champs_editables'][] = 'visites';
	$tables['spip_articles']['champs_editables'][] = 'popularite';

	return $tables;
}


