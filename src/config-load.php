<?php

return [
	'providers' => [
		Barryvdh\Debugbar\ServiceProvider::class,
		Collective\Html\HtmlServiceProvider::class,
	],
	'aliases' => [
		'Form' => Collective\Html\FormFacade::class,
		'Html' => Collective\Html\HtmlFacade::class,
	],
];