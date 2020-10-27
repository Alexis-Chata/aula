<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '127.0.0.1';
$CFG->dbname    = 'u518334857_aula';
$CFG->dbuser    = 'u518334857_aula';
$CFG->dbpass    = 'xrU9fBra';
$CFG->prefix    = 'mdlmf_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '0',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'http://aula.bricenovirtual.com';
$CFG->dataroot  = '/home/u518334857/domains/bricenovirtual.com/public_html/aula/moodledata/';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
