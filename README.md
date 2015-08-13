# Using Boris REPL with Elefant CMS

> Note: Boris requires PHP's [pcntl](http://ca1.php.net/pcntl) extension.

1\. Install the Boris app via:

	composer.phar require elefant/app-boris

2\. Call via:

        php index.php boris

The following Elefant objects are available to the REPL for inspection:

* `$cache`
* `$controller`
* `$i18n`
* `$page`
* `$tpl`
