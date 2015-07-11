<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class EndDeclareToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class EndDeclareToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'enddeclare', $lineNumber = null)
    {
        parent::__construct(T_ENDDECLARE, $value, $lineNumber);
    }
}
