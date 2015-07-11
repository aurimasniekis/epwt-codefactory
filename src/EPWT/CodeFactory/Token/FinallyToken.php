<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class FinallyToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class FinallyToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'finally', $lineNumber = null)
    {
        parent::__construct(T_FINALLY, $value, $lineNumber);
    }
}
