<?php

namespace Composite;

// Intermediary object used to load data into UI components.

class ComponentData {

	public $content = array();
	public $styles = array();

	public function setContent( $key, $value ) {
		$this->content[$key] = $value;
	}

	public function setStyles( $key, $value ) {
		$this->styles[$key] = $value;
	}

}
