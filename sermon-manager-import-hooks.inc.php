<?php

if (class_exists('SermonManagerImport')) {
	$importer = new SermonManagerImport();
	if (isset($importer)) {
		if (is_admin()) { // http://codex.wordpress.org/AJAX_in_Plugins#Ajax_on_the_Viewer-Facing_Side
		} else {
		}
	}
}

?>