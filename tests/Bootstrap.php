<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Dframe\Component\Messages\Messages;
use Dframe\Component\Session\Session;

error_reporting(0);
ini_set('session.use_cookies', 0);

/**
 * Class Bootstrap
 */
class Bootstrap
{

    /**
     * @var \Dframe\Component\Session\Session
     */
    public $session;

    /**
     * @var \Dframe\Component\Messages\Messages
     */
    public $token;

    /**
     * Bootstrap constructor.
     *
     * @throws Exception
     */
    public function __construct()
    {
        $this->session = new Session('Test'); // Best to set project name
        $this->messages = new Messages($this->session);

        return $this;
    }
}
