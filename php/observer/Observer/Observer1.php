<?php

namespace Observer\Observer;

class Observer1 implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
        echo "RECEIVING NOTIFICATION ON OBSERVER 1" . PHP_EOL;
        print_r($subject);
    }
}