<?php

namespace Composite;

class SocialAccounts {
    public $services = array();

    public function init() {
        $this->services = $this->getServices();
        add_filter('acf/load_field/name=service', function ($field) {
            $choices = array();
            foreach ($this->services as $service) {
                $choices[$service->key] = $service->title;
            }
            $field['choices'] = $choices;
            return $field;
        });
    }

    public function getServices() {
        return array(
            new SocialService("facebook", "Facebook", "facebook.com", array("/assets/icons/social/facebook.svg")),
            new SocialService("twitter", "Twitter", "twitter.com", array("/assets/icons/social/twitter.svg")),
            new SocialService("instagram", "Instagram", "instagram.com", array("/assets/icons/social/instagram.svg")),
            new SocialService("linkedin", "LinkedIn", "linkedin.com", array("/assets/icons/social/linkedin.svg")),
            new SocialService("pinterest", "Pinterest", "pinterest.com", array("/assets/icons/social/pinterest.svg")),
            new SocialService("youtube", "YouTube", "youtube.com", array("/assets/icons/social/youtube.svg")),
        );
    }
}
