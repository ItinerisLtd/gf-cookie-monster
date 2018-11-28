<?php
declare(strict_types=1);

namespace Itineris\GFCookieMonster;

class Form
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

    public function populateFields($value, $_field, $key)
    {
        if (! $this->cookieJar->isPrefixed($key)) {
            return $value;
        }

        $newValue = null;
        if ($this->cookieJar->has($key)) {
            $newValue = $this->cookieJar->get($key);
        }

        if (! empty($newValue)) {
            $value = $newValue;
        }
        return $value;
    }
}
