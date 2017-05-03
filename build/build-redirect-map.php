<?php
// Setup autoloading for SDK and build classes.
require __DIR__ . '/../vendor/autoload.php';

use Aws3\Build\Docs\RedirectMapBuilder;

$path = __DIR__ . '/artifacts/docs/package.redirects.conf';
$apiProvider = \Aws3\Api\ApiProvider::defaultProvider();

$builder = new RedirectMapBuilder($apiProvider, $path);
$builder->build();
