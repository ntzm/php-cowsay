<?php

namespace Cowsay\Cows;

use Cowsay\AbstractCow;
use Cowsay\CowInterface;

class Tux extends AbstractCow implements CowInterface
{
    public function getCow(): string
    {
        return <<<COW
   \
    \
        .--.
       |o_o |
       |:_/ |
      //   \ \
     (|     | )
    /'\_   _/`\
    \___)=(___/

COW;
    }
}
