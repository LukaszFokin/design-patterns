<?php

namespace App\Classes;

use App\Classes\Duck;

final class MallardDuck extends Duck {

	public function display(): void {
		echo "Im a MallarDuck" . PHP_EOL;
	}
}