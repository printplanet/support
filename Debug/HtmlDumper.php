<?php

namespace Printplanet\Component\Support\Debug;

use Symfony\Component\VarDumper\Dumper\HtmlDumper as SymfonyHtmlDumper;

class HtmlDumper extends SymfonyHtmlDumper
{
    /**
     * Colour definitions for output.
     *
     * @var array
     */
    protected $styles = array(
        'default' => 'background-color:#002b36; color:#657b83; line-height:1.2em; font-weight:normal; font:12px Monaco, Consolas, monospace; word-wrap: break-word; white-space: pre-wrap; position:relative; z-index:100000',
        'num' => 'color:#268bd2',
        'const' => 'color:#dc322f',
        'str' => 'color:#2aa198',
        'cchr' => 'color:#222',
        'note' => 'color:#cb4b16',
        'ref' => 'color:#a0a0a0',
        'public' => 'color:#795da3',
        'protected' => 'color:#795da3',
        'private' => 'color:#795da3',
        'meta' => 'color:#b729d9',
        'key' => 'color:#2aa198',
        'index' => 'color:#268bd2',
    );
}