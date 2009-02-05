<?php
/**
 * KingKludge Coding Standard
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer_Yahoo
 * @author    Andy 'Bob' Brockhurst <andy@brockhurst.com>
 * @version   $Id: $
 */

if (class_exists('PHP_CodeSniffer_Standards_CodingStandard', true) === false) {
    throw new PHP_CodeSniffer_Exception('Class PHP_CodeSniffer_Standards_CodingStandard not found');
}

/**
 * KingKludge Coding Standard.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer_Yahoo
 * @author    Andy 'Bob' Brockhurst <andy@brockhurst.com>
 */
class PHP_CodeSniffer_Standards_KingKludge_KingKludgeCodingStandard
extends PHP_CodeSniffer_Standards_CodingStandard
{
    /**
     * Return a list of external sniffs to include with this standard.
     *
     * The standard can include the whole standards or individual Sniffs.
     *
     * @return array
     */
    public function getIncludedSniffs()
    {
        return array();

    }//end getIncludedSniffs()

    /**
     * Return a list of external sniffs to exclude from this standard.
     *
     * Including a whole standards above, individual Sniffs can then be removed here.
     *
     * @return array
     */
    public function getExcludedSniffs()
    {
        return array();

    }//end getExcludedSniffs()
}
?>