<?php
namespace Rocketeer\Dummies;

use Rocketeer\Plugins\AbstractNotifier;

class DummyNotifier extends AbstractNotifier
{
    /**
     * Get the default message format
     *
     * @param string $message
     *
     * @return string
     */
    public function getMessageFormat($message)
    {
        switch ($message) {
            case 'before_deploy':
            case 'after_deploy':
                return '{1} finished deploying branch "{2}" on "{3}" ({4})';

            case 'after_rollback':
                return '{1} rolled back branch "{2}" on "{3}" to previous version ({4})';
        }
    }

    /**
     * Send a given message
     *
     * @param string $message
     *
     * @return void
     */
    public function send($message)
    {
        print $message;

        return $message;
    }
}
