<?php

return [
    'default_crops' => [
        'page_cover' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 16 / 9,
                ]
            ]
        ]
    ],
    // Add this configuration for the media library disk
    'media_library' => [
        'disk' => 'public', // Ensure this matches your filesystem configuration
        'endpoint_type' => 'local', // For local development
    ],
    'block_editor' => [
        'use_twill_blocks' => [],
        'crops' => [ 
            'highlight' => [
                'desktop' => [
                    [
                        'name' => 'desktop',
                        'ratio' => 16 / 9,
                    ],
                ],
                'mobile' => [
                    [
                        'name' => 'mobile',
                        'ratio' => 1,
                    ],
                ],
            ],
        ],
    ]

];
