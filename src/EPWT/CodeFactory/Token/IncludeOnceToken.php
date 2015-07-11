<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class IncludeOnceToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class IncludeOnceToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'include_once', $lineNumber = null)
    {
        parent::__construct(T_INCLUDE_ONCE, $value, $lineNumber);
    }
}
