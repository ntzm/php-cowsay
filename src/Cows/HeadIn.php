<?php

namespace Cowsay\Cows;

use Cowsay\AbstractCow;
use Cowsay\CowInterface;

class HeadIn extends AbstractCow implements CowInterface
{
    public function getCow(): string
    {
        return <<<COW
    \
     \
    ^__^         /
    ($this->eyes)\_______/  _________
    (__)\       )=(  ____|_ \_____
     $this->tongue ||----w |  \ \     \_____ |
        ||     ||   ||           ||
COW;
    }
}
