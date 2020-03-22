<?php

function get_db_config()
{
    if (getenv('IS_IN_HEROKU')) {
        $url = parse_url(getenv("DATABASE_URL"));
        var_dump($url);
        exit;
        return $db_config = [
            'connection' => 'pgsql',
            'host' => $url['host'],
            'database' => substr($url['path'], 1),
        ];
    }
}
