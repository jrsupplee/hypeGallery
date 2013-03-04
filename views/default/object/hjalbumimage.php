<?php

elgg_load_css('gallery.base.css');
elgg_load_js('gallery.base.js');
elgg_load_js('gallery.popup.js');

$entity = elgg_extract('entity', $vars, false);

if (!$entity) {
	return true;
}

$full = elgg_extract('full_view', $vars, false);
$list_type = elgg_extract('list_type', $vars, 'gallery');

if (elgg_in_context('activity') || elgg_in_context('main')) {
	echo elgg_view('object/hjalbumimage/river', $vars);
	return true;
}

$view = "object/hjalbumimage/$list_type";
if (elgg_view_exists($view)) {
	echo elgg_view($view, $vars);
} else {
	echo elgg_view('object/hjalbumimage/list', $vars);
}