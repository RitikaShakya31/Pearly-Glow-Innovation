<?php
defined('BASEPATH') or exit('No direct script access allowed');

$active_group = 'local';
$query_builder = TRUE;

$db['local'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'pearly_glow_innovation',
	'dbdriver' => 'mysqli',
	'dbprefix' => 'tbl_',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);


$db['server'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'techkinds_pearly_glow',
	'password' => 'a?=6y@8=~O;h',
	'database' => 'techkinds_pearly_glow',
	'dbdriver' => 'mysqli',
	'dbprefix' => 'tbl_',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'a1715hhz_pearly_glow',
	'password' => 'y[F&0,app,hK',
	'database' => 'a1715hhz_pearly_glow',
	'dbdriver' => 'mysqli',
	'dbprefix' => 'tbl_',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
