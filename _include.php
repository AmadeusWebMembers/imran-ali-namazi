<?php
DEFINE('NODEPATH', __DIR__);

variables([
	assetKey(NODEASSETS) => fileUrl(variable('section') . '/' . variable('node') . '/assets/'),
	'nodeSiteName' => 'Imran\'s Corner',
	'nodeSafeName' => 'imran-ali-namazi',
	'submenu-at-node' => true,
	'footer-message' => 'IMRAN: Interests: "[Web and Visibility](%work--web-url%MORELINK)", [achieving dreams](#todo-twelvenMORELINK) and [poems with deep meaning](#todo-writingMORELINK).',
]);
