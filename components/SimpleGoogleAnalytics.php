<?php

    namespace Martin\SimpleGoogleAnalytics\Components;

    use Cms\Classes\ComponentBase;
    use Cms\Classes\Page;
    use Lang;

    class SimpleGoogleAnalytics extends ComponentBase {

        public function componentDetails() {
            return [
                'name'        => 'martin.simplegoogleanalytics::lang.components.simplegoogleanalytics.name',
                'description' => 'martin.simplegoogleanalytics::lang.components.simplegoogleanalytics.description'
            ];
        }

        public function defineProperties() {
            $properties = [
                'tracking_id' => [
                    'title'             => Lang::get('martin.simplegoogleanalytics::lang.components.simplegoogleanalytics.track_id'),
                    'description'       => Lang::get('martin.simplegoogleanalytics::lang.components.simplegoogleanalytics.track_id_desc'),
                    'default'           => '',
                    'type'              => 'string',
                    'required'          => true,
                    'placeholder'       => 'UA-XXXXXXX-Y',
                    'showExternalParam' => false
                ],
                'domain' => [
                    'title'             => Lang::get('martin.simplegoogleanalytics::lang.components.simplegoogleanalytics.domain'),
                    'description'       => Lang::get('martin.simplegoogleanalytics::lang.components.simplegoogleanalytics.domain_desc'),
                    'default'           => 'auto',
                    'type'              => 'string',
                    'required'          => true,
                    'showExternalParam' => false
                ]
            ];
            return $properties;
        }

    }

?>