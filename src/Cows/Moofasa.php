<?php

namespace Cowsay\Cows;

use Cowsay\AbstractCow;
use Cowsay\CowInterface;

class Moofasa extends AbstractCow implements CowInterface
{
    public function getCow(): string
    {
        return <<<COW
       \    ____
        \  /    \
          | ^__^ |
          | ($this->eyes) |______
          | (__) |      )\/\
           \____/|----w |
                ||     ||

                Moofasa
COW;
    }
}
