<?php

namespace Cowsay\Cows;

use Cowsay\AbstractCow;
use Cowsay\CowInterface;

class Bong extends AbstractCow implements CowInterface
{
    public function getCow(): string
    {
        return <<<COW
         \
          \
            ^__^ 
    _______/($this->eyes)
/\/(       /(__)
   | W----|| |~|
   ||     || |~|  ~~
             |~|  ~
             |_| o
             |#|/
            _+#+_
COW;
    }
}
