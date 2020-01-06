<?php

namespace Yosmy;

/**
 * @di\service()
 */
class BaseSetConfig
{
    /**
     * @var ManageConfigCollection
     */
    private $manageCollection;

    /**
     * @param ManageConfigCollection $manageCollection
     */
    public function __construct(ManageConfigCollection $manageCollection)
    {
        $this->manageCollection = $manageCollection;
    }

    /**
     * @param string $key
     * @param string $value
     */
    public function set(
        string $key,
        string $value
    ) {
        try {
            $this->manageCollection->insertOneUnique([
                '_id' => $key,
                'value' => $value
            ]);
        } catch (Mongo\DuplicatedKeyException $e) {
            $this->manageCollection->updateOne(
                [
                    '_id' => $key
                ],
                [
                    '$set' => [
                        'value' => $value
                    ]
                ]
            );
        }
    }
}