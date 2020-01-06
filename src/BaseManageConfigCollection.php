<?php

namespace Yosmy;

use Yosmy\Mongo;

class BaseManageConfigCollection extends Mongo\BaseManageCollection implements ManageConfigCollection
{
    /**
     * @param string $uri
     * @param string $db
     * @param string $collection
     * @param string $root
     */
    public function __construct(
        string $uri,
        string $db,
        string $collection,
        string $root
    ) {
        parent::__construct(
            $uri,
            $db,
            $collection,
            [
                'typeMap' => [
                    'root' => $root,
                ],
            ]
        );
    }
}
