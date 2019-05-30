<?php

namespace Decorator;

/**
 * 
 */
class ConcreteDecoratorB extends Decorator
{
	public function operation()
	{
		parent::operation();
		$this->addAction();
	}

	private function addAction()
	{
        printf("我在唱歌");
        printf("</br>");
	}	
}