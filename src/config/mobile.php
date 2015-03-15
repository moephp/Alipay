<?php
return array(

	// 安全检验码，以数字和字母组成的32位字符。
	'key' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',

	'sign_type' => '',

	// 商户私钥。
	'private_key_path' => __DIR__ . '/key/private_key.pem',

	// 阿里公钥。
	'public_key_path' => __DIR__ . '/key/public_key.pem',

	// 异步通知连接。
	'notify_url' => route('xxx')
);