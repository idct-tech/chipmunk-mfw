<?php
namespace IDCT\Cms\Chipmunk\DbAdapters;
use IDCT\Cms\Chipmunk\Definitions\DatabaseInterface as DatabaseInterface;
use IDCT\Db\Chipmunk\Connector as ChipmunkDatabase;
/**
 * Adapter to support Chipmunk DB
 *
 * ChipmunkAdapter description.
 *
 * @version 1.0
 * @author Bartosz
 */
class ChipmunkAdapter implements DatabaseInterface
{
    /**
     * Configuration array
     * @var array
     */
    protected $configuration;

    /**
     * Real database connector
     * @var ChipmunkDatabase
     */
    protected $database;

    /**
     * {inheritdoc}
     */
    public function getConnector() {
        return $this->database;
    }

    /**
     * {inheritdoc}
     * @todo log invalid assignment
     */
    public function setConnector($connector) {
        if($connector instanceof ChipmunkDatabase) {
            $this->database = $connector;
        }

        return $this;
    }

    /**
     * {inheritdoc}
     */
    public function getById($identifier) {
        if(!is_null($connector = $this->getConnector())) {
            return $connector->get($identifier);
        }

        return null;
    }

    /**
     * {inheritdoc}
     * @todo ensure flat array
     */
    public function setById($identifier, $data, array $metadata = array()) {
        if(!is_null($connector = $this->getConnector())) {
            $connector->set($identifier, $metadata, $data);
        }

        return $this;
    }

    /**
     * {inheritdoc}
     * @return mixed
     */
    public function getConfiguration() {
        return $this->configuration;
    }

    /**
     * {inheritdoc}
     */
    public function setConfiguration(array $configuration) {
        $this->configuration = $configuration;

        return $this;
    }

    /**
     * {inheritdoc}
     */
    public function initialize() {
        if(!is_null($connector = $this->getConnector())) {
            $configuration = $this->configuration;
            if(is_array($configuration)) {
                if(isset($configuration['host'])) {
                    $connector->setHost($configuration['host']);
                }
                if(isset($configuration['port'])) {
                    $connector->setHost($configuration['port']);
                }
            }
        }

        return $this;
    }
}
