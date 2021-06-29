<?php

namespace App\Classes;

use App\Behavior\FlyBehavior;
use App\Behavior\QuackBehavior;


abstract class Duck {

	/** @var FlyBehavior **/
	private $flyBehavior;
	/** @var QuackBehavior **/	
	private $quackBehavior;

	public function getFlyBehavior(): FlyBehavior {
		return $this->flyBehavior;
	}

	public function setFlyBehavior(FlyBehavior $flyBehavior): void {
		$this->flyBehavior = $flyBehavior;
	}

	public function getQuackBehavior(): QuackBehavior {
		return $this->quackBehavior;
	}

	public function setQuackBehavior(QuackBehavior $quackBehavior): void {
		$this->quackBehavior = $quackBehavior;
	}

	public function fly(): void {
		$this->flyBehavior->fly();
	}

	public function quack(): void {
		$this->quackBehavior->quack();
	}

	abstract public function display(): void;
}
