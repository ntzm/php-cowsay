<?php

namespace Cowsay\Cows;

use Cowsay\AbstractCow;
use Cowsay\CowInterface;

class DragonAndCow extends AbstractCow implements CowInterface
{
    public function getCow(): string
    {
        return <<<COW
                       \                    ^    /^
                        \                  / \  // \
                         \   |\___/|      /   \//  .\
                          \  /O  O  \__  /    //  | \ \           *----*
                            /     /  \/_/    //   |  \  \          \   |
                            @___@`    \/_   //    |   \   \         \/\ \
                           0/0/|       \/_ //     |    \    \         \  \
                       0/0/0/0/|        \///      |     \     \       |  |
                    0/0/0/0/0/_|_ /   (  //       |      \     _\     |  /
                 0/0/0/0/0/0/`/,_ _ _/  ) ; -.    |    _ _\.-~       /   /
                             ,-}        _      *-.|.-~-.           .~    ~
            \     \__/        `/\      /                 ~-. _ .-~      /
             \____($this->eyes)           *.   }            {                   /
             (    (--)          .----~-.\        \-`                 .~
             //__\\\\  \__ Ack!   ///.----..<        \             _ -~
            //    \\\\               ///-._ _ _ _ _ _ _{^ - - - - ~
COW;
    }
}
