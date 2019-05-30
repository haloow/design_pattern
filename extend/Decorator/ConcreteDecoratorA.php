<?php

namespace Decorator;

/**
 * 
 */
class ConcreteDecoratorA extends Decorator
{
	private $city = "Music Center";
	
	public function operation()
	{
		parent::operation();
        printf("我在".$this->city);
        printf("</br>");
	}
}