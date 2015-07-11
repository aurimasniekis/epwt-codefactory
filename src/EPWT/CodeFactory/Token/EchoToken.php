<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class EchoToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class EchoToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'echo', $lineNumber = null)
    {
        parent::__construct(T_ECHO, $value, $lineNumber);
    }
}
