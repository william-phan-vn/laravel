<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Predis\ClientInterface;


class RedisCacheController extends Controller
{
    public function setCacheValue()
    {
        $key = 'sample_key';
        $value = 'Hello, Redis!';

        // Set a value in the Redis cache
        Cache::set($key, $value);

        return "Value with key '$key' set in Redis cache.";
    }

    public function getCacheValue()
    {
        $key = 'sample_key';

        // Retrieve a value from the Redis cache
        $value = Cache::get($key);

        if ($value !== null) {
            return "Value with key '$key' from Redis cache: $value";
        } else {
            return "Key '$key' not found in Redis cache.";
        }
    }
}
