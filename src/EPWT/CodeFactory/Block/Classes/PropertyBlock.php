<?php

namespace EPWT\CodeFactory\Block\Classes;

use EPWT\CodeFactory\Block\BaseBlock;
use EPWT\CodeFactory\Token\ConstantEncapsedStringToken;
use EPWT\CodeFactory\Token\EqualsSignToken;
use EPWT\CodeFactory\Token\SemicolonToken;
use EPWT\CodeFactory\Token\Token;
use EPWT\CodeFactory\Token\VariableToken;
use EPWT\CodeFactory\Token\WhitespaceToken;

/**
 * Class PropertyBlock
 * @package EPWT\CodeFactory\Block\Classes
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class PropertyBlock extends BaseBlock
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
     * @var Token
     */
    protected $type;

    public function __construct($name, $value = null)
    {
        $this->name = '$' . $name;
        $this->value = $value;
    }

    public function generate()
    {
        $tokens = [];

        if ($this->type) {
            $tokens[] = $this->type;
            $tokens[] = new WhitespaceToken();
        }

        $tokens[] = new VariableToken($this->name);

        if ($this->value) {
            $tokens[] = new WhitespaceToken();
            $tokens[] = new EqualsSignToken();
            $tokens[] = new WhitespaceToken();
            $tokens[] = $this->generateValue();
        }

        $tokens[] = new SemicolonToken();

        return $tokens;
    }

    protected function generateValue()
    {
        return new ConstantEncapsedStringToken($this->value);
    }
}
