<?php

namespace EPWT\CodeFactory\Walkers;

use EPWT\CodeFactory\SourceCodeTokens;

/**
 * Class VariableWalker
 * @package EPWT\CodeFactory\Walkers
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class VariableWalker
{
    /**
     * @var SourceCodeTokens
     */
    protected $tokens;

    public function __construct($tokens)
    {
        $this->tokens = $tokens;
    }

    public function walk()
    {
        $finished = false;

        while(false === $finished) {

        }
    }
}
