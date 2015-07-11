<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class ThrowToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class ThrowToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'throw', $lineNumber = null)
    {
        parent::__construct(T_THROW, $value, $lineNumber);
    }
}
