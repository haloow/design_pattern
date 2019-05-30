<?php

namespace app\design\kernel\Decorator;

class ConcreteComponent extends Component
{
	public function operation()
	{
        printf("具体被装饰的对象");
        printf("</br>");
	}
}