<?php

namespace Printplanet\Component\Support\Debug;

use Symfony\Component\VarDumper\Cloner\VarCloner;

class Dumper
{
    /**
     * Dump a value with elegance.
     *
     * @param  mixed  $value
     * @return void
     */
    public function dump($value)
    {
        if (class_exists(CliDumper::CLASSNAME)) {
            $dumper = in_array(PHP_SAPI, array('cli', 'phpdbg')) ? new CliDumper : new HtmlDumper;

            $cloner = new VarCloner();
            $dumper->dump($cloner->cloneVar($value));
        } else {
            var_dump($value);
        }
    }
}