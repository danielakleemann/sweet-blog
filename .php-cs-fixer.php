<?php

declare(strict_types=1);

$finder = new PhpCsFixer\Finder()
    ->in(__DIR__);
return new PhpCsFixer\Config()
    ->setRules([
        '@PER-CS' => true,
        '@PHP84Migration' => true,
    ])
    ->setFinder($finder);
