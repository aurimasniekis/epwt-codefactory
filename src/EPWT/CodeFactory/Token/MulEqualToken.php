<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class MulEqualToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class MulEqualToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '*=', $lineNumber = null)
    {
        parent::__construct(T_MUL_EQUAL, $value, $lineNumber);
    }
}
