<?php

return array(
	'table' => 'oauth_identities',
	'providers' => array(
		'facebook' => array(
			'id' => '12345678',
			'secret' => 'y0ur53cr374ppk3y',
			'redirect' => URL::to('your/facebook/redirect'),
			'scope' => array(),
		),
        'google' => array(
            'id' => '12345678',
            'secret' => 'y0ur53cr374ppk3y',
            'redirect' => URL::to('google/login'),
            'scope' => array(),
        ),
		'github' => array(
			'id' => '12345678',
			'secret' => 'y0ur53cr374ppk3y',
			'redirect' => URL::to('your/github/redirect'),
			'scope' => array(),
		),
		'linkedin' => array(
			'id' => '12345678',
			'secret' => 'y0ur53cr374ppk3y',
			'redirect' => URL::to('your/linkedin/redirect'),
			'scope' => array(),
		),
	)
);
