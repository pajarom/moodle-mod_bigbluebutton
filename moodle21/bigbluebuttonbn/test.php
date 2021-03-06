<?php
/**
 * Check to see if the meeting is active. 
 * 
 * Authors:
 * 	Fred Dixon  (ffdixon [at] blindsidenetworks [dt] com)
 *      Jesus Federico  (jesus [at] blindsidenetworks [dt] com)    
 * 
 * @package   mod_bigbluebuttonbn
 * @copyright 2010-2011 Blindside Networks 
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v2 or later
 */

require_once( "../../config.php" );
require_once("lib.php");

$name = $_GET['name'];

$salt = trim($CFG->BigBlueButtonBNSecuritySalt);
$url = trim(trim($CFG->BigBlueButtonBNServerURL),'/').'/';

echo BigBlueButtonBN::getMeetingXML( $name, $url, $salt );
?>
