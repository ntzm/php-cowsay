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
    ____  
   /# /_\_
  |  |/o\o\
  |  \\_/_/
 / |_   |  
|  ||\_ ~| 
|  ||| \/  
|  |||_    
 \//  |    
  ||  |    
  ||_  \   
  \_|  o|  
  /\___/   
 /  ||||__ 
    (___)_)
COW;
    }
}
