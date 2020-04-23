```
$ ./vendor/bin/phpstan analyze src --level 2 -vvv
 1/1 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100% < 1 sec/< 1 sec 34.0 MiB

 ------ -------------------------------------------------------------------------------
  Line   BaseController.php
 ------ -------------------------------------------------------------------------------
  19     Call to an undefined method Psr\Container\ContainerInterface::getParameter().
 ------ -------------------------------------------------------------------------------


 [ERROR] Found 1 error
```
