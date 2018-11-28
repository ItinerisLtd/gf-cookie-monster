# gf-cookie-monster

[![Packagist Version](https://img.shields.io/packagist/v/itinerisltd/gf-cookie-monster.svg)](https://packagist.org/packages/itinerisltd/gf-cookie-monster)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/itinerisltd/gf-cookie-monster.svg)](https://packagist.org/packages/itinerisltd/gf-cookie-monster)
[![Packagist Downloads](https://img.shields.io/packagist/dt/itinerisltd/gf-cookie-monster.svg)](https://packagist.org/packages/itinerisltd/gf-cookie-monster)
[![GitHub License](https://img.shields.io/github/license/itinerisltd/gf-cookie-monster.svg)](https://github.com/ItinerisLtd/gf-cookie-monster/blob/master/LICENSE)
[![Hire Itineris](https://img.shields.io/badge/Hire-Itineris-ff69b4.svg)](https://www.itineris.co.uk/contact/)


Pre-populate Gravity Forms fields and hide query strings by cookies.

<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->


- [Minimum Requirements](#minimum-requirements)
- [Installation](#installation)
- [FAQ](#faq)
  - [Can I access the cookies via JavaScript?](#can-i-access-the-cookies-via-javascript)
  - [Will you add support for older PHP versions?](#will-you-add-support-for-older-php-versions)
  - [It looks awesome. Where can I find some more goodies like this?](#it-looks-awesome-where-can-i-find-some-more-goodies-like-this)
  - [This plugin isn't on wp.org. Where can I give a ⭐️⭐️⭐️⭐️⭐️ review?](#this-plugin-isnt-on-wporg-where-can-i-give-a-%EF%B8%8F%EF%B8%8F%EF%B8%8F%EF%B8%8F%EF%B8%8F-review)
  - [Code Style](#code-style)
- [Feedback](#feedback)
- [Security](#security)
- [Change log](#change-log)
- [Credits](#credits)
- [License](#license)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

## Minimum Requirements

- PHP v7.2
- WordPress v4.9.8
- Gravity Forms v2.3.6.8

## Installation

```bash
$ composer require itinerisltd/gf-cookie-monster
```

## FAQ

### Can I access the cookies via JavaScript?

Never. This plugin will only set `httponly` cookies.

See: [https://secure.php.net/manual/en/function.setcookie.php](https://secure.php.net/manual/en/function.setcookie.php)

### Will you add support for older PHP versions?

Never! This plugin will only works on [actively supported PHP versions](https://secure.php.net/supported-versions.php).

Don't use it on **end of life** or **security fixes only** PHP versions.

### It looks awesome. Where can I find some more goodies like this?

- Articles on [Itineris' blog](https://www.itineris.co.uk/blog/)
- More projects on [Itineris' GitHub profile](https://github.com/itinerisltd)
- Follow [@itineris_ltd](https://twitter.com/itineris_ltd) and [@TangRufus](https://twitter.com/tangrufus) on Twitter
- Hire [Itineris](https://www.itineris.co.uk/services/) to build your next awesome site

### This plugin isn't on wp.org. Where can I give a ⭐️⭐️⭐️⭐️⭐️ review?

Thanks! Glad you like it. It's important to make my boss know somebody is using this project. Instead of giving reviews on wp.org, consider:

- tweet something good with mentioning [@itineris_ltd](https://twitter.com/itineris_ltd)
- star this Github repo
- watch this Github repo
- write blog posts
- submit pull requests
- [hire Itineris](https://www.itineris.co.uk/services/)

### Code Style

Check your code style with `$ composer check-style`. It's a mix of PSR-1, PSR-2, PSR-4 and [WordPress Coding Standards](https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards). Learn more on [itineris-wp-coding-standards](https://github.com/ItinerisLtd/itineris-wp-coding-standards)
Change [phpcs.xml](./phpcs.xml) when necessary.

## Feedback

**Please provide feedback!** We want to make this library useful in as many projects as possible.
Please submit an [issue](https://github.com/ItinerisLtd/gf-cookie-monster/issues/new) and point out what you do and don't like, or fork the project and make suggestions.
**No issue is too small.**

## Security

If you discover any security related issues, please email [hello@itineris.co.uk](mailto:hello@itineris.co.uk) instead of using the issue tracker.

## Change log

Please see [CHANGELOG](./CHANGELOG.md) for more information on what has changed recently.

## Credits

[gf-cookie-monster](https://github.com/ItinerisLtd/gf-cookie-monster) is a [Itineris Limited](https://www.itineris.co.uk/) project created by [Tang Rufus](https://typist.tech).

Full list of contributors can be found [here](https://github.com/ItinerisLtd/gf-cookie-monster/graphs/contributors).

## License

[gf-cookie-monster](https://github.com/ItinerisLtd/gf-cookie-monster) is released under the [MIT License](https://opensource.org/licenses/MIT).
