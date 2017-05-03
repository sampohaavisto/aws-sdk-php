<?php
/**
 * This file updates the '@method' annotations on the Aws3\Sdk class.
 */

require __DIR__ . '/../vendor/autoload.php';

$namespaces = array_map(function (array $manifest) {
    return $manifest['namespace'];
}, array_values(Aws3\manifest()));

sort($namespaces);
$annotations = [];
foreach ($namespaces as $namespace) {
    $mrClient = "\\Aws3\\{$namespace}\\{$namespace}MultiRegionClient";
    $mrClient = class_exists($mrClient) ? $mrClient : "\\Aws3\\MultiRegionClient";

    $annotations []= " * @method \\Aws3\\{$namespace}\\{$namespace}Client"
        . " create{$namespace}(array \$args = [])";
    $annotations []= " * @method $mrClient"
        . " createMultiRegion{$namespace}(array \$args = [])";
}

$previousAnnotationPattern = '/^\* @method'
    . ' \\\\Aws3\\\\(?:[a-zA-Z0-9\\\\]+)Client'
    . ' create(?:[a-zA-Z0-9]+)\\(array \$args = \\[\\]\\)/';

$updater = new ClassAnnotationUpdater(
    new ReflectionClass(\Aws3\Sdk::class),
    $annotations,
    '',
    $previousAnnotationPattern
);
$updater->update();
