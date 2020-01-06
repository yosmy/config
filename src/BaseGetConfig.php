<?php

namespace Yosmy;

/**
 * @di\service()
 */
class BaseGetConfig
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
     *
     * @return Config
     *
     * @throws NonexistentConfigException
     */
    public function get(
        string $key
    ): Config {
        /** @var Config $config */
        $config = $this->manageCollection->findOne([
            '_id' => $key
        ]);

        if (!$config) {
            throw new NonexistentConfigException();
        }

        return $config;
    }
}