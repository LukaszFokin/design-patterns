<?php

namespace Observer\Observer;

use SplSubject;

class Observer2 implements \SplObserver
{

    public function update(SplSubject $subject)
    {
        echo "RECEIVING NOTIFICATION ON OBSERVER 2" . PHP_EOL;
        print_r($subject);
    }
}