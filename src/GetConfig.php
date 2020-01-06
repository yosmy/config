<?php

namespace Yosmy;

interface GetConfig
{
    /**
     * @param string $key
     *
     * @return Config
     *
     * @throws NonexistentConfigException
     */
    public function get(
        string $key
    ): Config;
}