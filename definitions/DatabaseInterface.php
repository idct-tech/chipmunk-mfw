<?php
namespace IDCT\Cms\Chipmunk\Definitions;
/**
 * Interface for Chipmunk CMS database adapters
 *
 * @version 1.0
 * @author IDCT Bartosz Pacho?ek [bartosz@idct.pl]

 */
interface DatabaseInterface
{
    /**
     * Finds an object by it's identifier
     *
     * Returns object on success, NULL when not found
     * @param string $identifier
     * @return mixed|boolean
     */
    public function getById($identifier);

    /**
     * Sets the data under the given identifier with the attached metadata
     * @param mixed $identifier id in the db
     * @param array $metadata metadata for searching
     * @param mixed $data object to be serialized and saved
     * @return self
     */
    public function setById($identifier, $data, array $metadata = array());

    /**
     * Returns the real database connector
     * @return mixed|null
     */
    public function getConnector();

    /**
     * Sets the real database connector
     * @param mixed $connector
     * @return self
     */
    public function setConnector($connector);

    /**
     * Returns the configuration array with connection configuration variables
     * @return array|null
     */
    public function getConfiguration();

    /**
     * Sets the configuration array with connection configuration variables
     * @param array $configuration
     * @return self
     */
    public function setConfiguration(array $configuration);

    /**
     * Initializes the database object: connects if needed
     * @return self
     */
    public function initialize();
}
