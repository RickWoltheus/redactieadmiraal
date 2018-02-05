<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/school/jaar3/redactieadmiraal/grav/user/plugins/seo/blueprints.yaml',
    'modified' => 1511355892,
    'data' => [
        'name' => 'SEO',
        'version' => '2.1.2',
        'description' => 'Manage your site’s meta tags for display in search engine results or social media networks. Includes an easy-to-use live preview feature.',
        'icon' => 'google',
        'author' => [
            'name' => 'Paul Massendari',
            'email' => 'paul@massendari.com'
        ],
        'homepage' => 'https://github.com/paulmassen/grav-plugin-seo',
        'keywords' => [
            0 => 'seo',
            1 => 'meta',
            2 => 'microdata',
            3 => 'schema',
            4 => 'plugin'
        ],
        'bugs' => 'https://github.com/paulmassen/grav-plugin-seo/issues',
        'license' => 'MIT/GPL',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'article' => [
                    'type' => 'toggle',
                    'label' => 'Enable Article Microdata',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'event' => [
                    'type' => 'toggle',
                    'label' => 'Enable Event Microdata',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'restaurant' => [
                    'type' => 'toggle',
                    'label' => 'Enable Restaurant Microdata',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'musicevent' => [
                    'type' => 'toggle',
                    'label' => 'Enable Music Event Microdata',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'person' => [
                    'type' => 'toggle',
                    'label' => 'Enable Person Microdata',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'organization' => [
                    'type' => 'toggle',
                    'label' => 'Enable Organization Microdata',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'facebookid' => [
                    'type' => 'text',
                    'label' => 'Facebook App ID'
                ],
                'twitterid' => [
                    'type' => 'text',
                    'label' => 'Twitter ID',
                    'placeholder' => '@yourusername'
                ]
            ]
        ]
    ]
];
