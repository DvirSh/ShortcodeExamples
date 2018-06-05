# Boost your UI using shortcodes
A few shortcodes examples for Wordpress conference, 6.6.2018

## Before you begin
- Make sure you have wordpress setup and running - it can be locally using [DesktopServer]() or a [docker image](), or even hosted somewhere else like [WP engine]().

- Make sure you have a theme to work on. If you want to know how to create a child theme and where to place your code, you can find the information [here](https://codex.wordpress.org/Child_Themes).

## What do you see here?
There are 5 shortcode files in this example, and a few others.
What we care about is this:
* functions.php - the main code of our theme, where you add links to your shortcode implementations using require_once.
* shortcodes/#example_name - a file with the implementation for the specific example according to its name and number.
* shortcodes/resources - static opening strings from star wars movies.
* tests - a folder with 1 unitest.

## Running tests
In order to run the tests, you need to run ```composer install``` in the tests directory, and the run ```phpunit 6.hello-world.php```

For any questions and additional input, feel free to open an issue, suggest a PR or contact me via twitter: @DvirShoham
