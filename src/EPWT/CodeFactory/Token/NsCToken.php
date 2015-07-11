<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class NsCToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class NsCToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '__NAMESPACE__', $lineNumber = null)
    {
        parent::__construct(T_NS_C, $value, $lineNumber);
    }
}
