<?php

namespace PP\Component\Support;

interface EncrypterInterface
{
    /**
     * Encrypt the given value.
     *
     * @param string $value
     *
     * @return string
     */
    public function encrypt($value);

    /**
     * Decrypt the given value.
     *
     * @param string $payload
     *
     * @return string
     */
    public function decrypt($payload);
}