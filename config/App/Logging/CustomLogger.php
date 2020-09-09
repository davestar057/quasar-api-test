<?php


namespace App\Logging;

use Monolog\Logger;

class CustomLogger
{

    /**
     * Create a custom Monolog instance.
     *
     * @param  array  $config
     * @return \Monolog\Logger
     */
    public function __invoke(array $config)
    {
        return new Logger();
    }

}
