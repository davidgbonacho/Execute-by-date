
# Execute by date
how to use date() function as a switch to execute code in your app.

`[SimPIL are a series of ultra-simple examples of how to perform different operations with code. Uncomplicated.]`

## Install
No need to install anything, just look at the code. 

## Perform
Simply use this code to execute certain code based on the current date of the server
```php

$exeByDate = false;
$current_date = strtotime(date("d-m-Y H:i:00",time())); // get the current date
$activation_date = strtotime("15-04-2024 00:06:00"); // set the activation date

if($current_date > $activation_date){ // compare and set true if current date is greater than activation date
    $exeByDate = true;
}

if($exeByDate){
    // your code here
}
```

## Files
- index.php with this simple code
- img/logo.svg: only important images are here

[Texto en español aquí](README_ES.MD)

![](img/logo.svg)
---
`título:` execute by date [`SimPIL`] 04/13/24\
`autor:` David G. Bonacho &nbsp;&nbsp;  [www.tizedit.com](https://www.tizedit.com)