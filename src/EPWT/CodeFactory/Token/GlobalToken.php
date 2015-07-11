<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class GlobalToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class GlobalToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'global', $lineNumber = null)
    {
        parent::__construct(T_GLOBAL, $value, $lineNumber);
    }
}
