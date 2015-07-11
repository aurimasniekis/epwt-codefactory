<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class NamespaceToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class NamespaceToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'namespace', $lineNumber = null)
    {
        parent::__construct(T_NAMESPACE, $value, $lineNumber);
    }
}
