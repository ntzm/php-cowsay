<?php

namespace Cowsay\Cows;

use Cowsay\AbstractCow;
use Cowsay\CowInterface;

class Cower extends AbstractCow implements CowInterface
{
    public function getCow(): string
    {
        return <<<COW
     \
      \
        ,__, |    | 
        (oo)\|    |___
        (__)\|    |   )\_
             |    |_w |  \
             |    |  ||   *

             Cower....
COW;
    }
}
