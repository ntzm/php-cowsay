<?php

namespace Cowsay\Cows;

use Cowsay\AbstractCow;
use Cowsay\CowInterface;

class FlamingSheep extends AbstractCow implements CowInterface
{
    public function getCow(): string
    {
        return <<<COW
  \            .    .     .
   \      .  . .     `  , 
    \    .; .  : .' :  :  : . 
     \   i..`: i` i.i.,i  i . 
      \   `,--.|i |i|ii|ii|i: 
           U{$this->eyes}U\.'@@@@@@`.||'
           \__/(@@@@@@@@@@)'
                (@@@@@@@@)
                `YY~~~~YY'
                 ||    ||
COW;
    }
}
