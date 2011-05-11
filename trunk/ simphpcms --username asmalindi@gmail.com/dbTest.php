<?php
/**
 * @author asmalindi
 * @copyright 2011
 */
// Get the PHP file containing the DbConnector class
require_once('DbConnector.php');

// Create an instance of DbConnector
$connector = new DbConnector();

// Use the query function of DbConnector to run a database query
$result = $connector->query('SELECT firstname FROM customers');

// Get the result
$row = $connector->fetchArray($result);

// Show it to the user
echo $row['firstname'];

?>