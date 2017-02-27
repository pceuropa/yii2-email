Email autoresponder
===================
This extension help send emails. In this version (1.0.1) only text messsage.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require pceuropa/yii2-email "*"
```

or add

```
"pceuropa/yii2-email": "*"
```

to the require section of your `composer.json` file.


Configuration
-------------

Yii2 config file:
```
'components' => [
'mailer' => [
			'class' => 'yii\swiftmailer\Mailer',
			'viewPath' => '@common/mail',    // basic Yii2: @app/mail
			'useFileTransport' => false,
			'transport' => [
				'class' => 'Swift_SmtpTransport',
				'host' => 'smtp.gmail.com',
				'username' => 'info@gmail.com',
				'password' => 'password',
				'port' => '587',		 // or 465
				'encryption' => 'tls',   // or ssl
			]
    ],
]
```

Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
use pceuropa\email\Send;

Send::widget([
		'from' => 'info@pceuropa.net',
		'to' => 'info@destiny.pl',
		'subject' => 'subject email',
		'textBody' => 'Hello Lorem Ipsum. Bye',
	]); 
```

