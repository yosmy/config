<?php

namespace Yosmy;

interface Config
{
    /**
     * @return string
     */
    public function getKey(): string;

    /**
     * @return string
     */
    public function getValue(): string;
}
