<?php

namespace App\Classes\Quack;

use App\Behavior\QuackBehavior;

final class Quack implements QuackBehavior {

	public function quack() {
		echo "Im quack class with quack behavior" . PHP_EOL;
	}
}