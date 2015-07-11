<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class InsteadofToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class InsteadofToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'insteadof', $lineNumber = null)
    {
        parent::__construct(T_INSTEADOF, $value, $lineNumber);
    }
}
