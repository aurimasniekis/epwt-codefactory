<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class DirToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class DirToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '__DIR__', $lineNumber = null)
    {
        parent::__construct(T_DIR, $value, $lineNumber);
    }
}
