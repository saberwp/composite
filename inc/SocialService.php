<?php

namespace Composite;

class SocialService {

	public $key;
	public $title;
	public $domain;
	public $icons;
	public $url;

	public function __construct( $key, $title, $domain, $icons ) {
		$this->key = $key;
		$this->title = $title;
		$this->domain = $domain;
		$this->icons = $icons;
	}

	public function setUrl( $url ) {
		$this->url = $url;
	}
}
