<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'crypt' => [
        'key' => '9db000057fb29795f25a67189bb0a9d0'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => '',
                'username' => 'admin',
                'password' => 'admin123',
                'active' => '1',
                'driver_options' => [

                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'files'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '1c8_'
            ],
            'page_cache' => [
                'id_prefix' => '1c8_'
            ]
        ]
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
    ],
    'cache_types' => [
        'config' => 0,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'google_product' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1
    ],
    'downloadable_domains' => [
        '127.0.0.1'
    ],
    'install' => [
        'date' => 'Tue, 14 Jul 2020 12:49:02 +0000'
    ],
    'system' => [
        'default' => [
            'web' => [
                'unsecure' => [
                    'base_media_url' => '{{secure_base_url}}pub/media/',
                    'base_static_url' => '{{secure_base_url}}pub/static/'
                ],
                'secure' => [
                    'base_media_url' => '{{secure_base_url}}pub/media/',
                    'base_static_url' => '{{secure_base_url}}pub/static/'
                ]
            ],
            'catalog' => [
                'search' => [
                    'elasticsearch5_server_hostname' => 'localhost',
                    'elasticsearch5_server_port' => '9200',
                    'elasticsearch5_index_prefix' => 'magento2',
                    'elasticsearch5_enable_auth' => '0',
                    'elasticsearch5_server_timeout' => '15',
                    'elasticsearch6_server_hostname' => 'localhost',
                    'elasticsearch6_server_port' => '9200',
                    'elasticsearch6_index_prefix' => 'magento2',
                    'elasticsearch6_enable_auth' => '0',
                    'elasticsearch6_server_timeout' => '15',
                    'elasticsearch7_server_hostname' => 'localhost',
                    'elasticsearch7_server_port' => '9200',
                    'elasticsearch7_index_prefix' => 'magento2',
                    'elasticsearch7_enable_auth' => '0',
                    'elasticsearch7_server_timeout' => '15'
                ]
            ]
        ]
    ]
];
