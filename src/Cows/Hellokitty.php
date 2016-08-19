<?php

namespace Cowsay\Cows;

use Cowsay\AbstractCow;
use Cowsay\CowInterface;

class Hellokitty extends AbstractCow implements CowInterface
{
    public function getCow(): string
    {
        return <<<COW
  \
   \
      /\_)o<
     |      \
     | O . O|
      \_____/
COW;
    }
}
