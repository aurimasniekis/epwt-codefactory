<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class LogicalAndToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class LogicalAndToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'and', $lineNumber = null)
    {
        parent::__construct(T_LOGICAL_AND, $value, $lineNumber);
    }
}
