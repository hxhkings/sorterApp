<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'phpDocumentor\\Reflection\\' => array($vendorDir . '/phpdocumentor/reflection-common/src', $vendorDir . '/phpdocumentor/type-resolver/src', $vendorDir . '/phpdocumentor/reflection-docblock/src'),
    'Webmozart\\Assert\\' => array($vendorDir . '/webmozart/assert/src'),
    'Lib\\Units\\' => array($baseDir . '/../lib/test/unit'),
    'Doctrine\\Instantiator\\' => array($vendorDir . '/doctrine/instantiator/src/Doctrine/Instantiator'),
    'DeepCopy\\' => array($vendorDir . '/myclabs/deep-copy/src/DeepCopy'),
    'App\\Models\\' => array($baseDir . '/models'),
    'App\\Interfaces\\' => array($baseDir . '/common/interface'),
    'App\\Factory\\' => array($baseDir . '/factories'),
    'App\\Controllers\\' => array($baseDir . '/controllers'),
    'App\\Builder\\' => array($baseDir . '/common/builder'),
    'App\\Abstracts\\' => array($baseDir . '/common/abstract'),
);
