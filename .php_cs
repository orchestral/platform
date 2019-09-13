<?php

$finder = PhpCsFixer\Finder::create()
            ->in(__DIR__.'/app')
            ->in(__DIR__.'/config')
            ->in(__DIR__.'/database')
            ->in(__DIR__.'/resources/lang')
            ->in(__DIR__.'/routes')
            ->in(__DIR__.'/tests');

return PhpCsFixer\Config::create()
            ->setRiskyAllowed(false)
            ->setRules([
                '@Symfony' => true,
                'no_empty_comment' => false,
                'no_extra_consecutive_blank_lines' => false,
                'not_operator_with_successor_space' => true,
                'ordered_imports' => ['sortAlgorithm' => 'alpha'],
                'phpdoc_align' => false,
                'phpdoc_no_empty_return' => false,
                'single_trait_insert_per_statement' => false,
                'no_unused_imports' => false,
                'yoda_style' => false,
            ])
            ->setFinder($finder);
