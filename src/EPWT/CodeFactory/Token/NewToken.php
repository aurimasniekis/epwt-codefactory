<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class NewToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class NewToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'new', $lineNumber = null)
    {
        parent::__construct(T_NEW, $value, $lineNumber);
    }
}
