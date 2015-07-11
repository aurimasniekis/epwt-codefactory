<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class ObjectCastToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class ObjectCastToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '(object)', $lineNumber = null)
    {
        parent::__construct(T_OBJECT_CAST, $value, $lineNumber);
    }
}
