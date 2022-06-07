<?php 

$config['smtp'] = array(
	'protocol' => 'smtp',
	'smtp_host' => 'ssl://smtp.gmail.com',
	'smtp_timeout' => 30,
	'smtp_port' => 465,
	'smtp_user' => 'hikam.test.email@gmail.com',
	'smtp_pass' => 'info@hikam',
	'charset' => 'utf-8',
	'mailtype' => 'html',
	'newline' => '\r\n'
);

$config['mail'] = array(
	'newline' => '\r\n',
	'crlf' => '\r\n',
	'to' => 'hikam.test.email@gmail.com',
);