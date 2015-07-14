<?php

namespace EPWT\CodeFactory\Block;

use EPWT\CodeFactory\Block\Classes\ConstBlock;
use EPWT\CodeFactory\Block\Classes\PropertyBlock;
use EPWT\CodeFactory\Block\Namespaces\ClassBlock as NamespacesClassBlock;
use EPWT\CodeFactory\Token\AbstractToken;
use EPWT\CodeFactory\Token\ClassToken;
use EPWT\CodeFactory\Token\CommaToken;
use EPWT\CodeFactory\Token\ExtendsToken;
use EPWT\CodeFactory\Token\FinalToken;
use EPWT\CodeFactory\Token\ImplementsToken;
use EPWT\CodeFactory\Token\LeftCurlyBracketToken;
use EPWT\CodeFactory\Token\NewLineToken;
use EPWT\CodeFactory\Token\RightCurlyBracketToken;
use EPWT\CodeFactory\Token\StringToken;
use EPWT\CodeFactory\Token\WhitespaceToken;

/**
 * Class ClassBlock
 * @package EPWT\CodeFactory\Block
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class ClassBlock extends BaseBlock
{
    /**
     * @var bool
     */
    protected $final;

    /**
     * @var bool
     */
    protected $abstract;

    /**
     * @var string
     */
    protected $className;

    /**
     * @var NamespacesClassBlock
     */
    protected $extends;

    /**
     * @var NamespacesClassBlock[]
     */
    protected $implements;

    /**
     * @var ConstBlock[]
     */
    protected $constants;

    /**
     * @var PropertyBlock
     */
    protected $properties;

    public function __construct($className, $extends = null, $implements = [])
    {
        $this->className = $className;
        $this->extends = $extends;
        $this->implements = $implements;

        $this->final = false;
        $this->abstract = false;

        $this->constants = [];
        $this->properties = [];
    }

    /**
     * @return Classes\ConstBlock[]
     */
    public function getConstants()
    {
        return $this->constants;
    }

    /**
     * @param Classes\ConstBlock[] $constants
     *
     * @return $this
     */
    public function setConstants($constants)
    {
        $this->constants = $constants;

        return $this;
    }

    /**
     * @param string|ConstBlock $name
     * @param string|null $value
     */
    public function addConstants($name, $value = null)
    {
        if (is_string($name)) {
            $name = new ConstBlock($name, $value);
        }

        $this->constants[] = $name;
    }

    /**
     * @return PropertyBlock
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * @param PropertyBlock $properties
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->properties = $properties;

        return $this;
    }

    /**
     * @param PropertyBlock $property
     *
     * @return $this
     */
    public function addProperty($property)
    {
        $this->properties[] = $property;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isFinal()
    {
        return $this->final;
    }

    /**
     * @param boolean $final
     *
     * @return $this
     * @throws \Exception
     */
    public function setFinal($final)
    {
        if ($this->isAbstract()) {
            throw new \Exception('Cant set class final when its abstract');
        }

        $this->final = $final;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isAbstract()
    {
        return $this->abstract;
    }

    /**
     * @param boolean $abstract
     *
     * @return $this
     * @throws \Exception
     */
    public function setAbstract($abstract)
    {
        if ($this->isAbstract()) {
            throw new \Exception('Cant set class abstract when its final');
        }

        $this->abstract = $abstract;

        return $this;
    }

    /**
     * @return string
     */
    public function getClassName()
    {
        return $this->className;
    }

    /**
     * @param string $className
     *
     * @return $this
     */
    public function setClassName($className)
    {
        $this->className = $className;

        return $this;
    }

    /**
     * @return NamespacesClassBlock
     */
    public function getExtends()
    {
        return $this->extends;
    }

    /**
     * @param NamespacesClassBlock $extends
     *
     * @return $this
     */
    public function setExtends($extends)
    {
        $this->extends = $extends;

        return $this;
    }

    /**
     * @return Namespaces\ClassBlock[]
     */
    public function getImplements()
    {
        return $this->implements;
    }

    /**
     * @param Namespaces\ClassBlock[] $implements
     *
     * @return $this
     */
    public function setImplements($implements)
    {
        $this->implements = $implements;

        return $this;
    }

    public function addImplements(NamespacesClassBlock $classBlock)
    {
        $this->implements[] = $classBlock;
    }


    public function generate()
    {
        $tokens = [];

        $tokens = array_merge(
            $tokens,
            $this->generateHeader()
        );

        $tokens[] = new NewLineToken();
        $tokens[] = new LeftCurlyBracketToken();
        $tokens[] = new NewLineToken();

        foreach ($this->generateBody() as $line) {
            $tokens = array_merge(
                $tokens,
                $line
            );

            $tokens[] = new NewLineToken();
        }

        $tokens[] = new RightCurlyBracketToken();
        $tokens[] = new NewLineToken();

        return $tokens;
    }

    public function generateHeader()
    {
        $tokens = [];

        if ($this->isAbstract()) {
            $tokens[] = new AbstractToken();
            $tokens[] = new WhitespaceToken();
        }

        if ($this->isFinal()) {
            $tokens[] = new FinalToken();
            $tokens[] = new WhitespaceToken();
        }

        $tokens[] = new ClassToken();
        $tokens[] = new WhitespaceToken();

        $tokens[] = new StringToken($this->className);

        $extends = $this->getExtends();
        if ($extends) {
            $tokens[] = new WhitespaceToken();
            $tokens[] = new ExtendsToken();
            $tokens[] = new WhitespaceToken();
            $tokens = array_merge(
                $tokens,
                $extends->generate()
            );
        }

        $implements = $this->getImplements();
        $totalImplements = count($implements);
        if ($totalImplements > 0) {
            $tokens[] = new WhitespaceToken();
            $tokens[] = new ImplementsToken();
            $tokens[] = new WhitespaceToken();

            $i = 1;
            foreach ($implements as $implement) {
                $tokens = array_merge(
                    $tokens,
                    $implement->generate()
                );

                if ($i < $totalImplements) {
                    $i++;
                    $tokens[] = new CommaToken();
                    $tokens[] = new WhitespaceToken();
                }
            }
        }

        return $tokens;
    }

    protected function generateBody()
    {
        $lines = [];

        $lines = array_merge(
            $lines,
            $this->generateConstants()
        );

        $lines = array_merge(
            $lines,
            $this->generateProperties()
        );

        return $lines;
    }

    protected function generateConstants()
    {
        $lines = [];

        foreach ($this->getConstants() as $constant) {
            $tokens = [
                new WhitespaceToken(),
                new WhitespaceToken(),
                new WhitespaceToken(),
                new WhitespaceToken()
            ];

            $lines[] = array_merge(
                $tokens,
                $constant->generate()
            );
        }

        if (count($lines) > 0) {
            $lines[] = [
            ];
        }

        return $lines;
    }

    protected function generateProperties()
    {
        $lines = [];

        foreach ($this->getProperties() as $property) {
            $tokens = [
                new WhitespaceToken(),
                new WhitespaceToken(),
                new WhitespaceToken(),
                new WhitespaceToken()
            ];

            $lines[] = array_merge(
                $tokens,
                $property->generate(),
                [new NewLineToken()]
            );
        }

        return $lines;
    }

}
