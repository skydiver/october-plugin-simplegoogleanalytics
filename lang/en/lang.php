<?php

    return [

        'plugin' => [
            'name'              => 'Simple Google Analytics',
            'description'       => 'Adds Google Analytics tracking code to your pages'
        ],

        'components' => [
            'simplegoogleanalytics' => [
                'name'          => 'Google Analytics tracking code',
                'description'   => 'Add Google Analytics tracking code to your page',
                'track_id'      => 'Tracking ID',
                'track_id_desc' => 'Google Analytics Tracking ID',
                'domain'        => 'Set custom domain',
                'domain_desc'   => 'Set domain to track'
            ]
        ]

    ];

?>