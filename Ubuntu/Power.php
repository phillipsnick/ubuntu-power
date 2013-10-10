<?php
/**
 * pfSense WOL 
 * 
 * @author      Nick Phillips (nick@linkstudios.co.uk)
 * @copyright   Copyright 2013, Nick Phillips (nick@linkstudios.co.uk)
 * @license     MIT Licence
 */

namespace Ubuntu;

class Power
{
    /**
     * @var string  Hostname or IP of the server
     */
    private $host = '';

    /**
     * @var string  Ubuntu Username
     */
    private $username = '';
    
    /**
     * @var string  Ubuntu Password
     */
    private $password = '';
    
    
    /**
     * @param   array   $params
     * @throws  Exception
     */
    public function __construct($params = array())
    {
        foreach($params as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
    
    /**
     * Set the hostname or IP address
     * 
     * @param   string  $host
     * @return  \Pfsensewol\Wol
     */
    public function setHost($host)
    {
        $this->pfsense = $host;
        return $this;
    }
    
    /**
     * Set the username to login to pfSense with
     * 
     * @param   string  $username
     * @return  \Pfsensewol\Wol
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }
    
    /**
     * Set the password to login to pfSense with
     * 
     * @param   string  $password
     * @return  \Pfsensewol\Wol
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
}