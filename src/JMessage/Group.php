<?php

namespace JMessage;
use JMessage\Http\Client;

class Group {
    const BASE_URI = 'https://api.im.jpush.cn/v1/admins/';
    private $client;

    public function __construct($client) {
        $this->client = Client::getInstance($client);
    }

}
