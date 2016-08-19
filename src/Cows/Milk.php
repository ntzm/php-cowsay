<?php

namespace Cowsay\Cows;

use Cowsay\AbstractCow;
use Cowsay\CowInterface;

class Milk extends AbstractCow implements CowInterface
{
    public function getCow(): string
    {
        return <<<COW
 \     ____________
  \    |__________|
      /           /\
     /           /  \
    /___________/___/|
    |          |     |
    |  ==\ /== |     |
    |   O   O  | \ \ |
    |     <    |  \ \|
   /|          |   \ \
  / |  \_____/ |   / /
 / /|          |  / /|
/||\|          | /||\/
    -------------|
        | |    | |
       <__/    \__>
COW;
    }
}
