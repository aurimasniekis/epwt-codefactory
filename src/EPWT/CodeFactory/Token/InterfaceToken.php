<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class InterfaceToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class InterfaceToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'interface', $lineNumber = null)
    {
        parent::__construct(T_INTERFACE, $value, $lineNumber);
    }
}
