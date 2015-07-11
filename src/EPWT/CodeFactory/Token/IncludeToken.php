<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class IncludeToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class IncludeToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'include', $lineNumber = null)
    {
        parent::__construct(T_INCLUDE, $value, $lineNumber);
    }
}
