<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class ArrayToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class ArrayToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'array', $lineNumber = null)
    {
        parent::__construct(T_ARRAY, $value, $lineNumber);
    }
}
