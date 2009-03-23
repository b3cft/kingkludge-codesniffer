<?php
/**
 * KingKludge_Sniffs_PHP_NoExtraneousWhiteSpaceSniff
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Andy Brockhurst <abrock@yahoo-inc.com>
 * @version   CVS: $Id: SuperfluousWhitespaceSniff.php,v 1.1 2008/06/06 10:03:07 abrock Exp $
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

/**
 * KingKludge_Sniffs_PHP_NoExtraneousWhiteSpaceSniff
 *
 * Checks that no whitespace proceeds the first content of the file, exists
 * after the last content of the file only.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Andy Brockhurst <abrock@yahoo-inc.com>
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class KingKludge_Sniffs_PHP_NoExtraneousWhiteSpaceSniff implements PHP_CodeSniffer_Sniff
{
    public function register()
    {
    	return array(
    		T_OPEN_TAG,
    		T_CLOSE_TAG,
    		);
    }

    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
    }
}