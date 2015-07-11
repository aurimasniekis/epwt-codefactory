<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class ClassCToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class ClassCToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '__CLASS__', $lineNumber = null)
    {
        parent::__construct(T_CLASS_C, $value, $lineNumber);
    }
}
