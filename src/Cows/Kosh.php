<?php

namespace Cowsay\Cows;

use Cowsay\AbstractCow;
use Cowsay\CowInterface;

class Kosh extends AbstractCow implements CowInterface
{
    public function getCow(): string
    {
        return <<<COW
    \
     \
      \
  ___       _____     ___
 /   \     /    /|   /   \
|     |   /    / |  |     |
|     |  /____/  |  |     |
|     |  |    |  |  |     |
|     |  | {} | /   |     |
|     |  |____|/    |     |
|     |    |==|     |     |
|      \___________/      |
|                         |
|                         |
COW;
    }
}
