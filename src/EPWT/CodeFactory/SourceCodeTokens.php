<?php

namespace EPWT\CodeFactory;

/**
 * Class SourceCodeTokens
 * @package EPWT\CodeFactory
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class SourceCodeTokens implements \SeekableIterator, \Countable
{
    /**
     * @var Token\[]
     */
    protected $tokens;

    /**
     * @var int
     */
    protected $position;

    public function __construct($tokens = [])
    {
        $this->tokens = $tokens;
    }

    /**
     * @inheritDoc
     */
    public function count()
    {
        return count($this->tokens);
    }

    /**
     * @inheritDoc
     */
    public function current()
    {
        return $this->tokens[$this->position];
    }

    /**
     * @inheritDoc
     */
    public function next()
    {
        ++$this->position;
    }

    /**
     * @inheritDoc
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * @inheritDoc
     */
    public function valid()
    {
        return array_key_exists($this->position, $this->tokens);
    }

    /**
     * @inheritDoc
     */
    public function rewind()
    {
        $this->position = 0;
    }

    /**
     * @inheritDoc
     */
    public function seek($position)
    {
        if (!isset($this->tokens[$position])) {
            throw new \OutOfBoundsException("invalid seek position ($position)");
        }

        $this->position = $position;
    }

    /**
     * @return SourceCodeTokens
     */
    public function duplicate()
    {
        $new = clone $this;
        $new->seek($this->key());

        return $new;
    }
}
