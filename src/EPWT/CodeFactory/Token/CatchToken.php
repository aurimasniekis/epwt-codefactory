<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class CatchToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CatchToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'catch', $lineNumber = null)
    {
        parent::__construct(T_CATCH, $value, $lineNumber);
    }
}
