<?php

namespace App\Classes\Quack;

use App\Behavior\QuackBehavior;

final class Sneak implements QuackBehavior {

	public function quack() {
		echo "Im sneak class with quack behavior" . PHP_EOL;
	}
}