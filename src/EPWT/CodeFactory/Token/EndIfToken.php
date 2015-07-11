<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class EndIfToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class EndIfToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'endif', $lineNumber = null)
    {
        parent::__construct(T_ENDIF, $value, $lineNumber);
    }
}
