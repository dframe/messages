# Dframe/Sesssion - Component
[![Build Status](https://travis-ci.org/dframe/messages.svg?branch=master)](https://travis-ci.org/dframe/messages) [![Latest Stable Version](https://poser.pugx.org/dframe/messages/v/stable)](https://packagist.org/packages/dframe/messages) [![Total Downloads](https://poser.pugx.org/dframe/messages/downloads)](https://packagist.org/packages/dframe/messages) [![Latest Unstable Version](https://poser.pugx.org/dframe/messages/v/unstable)](https://packagist.org/packages/dframe/messages) [![License](https://poser.pugx.org/dframe/messages/license)](https://packagist.org/packages/dframe/messages)

![php framework dframe logo](https://dframeframework.com/img/logo_full.png)

 
### Composer

```sh
$ composer require dframe/messages
```

### Standalone


```php

$driver = new \Dframe\Component\Session\Session('sessionName');

/**
 * $driver Can be any class implements interface \Psr\SimpleCache\CacheInterface 
 */
$messages  = new \Dframe\Component\Messages\Messages($driver); 
$messages->add('info', 'String Information.');  // types ['help', 'info', 'warning', 'error', 'success']
$messages->hasMessages('info');                 // Check to see if there are any ($type) messages queued.
$messages->hasErrors();                         // true There ARE error messages false There are NOT any error messages
$messages->display('all');                      // Return true/false
```

License
----

Open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

