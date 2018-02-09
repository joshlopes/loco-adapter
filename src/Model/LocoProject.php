<?php

namespace Translation\PlatformAdapter\Loco\Model;

/**
 * Represents a project from loco
 */
class LocoProject
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $indexParameter;

    /**
     * @param string $name
     * @param array $config
     */
    public function __construct(string $name, array $config)
    {
        $this->name = $name;
        $this->apiKey = $config['api_key'];
        $this->indexParameter = $config['index_parameter'];
    }

    public function getName()
    {
        return $this->name;
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }

    public function getIndexParameter()
    {
        return $this->indexParameter;
    }
}
