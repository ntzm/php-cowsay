<?php

namespace Cowsay\Cows;

use Cowsay\AbstractCow;
use Cowsay\CowInterface;

class ElephantInSnake extends AbstractCow implements CowInterface
{
    public function getCow(): string
    {
        return <<<COW
   \
    \              ....
           ........    .
          .            .
         .             .
.........              .......
..............................

Elephant inside ASCII snake
COW;
    }
}
