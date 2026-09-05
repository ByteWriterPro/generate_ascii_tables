# generate_ascii_tables
Generates full byte (0–255) and printable ASCII (32–126) tables using PHP, saving the output to text files. Useful for debugging, encoding tests, and reference.

# Generate ASCII Tables

This repository contains a simple PHP utility script that generates two reference files:

- **Bytes.txt** — lists all 256 possible byte values (0–255)
- **ASCII.txt** — lists all printable ASCII characters (32–126) with their corresponding byte values

The script is useful for debugging, encoding tests, terminal behaviour checks, or creating lookup tables for software development.

---

## Features

- Enumerates all byte values from 0 to 255  
- Detects printable ASCII characters  
- Outputs clean, readable text files  
- No dependencies — pure PHP  
- Works on any system with PHP installed

---

## How It Works

The script loops through all byte values:

- Every value is written to **Bytes.txt**
- Values between **32 and 126** are converted to characters using `chr()` and written to **ASCII.txt**

Printable ASCII includes letters, numbers, punctuation, and symbols.

---

## Usage

Run the script from the command line:

```bash
php generate_ascii_tables.php
