<?php

namespace EPWT\CodeFactory;

/**
 * Class Tokenizer
 * @package EPWT\CodeFactory
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class Tokenizer
{
    /**
     * @var int
     */
    protected $currentLine;

    public function __construct()
    {
        $this->currentLine = 0;
    }

    public function tokenGetAll($code)
    {
        $this->currentLine = 0;
        $phpTokens = token_get_all($code);
        $tokens = [];

        foreach ($phpTokens as $token) {
            if (is_array($token)) {
                $this->currentLine = $token[2];

                if (T_WHITESPACE === $token[0]) {
                    $tokens = array_merge($tokens, $this->parseWhitespaceToken($token));
                    continue;
                }

                if (T_EXIT === $token[0] && false !== strpos($token[1], 'die')) {
                    $token[0] = CustomTokens::T_DIE;
                }

                $tokens[] = $token;
            } else {
                $tokens[] = $this->parseCharacterToToken($token);
            }
        }

        return $tokens;
    }

    /**
     * @param array $tokens
     *
     * @return array
     */
    public function mapTokens(array $tokens)
    {
        $oopTokens = [];
        $tokenMap = TokensMap::$map;

        foreach ($tokens as $token) {
            $oopTokens[] = new $tokenMap[$token[0]]($token[1], $token[2]);
        }

        return $oopTokens;
    }

    protected function parseCharacterToToken($character)
    {
        if (1 === strlen($character)) {
            switch($character) {
                case '[':
                    return [CustomTokens::T_LEFT_SQUARE_BRACKET, '[', $this->currentLine];
                case ']':
                    return [CustomTokens::T_RIGHT_SQUARE_BRACKET, ']', $this->currentLine];
                case '(':
                    return [CustomTokens::T_LEFT_PARENTHESIS, '(', $this->currentLine];
                case ')':
                    return [CustomTokens::T_RIGHT_PARENTHESIS, ')', $this->currentLine];
                case '{':
                    return [CustomTokens::T_LEFT_CURLY_BRACKET, '{', $this->currentLine];
                case '}':
                    return [CustomTokens::T_RIGHT_CURLY_BRACKET, '}', $this->currentLine];
                case '<':
                    return [CustomTokens::T_LESS_THAN, '<', $this->currentLine];
                case '>':
                    return [CustomTokens::T_GREATER_THAN, '>', $this->currentLine];
                case '=':
                    return [CustomTokens::T_EQUALS_SIGN, '=', $this->currentLine];
                case ';':
                    return [CustomTokens::T_SEMICOLON, ';', $this->currentLine];
                case ',':
                    return [CustomTokens::T_COMMA, ',', $this->currentLine];
                case '-':
                    return [CustomTokens::T_HYPHEN, '-', $this->currentLine];
                case '!':
                    return [CustomTokens::T_EXCLAMATION_MARK, '!', $this->currentLine];
                case '.':
                    return [CustomTokens::T_DOT, '.', $this->currentLine];
                default:
                    throw new \Exception('Found undocumented character "' . $character . '"');
            }
        } else {
            throw new \Exception('Found undocumented character "' . $character . '"');
        }
    }

    protected function parseWhitespaceToken($token)
    {
        $tokens = [];

        $splitData = preg_split('/(\r\n|\n|\t)/', $token[1], -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);

        foreach ($splitData as $data) {
            if ($data === "\r\n" || $data === "\n") {
                $tokens[] = [CustomTokens::T_NEW_LINE, $data, $this->currentLine++];
            } else if ($data === "\t") {
                $tokens[] = [CustomTokens::T_TAB, $data, $this->currentLine];
            } else {
                $tokens[] = [$token[0], $data, $this->currentLine];
            }
        }

        return $tokens;
    }
}
