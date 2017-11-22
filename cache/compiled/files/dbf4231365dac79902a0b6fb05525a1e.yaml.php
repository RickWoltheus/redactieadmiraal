<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/school/jaar3/redactieadmiraal/grav/user/themes/redactie-admiraal-webgem/blueprints/speeches.yaml',
    'modified' => 1511206114,
    'data' => [
        'title' => 'Page Content',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'fields' => [
                                'header.category' => [
                                    'type' => 'editor',
                                    'label' => '2e tekstkolom'
                                ],
                                'header.content2' => [
                                    'type' => 'editor',
                                    'label' => 'quote'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
