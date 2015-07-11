<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class InstanceofToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class InstanceofToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'instanceof', $lineNumber = null)
    {
        parent::__construct(T_INSTANCEOF, $value, $lineNumber);
    }
}
