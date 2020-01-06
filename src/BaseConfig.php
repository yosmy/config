<?php

namespace Yosmy;

use MongoDB\Model\BSONDocument;

class BaseConfig extends BSONDocument implements Config
{
    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->offsetGet('_id');
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->offsetGet('value');
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize(): object
    {
        $data = parent::jsonSerialize();

        $data->key = $data->_id;

        unset($data->_id);

        return $data;
    }
}
