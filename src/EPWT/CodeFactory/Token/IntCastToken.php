<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class IntCastToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class IntCastToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '(int)', $lineNumber = null)
    {
        parent::__construct(T_INT_CAST, $value, $lineNumber);
    }
}
