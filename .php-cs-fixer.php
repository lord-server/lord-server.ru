<?php

$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__ . '/app',
        __DIR__ . '/tests',
    ])
;

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony'                               => true,
//        '@PHP71Migration:risky'                  => true,
//        '@PHP73Migration'                        => true,
        'binary_operator_spaces'                 => ['default' => 'align'],
        'cast_spaces'                            => false,
        'concat_space'                           => ['spacing' => 'one'],
        'compact_nullable_typehint'              => true,
        'dir_constant'                           => true,
        'echo_tag_syntax'                        => false,
        'fully_qualified_strict_types'           => true,
        'function_to_constant'                   => [
            'functions' => [
                'get_called_class',
                'get_class',
                'get_class_this',
                'php_sapi_name',
                'phpversion',
                'pi',
            ],
        ],
        'general_phpdoc_annotation_remove'       => ['annotations' => ['author']],
        'heredoc_to_nowdoc'                      => true,
        'is_null'                                => true,
        'linebreak_after_opening_tag'            => true,
        'logical_operators'                      => true,
        'modernize_types_casting'                => true,
        'multiline_whitespace_before_semicolons' => ['strategy' => 'new_line_for_chained_calls'],
        'no_alias_functions'                     => true,
        'no_alternative_syntax'                  => false,
        'no_php4_constructor'                    => true,
        'no_superfluous_phpdoc_tags'             => false,
        'no_unreachable_default_argument_value'  => true,
        'no_unset_cast'                          => true,
        'no_useless_else'                        => true,
        'no_useless_return'                      => true,
        'non_printable_character'                => true,
        'not_operator_with_space'                => true,
        'ordered_imports'                        => true,
        'php_unit_construct'                     => true,
        'phpdoc_add_missing_param_annotation'    => true,
        'phpdoc_line_span'                       => ['const' => 'single', 'property' => 'single'],
        'phpdoc_no_alias_tag'                    => [
            'replacements' => [
                'property-write' => 'property',
                'type'           => 'var',
                'link'           => 'see',
            ],
        ],
        'phpdoc_no_empty_return'                 => false,
        'phpdoc_var_annotation_correct_order'    => true,
        'pow_to_exponentiation'                  => true,
        'protected_to_private'                   => true,
        'psr_autoloading'                        => true,
        'random_api_migration'                   => true,
        'semicolon_after_instruction'            => false,
        'yoda_style'                             => false,
    ])
    ->setFinder($finder)
;
