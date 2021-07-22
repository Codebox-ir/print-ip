# print-ip


Return IPv4 or IPv6 for using in shell scripts, web scripts and even server-side scripts to get the IP.

Notice: x-Forward not covered.

## Installation

This project available with composer:
```
$ composer require milad-abooali/print-ip
```

# Usage

Online example:
https://ip.codebox.ir

Auto detect main IP version:
```
$  curl -L ip.codebox.ir
```

Selector for IPv6, return null on IPv4:
```
$  curl -L ip.codebox.ir?v=6
```

Selector for IPv4, return null on IPv6:
```
$  curl -L ip.codebox.ir?v=4
```

Call from diffrent interface using curl:
```
$ curl -L --interface eth0 ip.codebox.ir
```
