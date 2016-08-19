<?php

namespace Cowsay\Cows;

use Cowsay\AbstractCow;
use Cowsay\CowInterface;

class Bunny extends AbstractCow implements CowInterface
{
    public function getCow(): string
    {
        return <<<COW
  \
   \   \
        \ /\
        ( )
      .( o ).
COW;
    }
}
