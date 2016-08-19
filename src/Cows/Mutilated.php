<?php

namespace Cowsay\Cows;

use Cowsay\AbstractCow;
use Cowsay\CowInterface;

class Mutilated extends AbstractCow implements CowInterface
{
    public function getCow(): string
    {
        return <<<COW
       \   \_______
 v__v   \  \   O   )
 ($this->eyes)      ||----w |
 (__)      ||     ||  \/\
  $this->tongue
COW;
    }
}
