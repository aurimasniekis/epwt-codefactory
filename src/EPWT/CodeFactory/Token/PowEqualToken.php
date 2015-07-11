<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class PowEqualToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class PowEqualToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '**=', $lineNumber = null)
    {
        parent::__construct(T_POW_EQUAL, $value, $lineNumber);
    }
}
