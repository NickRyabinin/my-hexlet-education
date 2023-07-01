<?php

namespace App\Url;

function make(string $stringUrl)
{
    $url = parse_url($stringUrl);
    if ($url === false) {
        exit('Invalid URL');
    }
    $query = [];
    if (isset($url['query'])) {
        parse_str($url['query'], $query);
    }

    return ['url' => $url, 'queryData' => $query];
}

function setScheme(&$data, $scheme)
{
    $data['url']['scheme'] = $scheme;
}

function getScheme(array $data)
{
    return array_key_exists('scheme', $data['url']) ? $data['url']['scheme'] : '';
}

function setHost(&$data, $host)
{
    $data['url']['host'] = $host;
}

function getHost(array $data)
{
    return array_key_exists('host', $data['url']) ? $data['url']['host'] : '';
}

function setPath(&$data, $path)
{
    $data['url']['path'] = $path;
}

function getPath($data)
{
    return array_key_exists('path', $data['url']) ? $data['url']['path'] : '';
}

function setQueryParam(&$data, $key, $value)
{
    $data['queryData'][$key] = $value;
    $data['url']['query'] = http_build_query($data['queryData']);
}

function getQueryParam($data, $paramName, $default = null)
{
    return array_key_exists($paramName, $data['queryData']) ? $data['queryData'][$paramName] : $default;
}

function toString($data)
{
    $urlScheme = isset($data['url']['scheme']) ? "{$data['url']['scheme']}://" : '';
    $urlHost = isset($data['url']['host']) ? "{$data['url']['host']}" : '';
    $urlPort = isset($data['url']['port']) ? ":{$data['url']['port']}" : '';
    $urlUser = isset($data['url']['user']) ? "{$data['url']['user']}:" : '';
    $urlPass = isset($data['url']['pass']) ? "{$data['url']['pass']}@" : '';
    $urlPath = isset($data['url']['path']) ? "{$data['url']['path']}" : '';
    $urlQuery = isset($data['url']['query']) ? "?{$data['url']['query']}" : '';
    $urlFragment = isset($data['url']['fragment']) ? "#{$data['url']['fragment']}" : '';
    $urlString = "{$urlScheme}{$urlUser}{$urlPass}{$urlHost}{$urlPort}{$urlPath}{$urlQuery}{$urlFragment}";
    return $urlString;
}
