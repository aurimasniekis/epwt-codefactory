<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class DoubleCastToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class DoubleCastToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '(double)', $lineNumber = null)
    {
        parent::__construct(T_DOUBLE_CAST, $value, $lineNumber);
    }
}
