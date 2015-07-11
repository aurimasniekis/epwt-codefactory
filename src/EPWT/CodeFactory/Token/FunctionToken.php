<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class FunctionToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class FunctionToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'function', $lineNumber = null)
    {
        parent::__construct(T_FUNCTION, $value, $lineNumber);
    }
}
