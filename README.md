# Boris REPL for the Elefant CMS

This is a simple app that adds the [Boris REPL](https://github.com/borisrepl/boris)
(read-eval-print-loop) to the [Elefant CMS](https://www.elefantcms.com/) for
experimenting with PHP code in the terminal in an interactive way.

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
