<?php
declare(strict_types=1);

namespace Itineris\GFCookieMonster;

class CookieJar
{
    protected $prefix;
    protected $cookie = [];

    public function __construct(string $prefix)
    {
        $this->prefix = $prefix;
    }

    public function set(string $key, string $value): void
    {
        setcookie(
            $key,
            $value,
            time() + 3600, // 1 hour from now.
            '/',
            '',
            false,
            true
        );
    }

    public function isPrefixed(string $key): bool
    {
        return 0 === strpos($key, $this->prefix);
    }

    public function has($key): bool
    {
        $value = $this->get($key);
        return ! empty($value);
    }

    public function get($key): string
    {
        $value = $this->cookie[$key] ?? '';
        return sanitize_text_field(wp_unslash($value));
    }

    public function backupAndUnset(): void
    {
        $this->cookie = array_filter(array_merge([], $_COOKIE), function ($_value, $key): bool {
            return $this->isPrefixed($key);
        }, ARRAY_FILTER_USE_BOTH);

        array_map(function (string $key): void {
            unset($_COOKIE[$key]);
            setcookie(
                $key,
                '',
                time() - 3600, // 1 hour ago.
                '/',
                '',
                false,
                true
            );
        }, array_keys($this->cookie));
    }
}
