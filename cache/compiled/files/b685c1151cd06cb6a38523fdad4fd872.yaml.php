<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/school/jaar3/redactieadmiraal/grav/user/plugins/admin/blueprints/admin/pages/new.yaml',
    'modified' => 1511355210,
    'data' => [
        'rules' => [
            'slug' => [
                'pattern' => '[a-zA-Zа-яA-Я0-9_\\-]+',
                'min' => 1,
                'max' => 200
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'section' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.ADD_PAGE'
                ],
                'title' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_ADMIN.PAGE_TITLE',
                    'help' => 'PLUGIN_ADMIN.PAGE_TITLE_HELP',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'folder' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_ADMIN.FOLDER_NAME',
                    'help' => 'PLUGIN_ADMIN.FOLDER_NAME_HELP',
                    'readonly' => true,
                    'validate' => [
                        'rule' => 'slug',
                        'required' => true
                    ]
                ],
                'route' => [
                    'type' => 'parents',
                    'label' => 'PLUGIN_ADMIN.PARENT_PAGE',
                    'classes' => 'fancy',
                    'default' => '/portfolio',
                    'readonly' => true,
                    'validate' => [
                        'required' => true
                    ]
                ],
                'name' => [
                    'type' => 'select',
                    'classes' => 'fancy',
                    'label' => 'PLUGIN_ADMIN.PAGE_FILE',
                    'help' => 'PLUGIN_ADMIN.PAGE_FILE_HELP',
                    'data-options@' => '\\Grav\\Common\\Page\\Pages::types',
                    'default' => 'project',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'visible' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.VISIBLE',
                    'help' => 'PLUGIN_ADMIN.VISIBLE_HELP',
                    'highlight' => '',
                    'default' => '',
                    'options' => [
                        '' => 'Auto',
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool',
                        'required' => true
                    ]
                ],
                'blueprint' => [
                    'type' => 'blueprint'
                ]
            ]
        ]
    ]
];
