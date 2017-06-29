<?php

/**
 * Instances of this class are returned as a result of Speedy web service queries for streets
 */
class ResultStreet extends SpeedyResultFormat {

    /**
     * Street ID
     * @var integer Signed 64-bit
     */
    protected $_id;

    /**
     * Street type
     * @var string
     */
    protected $_type;

    /**
     * Street name
     * @var string
     */
    protected $_name;

    /**
     * Actual name (in case "name" is an old name)
     * @var string
     */
    protected $_actualName;

    /**
     * Constructs new instance of ResultStreet
     * @param stdClass $stdClassResultStreet
     */
    function __construct($stdClassResultStreet) {
        $this->_id          = isset($stdClassResultStreet->id)         ? $stdClassResultStreet->id         : null;
        $this->_type        = isset($stdClassResultStreet->type)       ? $stdClassResultStreet->type       : null;
        $this->_name        = isset($stdClassResultStreet->name)       ? $stdClassResultStreet->name       : null;
        $this->_actualName  = isset($stdClassResultStreet->actualName) ? $stdClassResultStreet->actualName : null;
    }

    /**
     * Get street ID
     * @return integer Signed 64-bit street ID
     */
    public function getId() {
        return $this->_id;
    }

    /**
     * Get street type
     * @return string Street type
     */
    public function getType() {
        return $this->_type;
    }

    /**
     * Get street name
     * @return string Street name
     */
    public function getName() {
        return $this->_name;
    }

    /**
     * Get street actual name in case name is an old name
     * @return string Street actual name
     */
    public function getActualName() {
        return $this->_actualName;
    }
}
?>