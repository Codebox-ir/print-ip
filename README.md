# print-ip


Return IPv4 or IPv6 for using in shel scripts, web scripts and even server-side scripts to get th IP.

Notice: x-Forward not covered.

## Installation
This project using composer.
```
$ composer require milad-abooali/print-ip
```

# Usage

Onlien Example:
https://ip.codebox.ir


```
$  curl -L ip.codebox.ir
```

IP version selector:

```
$  curl -L ip.codebox.ir?v=6
```

```
$  curl -L ip.codebox.ir?v=4
```

Call from diffrent interface using curl:
```
$ curl -L --interface eth0 ip.codebox.ir
```
