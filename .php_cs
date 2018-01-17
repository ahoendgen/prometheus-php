<?php

declare(strict_types=1);
if (!file_exists(__DIR__.'/src')) {
    exit(0);
}

return PhpCsFixer\Config::create()
    ->setRules([
                   '@PHP71Migration' => true,
                   '@PHP71Migration:risky' => true,
                   '@PSR2' => true,
                   '@Symfony' => true,
                   '@Symfony:risky' => true,
                   'array_syntax' => ['syntax' => 'short'],
                   'protected_to_private' => false,
               ])
    ->setRiskyAllowed(true)
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__.'/src')
            ->append([__FILE__])
    );
