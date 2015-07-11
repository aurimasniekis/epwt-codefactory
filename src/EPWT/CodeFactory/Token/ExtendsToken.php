<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class ExtendsToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class ExtendsToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'extends', $lineNumber = null)
    {
        parent::__construct(T_EXTENDS, $value, $lineNumber);
    }
}
