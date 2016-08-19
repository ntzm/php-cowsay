<?php

namespace Cowsay\Cows;

use Cowsay\AbstractCow;
use Cowsay\CowInterface;

class LukeKoala extends AbstractCow implements CowInterface
{
    public function getCow(): string
    {
        return <<<COW
  \
   \          .
       ___   //
     {~._.~}//
      ( Y )K/
     ()~*~()
     (_)-(_)
     Luke
     Sywalker
     koala
COW;
    }
}
