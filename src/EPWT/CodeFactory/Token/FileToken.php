<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class FileToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class FileToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = '__FILE__', $lineNumber = null)
    {
        parent::__construct(T_FILE, $value, $lineNumber);
    }
}
