<?php

/**
 * Load Boris REPL when run via `php index.php boris`.
 */

if (! $this->cli) die ('Must be run from the command line.');

require_once ('lib/vendor/autoload.php');

$boris = new \Boris\Boris ('elefant> ');

$boris->setLocal (array (
	'cache' => $cache,
	'controller' => $this,
	'i18n' => $i18n,
	'page' => $page,
	'tpl' => $tpl
));

$boris->start ();
