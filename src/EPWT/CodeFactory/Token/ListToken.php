<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class ListToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class ListToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'list', $lineNumber = null)
    {
        parent::__construct(T_LIST, $value, $lineNumber);
    }
}
