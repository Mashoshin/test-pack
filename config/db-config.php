<?php

return [
    'driver' => getenv('DB_DRIVER'),
    'user' => getenv('DB_USER'),
    'password' => getenv('DB_PASSWORD'),
    'dbname' => getenv('DB_NAME'),
    'host' => getenv('DB_HOST')
];