<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class PrivateToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class PrivateToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'private', $lineNumber = null)
    {
        parent::__construct(T_PRIVATE, $value, $lineNumber);
    }
}
