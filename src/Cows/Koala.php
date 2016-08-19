<?php

namespace Cowsay\Cows;

use Cowsay\AbstractCow;
use Cowsay\CowInterface;

class Koala extends AbstractCow implements CowInterface
{
    public function getCow(): string
    {
        return <<<COW
  \
   \
       ___
     {~._.~}
      ( Y )
     ()~*~()
     (_)-(_)
COW;
    }
}
