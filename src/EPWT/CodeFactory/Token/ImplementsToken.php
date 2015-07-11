<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class ImplementsToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class ImplementsToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'implements', $lineNumber = null)
    {
        parent::__construct(T_IMPLEMENTS, $value, $lineNumber);
    }
}
