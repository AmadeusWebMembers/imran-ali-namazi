<?php
DEFINE('NODEPATH', __DIR__);

variables([
	assetKey(NODEASSETS) => fileUrl(variable('section') . '/' . variable('node') . '/assets/'),
	'nodeSiteName' => 'Imran\'s Corner',
	'nodeSafeName' => 'imran-ali-namazi',
	'nodeHumanizeReplaces' => [
		'on' => 'Ideas On',
		'do' => 'Learn With',
		'aw builder' => 'My Tech',
		'aw dawns' => 'Our Soul',
	],
	'submenu-at-node' => true,
	'link-to-node-sub-section' => true,
	'footer-message' => 'IMRAN: Interests: "[Web and Visibility](%work--web-url%MORELINK)", [achieving dreams](#todo-twelvenMORELINK) and [poems with deep meaning](#todo-writingMORELINK).',
]);
