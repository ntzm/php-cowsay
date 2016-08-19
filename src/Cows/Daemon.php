<?php

namespace Cowsay\Cows;

use Cowsay\AbstractCow;
use Cowsay\CowInterface;

class Daemon extends AbstractCow implements CowInterface
{
    public function getCow(): string
    {
        return <<<COW
   \         ,        ,
    \       /(        )`
     \      \ \___   / |
            /- _  `-/  '
           (/\/ \ \   /\
           / /   | `    \
           O O   ) /    |
           `-^--'`<     '
          (_.)  _  )   /
           `.___/`    /
             `-----' /
<----.     __ / __   \
<----|====O)))==) \) /====
<----'    `--' `.__,' \
             |        |
              \       /
        ______( (_  / \______
      ,'  ,-----'   |        \
      `--{__________)        \/
COW;
    }
}
