<?php
declare(strict_types=1);

namespace Itineris\GFCookieMonster;

class Confirmation
{
    /**
     * The cookieJar instance
     *
     * @var CookieJar
     */
    protected $cookieJar;

    public function __construct(CookieJar $cookieJar)
    {
        $this->cookieJar = $cookieJar;
    }

    public function transformRedirectUrl($confirmation)
    {
        if (! is_array($confirmation) || empty($confirmation['redirect'])) {
            return $confirmation;
        }

        $url = $confirmation['redirect'];
        $this->setCookies($url);
        $confirmation['redirect'] = $this->removeQueryString($url);

        return $confirmation;
    }

    protected function setCookies(string $url): void
    {
        $queries = $this->parseQueryString($url);

        foreach ($queries as $key => $value) {
            if (! $this->cookieJar->isPrefixed($key)) {
                continue;
            }

            $this->cookieJar->set($key, $value);
        }
    }
    protected function removeQueryString(string $url): string
    {
        $queries = $this->parseQueryString($url);
        $keys = array_keys($queries);

        foreach ($keys as $key) {
            if (! $this->cookieJar->isPrefixed($key)) {
                continue;
            }

            $url = remove_query_arg($key, $url);
        }

        return $url;
    }

    protected function parseQueryString(string $url): array
    {
        $queries = [];
        $queryString = wp_parse_url($url, PHP_URL_QUERY);
        wp_parse_str($queryString, $queries);

        return $queries;
    }
}
