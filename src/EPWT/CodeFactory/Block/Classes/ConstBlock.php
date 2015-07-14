<?php

namespace EPWT\CodeFactory\Block\Classes;

use EPWT\CodeFactory\Block\BaseBlock;
use EPWT\CodeFactory\Token\ConstantEncapsedStringToken;
use EPWT\CodeFactory\Token\ConstToken;
use EPWT\CodeFactory\Token\EqualsSignToken;
use EPWT\CodeFactory\Token\NewLineToken;
use EPWT\CodeFactory\Token\SemicolonToken;
use EPWT\CodeFactory\Token\StringToken;
use EPWT\CodeFactory\Token\WhitespaceToken;

/**
 * Class ConstBlock
 * @package EPWT\CodeFactory\Block\Classes
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class ConstBlock extends BaseBlock
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var mixed
     */
    protected $value;

    /**
     * @var bool
     */
    protected $upperCase;

    public function __construct($name, $value, $upperCase = true)
    {
        $this->name = $name;
        $this->value = $value;
        $this->upperCase = $upperCase;
    }

    public function generate()
    {
        $tokens = [];

        $tokens[] = new ConstToken();
        $tokens[] = new WhitespaceToken();

        $name = $this->name;
        if ($this->upperCase) {
            $name = strtoupper($name);
        }

        $tokens[] = new StringToken($name);
        $tokens[] = new WhitespaceToken();
        $tokens[] = new EqualsSignToken();
        $tokens[] = new WhitespaceToken();
        $tokens[] = $this->generateValue();
        $tokens[] = new SemicolonToken();

        return $tokens;
    }

    protected function generateValue()
    {
        return new ConstantEncapsedStringToken($this->value);
    }

}
