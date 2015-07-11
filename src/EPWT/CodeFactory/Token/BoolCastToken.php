<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class BoolCastToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class BoolCastToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '(bool)', $lineNumber = null)
    {
        parent::__construct(T_BOOL_CAST, $value, $lineNumber);
    }
}
