# String

The string library is just a simple collection of missing php string functions.

## API

    // truncate a string and append an optional truncation value
    function truncate($str, $len, $end = '')
    function map_join($strs, $sep, $predicate)
    // hide a substring with a char by replacing each char with the replacement_char
    function substr_hide($str, $replacement_char, $start, $length)

Look at the `test/string.php` for examples.
