<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class IssetToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class IssetToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'isset', $lineNumber = null)
    {
        parent::__construct(T_ISSET, $value, $lineNumber);
    }
}
