<?php

/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Gdata
 * @subpackage Health
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: ProfileFeed.php 24779 2012-05-08 19:13:59Z adamlundrigan $
 */

/**
 * @see Zend_Exception
 */
require_once 'Zend/Exception.php';

/**
 * @see Zend_Gdata_Feed
 */
require_once 'Zend/Gdata/Feed.php';

/**
 * Represents a Google Health user's Profile Feed
 *
 * @link http://code.google.com/apis/health/
 *
 * @category   Zend
 * @package    Zend_Gdata
 * @subpackage Health
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Gdata_Health_ProfileFeed extends Zend_Gdata_Feed
{
    /**
     * Creates a Health Profile feed, representing a user's Health profile
     *
     * @param DOMElement $element (optional) DOMElement from which this
     *          object should be constructed.
     */
    public function __construct($element = null)
    {
        throw new Zend_Exception(
            'Google Health API has been discontinued by Google and was removed'
            . ' from Zend Framework in 1.12.0.  For more information see: '
            . 'http://googleblog.blogspot.ca/2011/06/update-on-google-health-and-google.html'
        );
    }
}
