<?php

namespace Cowsay\Cows;

use Cowsay\AbstractCow;
use Cowsay\CowInterface;

class Moose extends AbstractCow implements CowInterface
{
    public function getCow(): string
    {
        return <<<COW
  \
   \   \_\_    _/_/
    \      \__/
           ($this->eyes)\_______
           (__)\       )\/\
            $this->tongue ||----w |
               ||     ||
COW;
    }
}
