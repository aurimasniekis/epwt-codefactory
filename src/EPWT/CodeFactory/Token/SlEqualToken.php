<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class SlEqualToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class SlEqualToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '<<=', $lineNumber = null)
    {
        parent::__construct(T_SL_EQUAL, $value, $lineNumber);
    }
}
