<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class AsToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class AsToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'as', $lineNumber = null)
    {
        parent::__construct(T_AS, $value, $lineNumber);
    }
}
