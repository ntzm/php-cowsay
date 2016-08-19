<?php

namespace Cowsay\Cows;

use Cowsay\AbstractCow;
use Cowsay\CowInterface;

class DefaultCow extends AbstractCow implements CowInterface
{
    public function getCow(): string
    {
        return <<<COW
        \   ^__^
         \  ($this->eyes)\_______
            (__)\       )\/\
             $this->tongue ||----w |
                ||     ||
COW;
    }
}
