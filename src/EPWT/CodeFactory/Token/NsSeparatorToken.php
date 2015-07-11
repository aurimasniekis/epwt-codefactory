<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class NsSeparatorToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class NsSeparatorToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '\\', $lineNumber = null)
    {
        parent::__construct(T_NS_SEPARATOR, $value, $lineNumber);
    }
}
