<?php

// Output files
$bytesFile = "Bytes.txt";
$asciiFile = "ASCII.txt";

// Open files for writing
$bf = fopen($bytesFile, "w");
$af = fopen($asciiFile, "w");

// Loop through all 256 byte values
for ($i = 0; $i < 256; $i++) {

    // Write raw byte value to Bytes.txt
    fwrite($bf, $i . PHP_EOL);

    // Check if value is printable ASCII (32–126)
    if ($i >= 32 && $i <= 126) {
        $char = chr($i);
        fwrite($af, $i . " = " . $char . PHP_EOL);
    }
}

// Close files
fclose($bf);
fclose($af);

echo "Done. Files created: Bytes.txt and ASCII.txt";
