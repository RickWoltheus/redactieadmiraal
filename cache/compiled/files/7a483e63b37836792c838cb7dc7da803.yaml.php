<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/school/jaar3/redactieadmiraal/grav/user/themes/redactie-admiraal-webgem/blueprints.yaml',
    'modified' => 1510927701,
    'data' => [
        'name' => 'Redactie Admiraal Webgem',
        'version' => '0.1.0',
        'description' => 'A theme for redactie admiraal. Made by Webgem.',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Webgem',
            'email' => 'rwoltheus@gmail.com'
        ],
        'homepage' => 'https://github.com/webgem/grav-theme-redactie-admiraal-webgem',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/webgem/grav-theme-redactie-admiraal-webgem/issues',
        'readme' => 'https://github.com/webgem/grav-theme-redactie-admiraal-webgem/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
