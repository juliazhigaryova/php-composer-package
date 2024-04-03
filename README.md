# Процессор строк

Сервис для работы со строками. Возвращает длину строки.

# Требования

- PHP >=7.1

# Установка
```bash
composer require julia-zhigareva/otus-composer-package
```

# Использование
```
<?php

$service = new StringService()
echo $service->getLength('my string') //9
```