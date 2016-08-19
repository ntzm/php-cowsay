<?php

namespace Cowsay\Cows;

use Cowsay\AbstractCow;
use Cowsay\CowInterface;

class BudFrogs extends AbstractCow implements CowInterface
{
    public function getCow(): string
    {
        return <<<COW
     \
      \
          oO)-.                       .-(Oo
         /__  _\                     /_  __\
         \  \(  |     ()~()         |  )/  /
          \__|\ |    (-___-)        | /|__/
          '  '--'    ==`-'==        '--'  '
COW;
    }
}
