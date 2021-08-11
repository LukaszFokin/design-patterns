<?php

namespace Observer\Subject;

use SplObserver;

class Subject implements \SplSubject
{
    private \SplObjectStorage $observers;
    private int $random;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        /** @var SplObserver $observer */
        foreach ($this->observers as $observer) {
            echo "NOTIFYING OBSERVERS" . PHP_EOL;
            $observer->update($this);
        }
    }

    public function doSomething()
    {
        echo "GENERATING NEW RANDOM" . PHP_EOL;
        $this->random = rand(0, 1000);
        $this->notify();
    }

    public function getRandom(): int
    {
        return $this->random;
    }
}