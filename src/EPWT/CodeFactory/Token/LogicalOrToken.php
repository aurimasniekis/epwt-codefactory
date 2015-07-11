<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class LogicalOrToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class LogicalOrToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'or', $lineNumber = null)
    {
        parent::__construct(T_LOGICAL_OR, $value, $lineNumber);
    }
}
