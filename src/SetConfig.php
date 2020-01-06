<?php

namespace Yosmy;

interface SetConfig
{
    /**
     * @param string $key
     * @param string $value
     */
    public function set(
        string $key,
        string $value
    );
}