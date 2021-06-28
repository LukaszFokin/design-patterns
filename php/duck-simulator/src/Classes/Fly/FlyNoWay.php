<?php 

namespace App\Classes\Fly;

use App\Behavior\FlyBehavior;

final class FlyNoWay implements FlyBehavior {

	public function fly() {
		echo "I cant fly" . PHP_EOL;
	}
}