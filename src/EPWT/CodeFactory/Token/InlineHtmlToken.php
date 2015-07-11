<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class InlineHtmlToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class InlineHtmlToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = null, $lineNumber = null)
    {
        parent::__construct(T_INLINE_HTML, $value, $lineNumber);
    }
}
