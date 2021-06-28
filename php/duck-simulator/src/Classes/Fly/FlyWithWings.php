<?php 

namespace App\Classes\Fly;

use App\Behavior\FlyBehavior;

final class FlyWithWings implements FlyBehavior {

	public function fly() {
		echo "I can fly";
	}
}