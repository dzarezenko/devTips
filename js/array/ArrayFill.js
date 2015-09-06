/**
 * Although this is an old thread, I wanted to add my 2 cents to it. Not sure
 * how slow/fast this is, but it's a quick one liner. Here is what I do:
 */

//If I want to pre-fill with a number:
Array.apply(null, Array(5)).map(Number.prototype.valueOf, 0);
// [0, 0, 0, 0, 0]

//If I want to pre-fill with a string:
Array.apply(null, Array(3)).map(String.prototype.valueOf, "hi");
// ["hi", "hi", "hi"]

// Other answers have suggested:
new Array(5+1).join('0').split('');
// ["0", "0", "0", "0", "0"]

//but if you want 0 (the number) and not "0" (zero inside a string), you can do:
new Array(5+1).join('0').split('').map(parseFloat);
// [0, 0, 0, 0, 0]