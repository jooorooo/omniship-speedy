<?php

/**
 * Instances of this class are returned as a result of login Speedy web service method calls
 */
class ResultLogin extends SpeedyResultFormat {

    /**
     * The session ID to be used as a parameter in subsequent method calls.
     * @access private
     * @var string
     */
    protected $_sessionId;

    /**
     * The logged client's ID (in Speedy's nomenclature).
     * @access private
     * @var integer Signed 64-bit integer
     */
    protected $_clientId;

    /**
     * Constructs new instance of ResultLogin
     * @param stdClass $stdClassResultLogin
     */
    function __construct($stdClassResultLogin) {
        $this->_sessionId = isset($stdClassResultLogin->sessionId) ? $stdClassResultLogin->sessionId : null;
        $this->_clientId  = isset($stdClassResultLogin->clientId)  ? $stdClassResultLogin->clientId  : null;
    }

    /**
     * Get session ID to be used as a parameter in subsequent method calls.
     * @return string
     */
    public function getSessionId() {
        return $this->_sessionId;
    }

    /**
     * Get logged client's ID (in Speedy's nomenclature).
     * @return integer Signed 64-bit
     */
    public function getClientId() {
        return $this->_clientId;
    }
}
?>