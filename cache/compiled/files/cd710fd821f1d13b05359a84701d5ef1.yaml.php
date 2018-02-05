<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:\\wamp64\\www\\school\\jaar3\\redactieadmiraal\\grav\\user\\plugins\\seo/blueprints/seo.yaml',
    'modified' => 1511355892,
    'data' => [
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'content' => [
                                    'id' => 'content',
                                    'ordering@' => 'header.mykeyword'
                                ],
                                'header.title' => [
                                    'id' => 'mytitle'
                                ],
                                'snippetoutput' => [
                                    'type' => 'display',
                                    'id' => 'output',
                                    'ordering@' => 3,
                                    'style' => 'vertical',
                                    'content' => ''
                                ],
                                'pagemedia' => [
                                    'ordering@' => 0
                                ],
                                'snippetyoast' => [
                                    'type' => 'display',
                                    'style' => 'vertical',
                                    'id' => 'snippet',
                                    'classes' => 'hidden',
                                    'content' => ''
                                ]
                            ]
                        ],
                        'seo' => [
                            'type' => 'tab',
                            'title' => 'SEO',
                            'fields' => [
                                'tabs1' => [
                                    'type' => 'tabs',
                                    'active' => 1,
                                    'title' => 'Settings',
                                    'fields' => [
                                        'googlefields' => [
                                            'type' => 'tab',
                                            'title' => 'Google',
                                            'fields' => [
                                                'header.googletitle' => [
                                                    'type' => 'text',
                                                    'label' => 'PLUGINS.SEO.GOOGLE_TITLE',
                                                    'id' => 'text'
                                                ],
                                                'header.googledesc' => [
                                                    'type' => 'textarea',
                                                    'label' => 'PLUGINS.SEO.GOOGLE_DESC',
                                                    'id' => 'desc'
                                                ],
                                                'header.googlepreview' => [
                                                    'type' => 'google',
                                                    'label' => 'PLUGINS.SEO.GOOGLE_PREVIEWDESC'
                                                ]
                                            ]
                                        ],
                                        'twitterfields' => [
                                            'type' => 'tab',
                                            'title' => 'Twitter',
                                            'fields' => [
                                                'columns' => [
                                                    'type' => 'columns',
                                                    'fields' => [
                                                        'column1' => [
                                                            'type' => 'column',
                                                            'fields' => [
                                                                'header.twitterenable' => [
                                                                    'type' => 'toggle',
                                                                    'label' => 'PLUGIN_ADMIN.ENABLED',
                                                                    'default' => 1,
                                                                    'highlight' => 1,
                                                                    'help' => 'PLUGIN_ADMIN.ENABLED_HELP',
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.twittercardoptions' => [
                                                                    'type' => 'select',
                                                                    'label' => 'PLUGINS.SEO.TWITTER_CARD_SELECT',
                                                                    'options' => [
                                                                        'summary' => 'PLUGINS.SEO.TWITTER_CARD_SUMMARY',
                                                                        'summary_large_image' => 'PLUGINS.SEO.TWITTER_CARD_SUMLARGIMG'
                                                                    ]
                                                                ],
                                                                'header.titlecardtwitter' => [
                                                                    'type' => 'section',
                                                                    'title' => 'PLUGINS.SEO.TWITTER_CARD_SECTITLE',
                                                                    'underline' => true
                                                                ],
                                                                'header.twittershareimg' => [
                                                                    'type' => 'mediapicker',
                                                                    'placeholder' => 'Click here to open the mediapicker',
                                                                    'label' => 'PLUGINS.SEO.TWITTER_SHAREIMG',
                                                                    'preview_images' => true,
                                                                    'id' => 'twittimgselect'
                                                                ],
                                                                'header.twittertitle' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGINS.SEO.TWITTER_TITLE',
                                                                    'id' => 'twittertitle'
                                                                ],
                                                                'header.twitterdescription' => [
                                                                    'type' => 'textarea',
                                                                    'style' => 'vertical',
                                                                    'label' => 'PLUGINS.SEO.TWITTER_DESCRIPTION',
                                                                    'id' => 'twitterdescription'
                                                                ]
                                                            ]
                                                        ],
                                                        'column2' => [
                                                            'type' => 'column',
                                                            'fields' => [
                                                                'header.twitterlabel' => [
                                                                    'type' => 'section',
                                                                    'text' => 'PLUGINS.SEO.TWITTER_PREVIEWDESC'
                                                                ],
                                                                'header.twitterpreview' => [
                                                                    'type' => 'twitter'
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'jsonfield' => [
                                            'type' => 'tab',
                                            'title' => 'Microdata',
                                            'fields' => [
                                                'header.article_condition' => [
                                                    'type' => 'conditional',
                                                    'condition' => 'config.plugins.seo.article ? \'true\' : \'false\'',
                                                    'fields' => [
                                                        'header.articlefieldset' => [
                                                            'type' => 'fieldset',
                                                            'title' => 'Article Microdata',
                                                            'collapsed' => true,
                                                            'collapsible' => true,
                                                            'fields' => [
                                                                'header.articleenabled' => [
                                                                    'type' => 'toggle',
                                                                    'highlight' => 1,
                                                                    'label' => 'PLUGINS.SEO.ADD_ARTICLE_MICRODATA',
                                                                    'default' => 0,
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.article.headline' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGINS.SEO.HEADLINE',
                                                                    'disabled' => false,
                                                                    'placeholder' => 'PLUGINS.SEO.ARTICLE_PLACEHOLDER',
                                                                    'field_classes' => 'togglearticle'
                                                                ],
                                                                'header.article.description' => [
                                                                    'type' => 'textarea',
                                                                    'label' => 'PLUGINS.SEO.ARTICLE_DESCRIPTION',
                                                                    'placeholder' => 'PLUGINS.SEO.ARTICLE_DESC_PLACEHOLDER',
                                                                    'disabled' => false,
                                                                    'field_classes' => 'togglearticle'
                                                                ],
                                                                'header.article.image_url' => [
                                                                    'type' => 'mediapicker',
                                                                    'label' => 'PLUGINS.SEO.ARTICLE_IMAGE',
                                                                    'placeholder' => 'Please click to open the mediapicker',
                                                                    'disabled' => false,
                                                                    'field_classes' => 'togglearticle'
                                                                ],
                                                                'header.article.author' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGINS.SEO.ARTICLE_AUTHOR',
                                                                    'disabled' => false,
                                                                    'field_classes' => 'togglearticle'
                                                                ],
                                                                'header.article.publisher_logo_url' => [
                                                                    'type' => 'mediapicker',
                                                                    'label' => 'PLUGINS.SEO.PUBLISHER_LOGO',
                                                                    'placeholder' => 'Please click to open the mediapicker',
                                                                    'disabled' => false,
                                                                    'field_classes' => 'togglearticle'
                                                                ],
                                                                'header.article.publisher_name' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGINS.SEO.PUBLISHER_NAME',
                                                                    'disabled' => false,
                                                                    'field_classes' => 'togglearticle'
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ],
                                                'header.musicevent_condition' => [
                                                    'type' => 'conditional',
                                                    'condition' => 'config.plugins.seo.musicevent ? \'true\' : \'false\'',
                                                    'fields' => [
                                                        'header.musiceventfieldset' => [
                                                            'type' => 'fieldset',
                                                            'title' => 'Music Event',
                                                            'collapsed' => true,
                                                            'collapsible' => true,
                                                            'fields' => [
                                                                'header.musiceventenabled' => [
                                                                    'type' => 'toggle',
                                                                    'label' => 'PLUGINS.SEO.ENABLEMUSICEVENT',
                                                                    'highlight' => 1,
                                                                    'default' => 0,
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.musicevents' => [
                                                                    'type' => 'list',
                                                                    'label' => 'PLUGINS.SEO.ADDMUSICEVENT',
                                                                    'style' => 'vertical',
                                                                    'fields' => [
                                                                        '.musicevent_location_name' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGINS.SEO.LOCATION_NAME',
                                                                            'field_classes' => 'togglemusicevent',
                                                                            'placeholder' => 'Chicago Symphony Center'
                                                                        ],
                                                                        '.musicevent_location_address' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGINS.SEO.LOCATION_ADDRESS',
                                                                            'field_classes' => 'togglemusicevent',
                                                                            'placeholder' => '220 S. Michigan Ave, Chicago, Illinois, USA'
                                                                        ],
                                                                        '.musicevent_location_url' => [
                                                                            'type' => 'text',
                                                                            'placeholder' => 'PLUGINS.SEO.LOCATION_URL_PLACEHOLDER',
                                                                            'label' => 'PLUGINS.SEO.LOCATION_URL'
                                                                        ],
                                                                        '.musicevent_name' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGINS.SEO.MUSICEVENT_NAME',
                                                                            'field_classes' => 'togglemusicevent'
                                                                        ],
                                                                        '.musicevent_image' => [
                                                                            'type' => 'mediapicker',
                                                                            'placeholder' => 'Please click to open the mediapicker',
                                                                            'label' => 'PLUGINS.SEO.MUSICEVENT_IMAGE',
                                                                            'field_classes' => 'togglemusicevent'
                                                                        ],
                                                                        '.musicevent_description' => [
                                                                            'type' => 'textarea',
                                                                            'label' => 'PLUGINS.SEO.MUSICEVENT_DESCRIPTION',
                                                                            'field_classes' => 'togglemusicevent'
                                                                        ],
                                                                        '.musicevent_url' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGINS.SEO.MUSICEVENT_URL',
                                                                            'placeholder' => 'PLUGINS.SEO.MUSICEVENT_URL_PLACEHOLDER'
                                                                        ],
                                                                        '.musicevent_offers_availability' => [
                                                                            'type' => 'select',
                                                                            'options' => [
                                                                                'http://schema.org/PreOrder' => 'PLUGINS.SEO.PREORDER',
                                                                                'http://schema.org/OutOfStock' => 'PLUGINS.SEO.OUTOFSTOCK',
                                                                                'http://schema.org/PreSale' => 'PLUGINS.SEO.PRESALE',
                                                                                'http://schema.org/InStock' => 'PLUGINS.SEO.INSTOCK',
                                                                                'http://schema.org/Discontinued' => 'PLUGINS.SEO.DISCONTINUED',
                                                                                'http://schema.org/InStoreOnly' => 'PLUGINS.SEO.INSTOREONLY',
                                                                                'http://schema.org/SoldOut' => 'PLUGINS.SEO.SOLDOUT',
                                                                                'http://schema.org/OnlineOnly' => 'PLUGINS.SEO.ONLINEONLY'
                                                                            ],
                                                                            'field_classes' => 'togglemusicevent'
                                                                        ],
                                                                        '.musicevent_offers_url' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGINS.SEO.TICKET_URL',
                                                                            'field_classes' => 'togglemusicevent'
                                                                        ],
                                                                        '.musicevent_offers_validFrom' => [
                                                                            'type' => 'datetime',
                                                                            'label' => 'PLUGINS.SEO.VALID_FROM'
                                                                        ],
                                                                        '.musicevent_offers_price' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGINS.SEO.MUSICEVENT_PRICE',
                                                                            'field_classes' => 'togglemusicevent'
                                                                        ],
                                                                        '.musicevent_offers_priceCurrency' => [
                                                                            'type' => 'select',
                                                                            'label' => 'PLUGINS.SEO.PRICE_CURRENCY',
                                                                            'field_classes' => 'togglemusicevent',
                                                                            'options' => [
                                                                                'GBP' => 'GBP',
                                                                                'EUR' => 'EUR',
                                                                                'USD' => 'USD'
                                                                            ]
                                                                        ],
                                                                        '.musicevent_performer' => [
                                                                            'type' => 'list',
                                                                            'label' => 'PLUGINS.SEO.ADD_PERFORMER',
                                                                            'field_classes' => 'togglemusicevent',
                                                                            'fields' => [
                                                                                '.performer_type' => [
                                                                                    'type' => 'select',
                                                                                    'label' => 'PLUGINS.SEO.PERFORMER_TYPE',
                                                                                    'options' => [
                                                                                        'MusicGroup' => 'PLUGINS.SEO.MUSICGROUP',
                                                                                        'Person' => 'PLUGINS.SEO.PERSON'
                                                                                    ],
                                                                                    'field_classes' => 'togglemusicevent'
                                                                                ],
                                                                                '.name' => [
                                                                                    'type' => 'text',
                                                                                    'label' => 'PLUGINS.SEO.PERFORMER_NAME'
                                                                                ],
                                                                                '.sameAs' => [
                                                                                    'type' => 'text',
                                                                                    'label' => 'Same as',
                                                                                    'placeholder' => 'http://en.wikipedia.org/wiki/Artist_Page'
                                                                                ]
                                                                            ]
                                                                        ],
                                                                        '.musicevent_startdate' => [
                                                                            'type' => 'datetime',
                                                                            'label' => 'PLUGINS.SEO.MUSICEVENT_DATE_START',
                                                                            'field_classes' => 'togglemusicevent'
                                                                        ],
                                                                        '.musicevent_enddate' => [
                                                                            'type' => 'datetime',
                                                                            'label' => 'PLUGINS.SEO.MUSICEVENT_DATE_END',
                                                                            'field_classes' => 'togglemusicevent'
                                                                        ],
                                                                        '.musicevent_workPerformed' => [
                                                                            'type' => 'list',
                                                                            'label' => 'PLUGINS.SEO.WORK_PERFORMED',
                                                                            'field_classes' => 'togglemusicevent',
                                                                            'fields' => [
                                                                                '.name' => [
                                                                                    'type' => 'text',
                                                                                    'label' => 'PLUGINS.SEO.WORK_PERFORMED_NAME'
                                                                                ],
                                                                                '.sameAs' => [
                                                                                    'type' => 'text',
                                                                                    'label' => 'Wikipedia or official URL',
                                                                                    'field_classes' => 'togglemusicevent'
                                                                                ]
                                                                            ]
                                                                        ]
                                                                    ]
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ],
                                                'header.conditional_orga' => [
                                                    'type' => 'conditional',
                                                    'condition' => 'config.plugins.seo.organization ? \'true\' : \'false\'',
                                                    'fields' => [
                                                        'header.orgafieldset' => [
                                                            'type' => 'fieldset',
                                                            'title' => 'Organization Microdata',
                                                            'collapsed' => true,
                                                            'collapsible' => true,
                                                            'fields' => [
                                                                'header.orgaenabled' => [
                                                                    'type' => 'toggle',
                                                                    'highlight' => 1,
                                                                    'label' => 'PLUGINS.SEO.ENABLEEVENT',
                                                                    'default' => 0,
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.orga.name' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Organization name'
                                                                ],
                                                                'header.orga.streetaddress' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Organization street'
                                                                ],
                                                                'header.orga.city' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Organization City'
                                                                ],
                                                                'header.orga.state' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Organization State'
                                                                ],
                                                                'header.orga.zipcode' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Organization Zip Code'
                                                                ],
                                                                'header.orga.phone' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Organization Phone'
                                                                ],
                                                                'header.orga.logo' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Url to Organization Logo',
                                                                    'placeholder' => 'include http://'
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ],
                                                'header.conditional_new_entries' => [
                                                    'type' => 'conditional',
                                                    'condition' => 'config.plugins.seo.event ? \'true\' : \'false\'',
                                                    'fields' => [
                                                        'header.eventfieldset' => [
                                                            'type' => 'fieldset',
                                                            'title' => 'Event Microdata',
                                                            'collapsed' => true,
                                                            'collapsible' => true,
                                                            'fields' => [
                                                                'header.eventenabled' => [
                                                                    'type' => 'toggle',
                                                                    'highlight' => 1,
                                                                    'label' => 'PLUGINS.SEO.ENABLEORGA',
                                                                    'default' => 0,
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.addevent' => [
                                                                    'type' => 'list',
                                                                    'style' => 'vertical',
                                                                    'label' => 'PLUGINS.SEO.ADD_EVENT',
                                                                    'fields' => [
                                                                        '.event_name' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGINS.SEO.EVENT_NAME',
                                                                            'field_classes' => 'toggleevent'
                                                                        ],
                                                                        '.event_description' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGINS.SEO.EVENT_DESCRIPTION',
                                                                            'field_classes' => 'toggleevent'
                                                                        ],
                                                                        '.event_startDate' => [
                                                                            'type' => 'datetime',
                                                                            'label' => 'PLUGINS.SEO.EVENT_START_DATE',
                                                                            'field_classes' => 'toggleevent'
                                                                        ],
                                                                        '.event_endDate' => [
                                                                            'type' => 'datetime',
                                                                            'label' => 'PLUGINS.SEO.EVENT_END_DATE',
                                                                            'field_classes' => 'toggleevent'
                                                                        ],
                                                                        '.event_offers_price' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGINS.SEO.EVENT_OFFER_PRICE',
                                                                            'field_classes' => 'toggleevent'
                                                                        ],
                                                                        '.event_offers_currency' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGINS.SEO.EVENT_OFFER_CURRENCY',
                                                                            'placeholder' => 'USD'
                                                                        ],
                                                                        '.event_offers_url' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGINS.SEO.EVENT_OFFER_URL'
                                                                        ],
                                                                        '.event_location_name' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGINS.SEO.EVENT_LOCATION_NAME',
                                                                            'field_classes' => 'toggleevent'
                                                                        ],
                                                                        '.event_location_address_streetAddress' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGINS.SEO.EVENT_LOCATION_STREET_ADDRESS',
                                                                            'field_classes' => 'toggleevent'
                                                                        ],
                                                                        '.event_location_address_addressLocality' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGINS.SEO.EVENT_LOCATION_ADDRESS_LOCALITY',
                                                                            'field_classes' => 'toggleevent'
                                                                        ],
                                                                        '.event_locssation_address_addressRegion' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGINS.SEO.EVENT_LOCATION_ADDRESS_REGION',
                                                                            'field_classes' => 'toggleevent'
                                                                        ]
                                                                    ]
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ],
                                                'header.person_condition' => [
                                                    'type' => 'conditional',
                                                    'condition' => 'config.plugins.seo.person ? \'true\' : \'false\'',
                                                    'fields' => [
                                                        'header.personfieldset' => [
                                                            'type' => 'fieldset',
                                                            'title' => 'Person Microdata',
                                                            'collapsed' => true,
                                                            'collapsible' => true,
                                                            'fields' => [
                                                                'header.personenabled' => [
                                                                    'type' => 'toggle',
                                                                    'highlight' => 1,
                                                                    'label' => 'PLUGINS.SEO.ENABLE_PERSON',
                                                                    'default' => 0,
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.addperson' => [
                                                                    'type' => 'list',
                                                                    'style' => 'vertical',
                                                                    'label' => 'PLUGINS.SEO.ADD_PERSON',
                                                                    'fields' => [
                                                                        '.person_name' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGINS.SEO.PERSON_NAME',
                                                                            'field_classes' => 'toggleperson'
                                                                        ],
                                                                        '.person_jobTitle' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGINS.SEO.PERSON_JOB_TITLE',
                                                                            'field_classes' => 'toggleperson'
                                                                        ],
                                                                        '.person_address_addressLocality' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGINS.SEO.PERSON_ADDRESS_LOCALITY',
                                                                            'field_classes' => 'toggleperson'
                                                                        ],
                                                                        '.person_address_addressRegion' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGINS.SEO.PERSON_ADDRESS_REGION',
                                                                            'field_classes' => 'toggleperson'
                                                                        ]
                                                                    ]
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ],
                                                'header.musicalbum_condition' => [
                                                    'type' => 'conditional',
                                                    'condition' => 'config.plugins.seo.musicalbum ? \'true\' : \'false\'',
                                                    'fields' => [
                                                        'header.musicalbumfieldset' => [
                                                            'type' => 'fieldset',
                                                            'title' => 'Music Album Microdata',
                                                            'collapsed' => true,
                                                            'collapsible' => true,
                                                            'fields' => [
                                                                'header.musicalbumenabled' => [
                                                                    'type' => 'toggle',
                                                                    'highlight' => 1,
                                                                    'label' => 'PLUGINS.SEO.ADD_MUSICALBUM',
                                                                    'default' => 0,
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.musicalbums' => [
                                                                    'type' => 'list',
                                                                    'style' => 'vertical',
                                                                    'label' => 'PLUGINS.SEO.ADD_MUSICALBUM',
                                                                    'fields' => [
                                                                        '.musicalbum_name' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGINS.SEO.MUSICALBUM_NAME',
                                                                            'field_classes' => 'togglemusicalbum'
                                                                        ],
                                                                        '.musicalbum_byArtist_name' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGINS.SEO.MUSICALBUM_NAMEOFBAND',
                                                                            'field_classes' => 'togglemusicalbum'
                                                                        ],
                                                                        '.musicalbum_image' => [
                                                                            'type' => 'mediapicker',
                                                                            'placeholder' => 'Please click to open the mediapicker',
                                                                            'label' => 'PLUGINS.SEO.MUSICALBUM_IMAGE',
                                                                            'field_classes' => 'togglemusicalbum'
                                                                        ],
                                                                        '.musicalbum_url' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGINS.SEO.MUSICALBUM_URL',
                                                                            'field_classes' => 'togglemusicalbum'
                                                                        ],
                                                                        '.musicalbum_genre' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGINS.SEO.MUSICALBUM_GENRE',
                                                                            'field_classes' => 'togglemusicalbum'
                                                                        ],
                                                                        '.musicalbum_numtracks' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGINS.SEO.MUSICALBUM_TRACK_NUMBER',
                                                                            'field_classes' => 'togglemusicalbum'
                                                                        ],
                                                                        '.musicalbum_track' => [
                                                                            'type' => 'list',
                                                                            'field_classes' => 'togglemusicalbum',
                                                                            'label' => 'PLUGINS.SEO.MUSICALBUM_ADD_TRACK',
                                                                            'default' => NULL,
                                                                            'fields' => [
                                                                                '.position' => [
                                                                                    'type' => 'text',
                                                                                    'label' => 'PLUGINS.SEO.MUSICALBUM_TRACK_POSITION'
                                                                                ],
                                                                                '.name' => [
                                                                                    'type' => 'text',
                                                                                    'label' => 'PLUGINS.SEO.MUSICALBUM_TRACK_NAME'
                                                                                ],
                                                                                '.url' => [
                                                                                    'type' => 'text',
                                                                                    'label' => 'PLUGINS.SEO.MUSICALBUM_TRACK_URL'
                                                                                ],
                                                                                '.duration' => [
                                                                                    'type' => 'text',
                                                                                    'label' => 'PLUGINS.SEO.MUSICALBUM_TRACK_DURATION'
                                                                                ]
                                                                            ]
                                                                        ]
                                                                    ]
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ],
                                                'header.restaurant_condition' => [
                                                    'type' => 'conditional',
                                                    'condition' => 'config.plugins.seo.restaurant ? \'true\' : \'false\'',
                                                    'fields' => [
                                                        'header.restaurantfieldset' => [
                                                            'type' => 'fieldset',
                                                            'title' => 'Restaurant Microdata',
                                                            'collapsed' => true,
                                                            'collapsible' => true,
                                                            'fields' => [
                                                                'header.restaurantenabled' => [
                                                                    'type' => 'toggle',
                                                                    'highlight' => 1,
                                                                    'label' => 'PLUGINS.SEO.ADD_RESTAURANT',
                                                                    'default' => 0,
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.restaurant.name' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGINS.SEO.RESTAURANT_NAME',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ],
                                                                'header.restaurant.acceptsReservations' => [
                                                                    'type' => 'select',
                                                                    'label' => 'PLUGINS.SEO.RESTAURANT_ACCEPT_RESERVATION',
                                                                    'field_classes' => 'togglerestaurant',
                                                                    'options' => [
                                                                        'yes' => 'yes',
                                                                        'no' => 'no'
                                                                    ]
                                                                ],
                                                                'header.restaurant.menu' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGINS.SEO.RESTAURANT_MENU_URL',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ],
                                                                'header.restaurant.image' => [
                                                                    'type' => 'mediapicker',
                                                                    'placeholder' => 'Please click to open the mediapicker',
                                                                    'label' => 'PLUGINS.SEO.RESTAURANT_IMAGE',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ],
                                                                'header.restaurant.servesCuisine' => [
                                                                    'placeholder' => 'seafood',
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGINS.SEO.RESTAURANT_CUISINE',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ],
                                                                'header.restaurant.priceRange' => [
                                                                    'type' => 'select',
                                                                    'label' => 'PLUGINS.SEO.RESTAURANT_PRICE_RANGE',
                                                                    'field_classes' => 'togglerestaurant',
                                                                    'options' => [
                                                                        '$' => '$',
                                                                        '$$' => '$$',
                                                                        '$$$' => '$$$'
                                                                    ]
                                                                ],
                                                                'header.restaurant.address_streetAddress' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGINS.SEO.RESTAURANT_STREET',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ],
                                                                'header.restaurant.address_addressLocality' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGINS.SEO.RESTAURANT_LOCALITY',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ],
                                                                'header.restaurant.address_addressRegion' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGINS.SEO.RESTAURANT_REGION',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ],
                                                                'header.restaurant.address_postalCode' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGINS.SEO.RESTAURANT_POSTAL_CODE',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ],
                                                                'header.restaurant.telephone' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGINS.SEO.RESTAURANT_TELEPHONE',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'facebookfields' => [
                                            'type' => 'tab',
                                            'title' => 'Facebook',
                                            'fields' => [
                                                'columns2' => [
                                                    'type' => 'columns',
                                                    'fields' => [
                                                        'column3' => [
                                                            'type' => 'column',
                                                            'fields' => [
                                                                'header.facebookenable' => [
                                                                    'type' => 'toggle',
                                                                    'label' => 'PLUGINS.SEO.FACEBOOK_ENABLE',
                                                                    'id' => 'facebookenable',
                                                                    'default' => 1,
                                                                    'highlight' => 1,
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.facebooktitle' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGINS.SEO.FACEBOOK_TITLE',
                                                                    'id' => 'facebooktitle',
                                                                    'placeholder' => 'Will default to page title if left empty'
                                                                ],
                                                                'header.facebookdesc' => [
                                                                    'type' => 'textarea',
                                                                    'style' => 'vertical',
                                                                    'label' => 'PLUGINS.SEO.FACEBOOK_DESC',
                                                                    'id' => 'facebookdesc',
                                                                    'placeholder' => 'Max 300 character'
                                                                ],
                                                                'header.facebookauthor' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Link to article author facebook page',
                                                                    'placeholder' => 'http://facebook.com/yourname'
                                                                ],
                                                                'header.facebookimg' => [
                                                                    'type' => 'mediapicker',
                                                                    'placeholder' => 'Please click to open the mediapicker',
                                                                    'id' => 'fbimgselect',
                                                                    'label' => 'PLUGINS.SEO.FACEBOOK_SHAREIMG'
                                                                ]
                                                            ]
                                                        ],
                                                        'column4' => [
                                                            'type' => 'column',
                                                            'fields' => [
                                                                'header.facebookpreview' => [
                                                                    'type' => 'facebook',
                                                                    'label' => 'PLUGINS.SEO.FACEBOOK_PREVIEWDESC'
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
