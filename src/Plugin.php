<?php

namespace CakephpOpenaiPhp;

use Cake\Core\BasePlugin;
use Cake\Core\Configure;
use Cake\Core\ContainerInterface;
use OpenAI;
use OpenAI\Client;

class Plugin extends BasePlugin
{
    public function services(ContainerInterface $container): void
    {
        $apiKey = Configure::readOrFail('openai_api_key');

        $container->add('openai', function () use ($apiKey) {
            return OpenAI::client($apiKey);
        });
    }
}
