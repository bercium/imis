<?php 
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://"; 
$domain = $_SERVER['HTTP_HOST']; 
return array( 
        'sl' => array( 'lang-iso' => 'sl', 'lang-name' => 'SLO', 'lang-home-url' => $protocol.$domain.'/', 'lang-regex' => '' ), 
        'en' => array( 'lang-iso' => 'en', 'lang-name' => 'ENG', 'lang-home-url' => $protocol.$domain.'/en/entry', 'lang-regex' => '~/en~' ), 
); ?> 
<?php return array(
	'sl' => array( 'lang-iso' => 'sl', 'lang-name' => 'SLO', 'lang-home-url' => 'http://127.0.0.1/razvoj/othr/imis/', 'lang-regex' => '' ),
	'en' => array( 'lang-iso' => 'en', 'lang-name' => 'ENG', 'lang-home-url' => 'http://127.0.0.1/razvoj/othr/imis/en/entry', 'lang-regex' => '~/en~' ),
); ?>