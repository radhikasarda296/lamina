<?php

namespace Beer;
use Beer\Controller\BeerController;
use Laminas\Router\Http\Segment;

return [
	'router' =>[
		'routes' => [
			'beer' => [
				'type' => Segment::class,
				'options' => [
				  'route' => '/beer[/:action[/:id]]',
				  'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]+',
                        'id' => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => BeerController::class,
                        'action' => 'index',
                    ],
				],
			],
		],
	],
	'view_manager' => [
		'template_path_stack' => [
    		__DIR__ . '/../view',
    	],
	]

];