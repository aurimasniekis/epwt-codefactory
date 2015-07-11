<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class NumStringToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class NumStringToken extends Token
{
    /**
     * @param mixed $value
     * @param int|null $lineNumber
     */
    public function __construct($value = null, $lineNumber = null)
    {
        parent::__construct(T_NUM_STRING, $value, $lineNumber);
    }
}
