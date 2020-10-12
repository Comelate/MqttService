<?php

namespace project\services;

use Workerman\Mqtt\Client;

class MqttService
{
  /**
   * @var Client
   */
  protected $client;

  public function __construct(Client $client)
  {
    $this->client = $client;
  }

  public function onMessage(string $topic, string $content, Client $client)
  {
    var_dump($content);
  }

  public function onConnect(Client $client)
  {
    var_dump('mqtt onConnect');

    $client->subscribe('test');
  }
}