<?php

namespace Decorator;

/**
 * 
 */
abstract class Decorator extends Component
{
	protected $component;

	public function setComponent(Component $component)
	{
		$this->component = $component;
	}

	public function operation()
	{
		if($this->component){
			$this->component->operation();
		}
	}
}