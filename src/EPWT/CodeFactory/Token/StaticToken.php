<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class StaticToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class StaticToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'static', $lineNumber = null)
    {
        parent::__construct(T_STATIC, $value, $lineNumber);
    }
}
