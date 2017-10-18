<?php

namespace Printplanet\Component\Support;

/**
 * Interface Jsonable.
 *
 * Note: Adapted from Laravel Framework.
 *
 * @see https://github.com/laravel/framework/blob/5.3/LICENSE.md
 */
interface Jsonable
{
    /**
     * Convert the object to its JSON representation.
     *
     * @param int $options
     *
     * @return string
     */
    public function toJson($options = 0);
}