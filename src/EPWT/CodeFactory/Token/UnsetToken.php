<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class UnsetToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class UnsetToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'unset', $lineNumber = null)
    {
        parent::__construct(T_UNSET, $value, $lineNumber);
    }
}
