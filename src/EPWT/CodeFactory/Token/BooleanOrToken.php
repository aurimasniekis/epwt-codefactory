<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class BooleanOrToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class BooleanOrToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '||', $lineNumber = null)
    {
        parent::__construct(T_BOOLEAN_OR, $value, $lineNumber);
    }
}
