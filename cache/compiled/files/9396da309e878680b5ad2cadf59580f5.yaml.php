<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/school/jaar3/redactieadmiraal/grav/user/themes/redactie-admiraal-webgem/blueprints/project.yaml',
    'modified' => 1511967402,
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
                                'header.title' => [
                                    'label' => 'titel'
                                ],
                                'header.media_order' => [
                                    'unset@' => true
                                ],
                                'header.category' => [
                                    'type' => 'toggle',
                                    'label' => 'categorie',
                                    'highlight' => 1,
                                    'options' => [
                                        'redactie' => 'redactie',
                                        'artikelen' => 'artikelen',
                                        'boeken' => 'boeken'
                                    ]
                                ],
                                'header.custom.coverImage' => [
                                    'type' => 'file',
                                    'label' => 'plaatje op het item',
                                    'destination' => 'self@',
                                    'multiple' => false,
                                    'accept' => [
                                        0 => 'image/*'
                                    ]
                                ],
                                'header.custom.shape' => [
                                    'type' => 'toggle',
                                    'label' => 'vorm van plaatje',
                                    'options' => [
                                        'rectangle' => 'breed',
                                        'standing' => 'staand',
                                        'pinned' => 'Vastzetten aan top',
                                        'pinnedRectangle' => 'Breed en vast aan top'
                                    ]
                                ],
                                'header.custom.tags' => [
                                    'type' => 'array',
                                    'value_only' => true,
                                    'label' => 'tags'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
