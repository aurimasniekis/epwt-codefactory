<?php

namespace EPWT\CodeFactory;

/**
 * Class CustomTokens
 * @package EPWT\CodeFactory
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CustomTokens
{
    const T_LEFT_SQUARE_BRACKET = 10001;
    const T_RIGHT_SQUARE_BRACKET = 10002;
    const T_EQUALS_SIGN = 10003;
    const T_SEMICOLON = 10004;
    const T_LEFT_PARENTHESIS = 10005;
    const T_RIGHT_PARENTHESIS = 10006;
    const T_RIGHT_CURLY_BRACKET = 10007;
    const T_LEFT_CURLY_BRACKET = 10008;
    const T_COMMA = 10009;
    const T_HYPHEN = 10010;
    const T_EXCLAMATION_MARK = 10011;
    const T_DOT = 10012;
    const T_LESS_THAN = 10013;
    const T_GREATER_THAN = 10014;
    const T_DIE = 10015;

    public static $tokenNames = [
        10001 => 'T_LEFT_SQUARE_BRACKET',
        10002 => 'T_RIGHT_SQUARE_BRACKET',
        10003 => 'T_EQUALS_SIGN',
        10004 => 'T_SEMICOLON',
        10005 => 'T_LEFT_PARENTHESIS',
        10006 => 'T_RIGHT_PARENTHESIS',
        10007 => 'T_RIGHT_CURLY_BRACKET',
        10008 => 'T_LEFT_CURLY_BRACKET',
        10009 => 'T_COMMA',
        10010 => 'T_HYPHEN',
        10011 => 'T_EXCLAMATION_MARK',
        10012 => 'T_DOT',
        10013 => 'T_LESS_THAN',
        10014 => 'T_GREATER_THAN',
        10015 => 'T_DIE',
    ];

    /**
     * @param int $tokenId
     *
     * @return string
     */
    public static function tokenName($tokenId)
    {
        $tokenName = token_name($tokenId);

        if ('UNKNOWN' === $tokenName) {
            if (array_key_exists($tokenId, self::$tokenNames)) {
                return self::$tokenNames[$tokenId];
            }
        }

        return $tokenName;
    }
}
