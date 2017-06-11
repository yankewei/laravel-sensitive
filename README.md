# Laravel-sensitive

Sensitive Fliter for Laravel5 / Lumen based on [tuyuwei/SensitiveWord](https://github.com/tuyuwei/SensitiveWord).


## Install

```shell
composer require "yankewei/laravel-sensitive:~1.0"
```

## For Laravel

Add the following line to the section `providers` of `config/app.php`:

```php
'providers' => [
    //...
    Yankewei\LaravelSensitive\SensitiveServiceProvider::class,
],
```
as optional, you can use facade:

```php

'aliases' => [
    //...
    'Sensitive' => Yankewei\LaravelSensitive\Facades\Sensitive::class,
],
```

## For Lumen

Add the following line to `bootstrap/app.php` after `// $app->withEloquent();`

```php
...
// $app->withEloquent();

$app->register(Yankewei\LaravelSensitive\SensitiveServiceProvider::class);
...
```

## Usage

Using facade:

```php
$interference = ['&', '*'];
$data = ['日本', '滚蛋'];
Sensitive::interference($interference);//添加干扰因子
Sensitive::addwords($data);//需要过滤的敏感词
$txt = "我说的日本册,滚&蛋不是。。。";
$words = Sensitive::filter($txt);
dd($words);
"我说的**册,***不是。。。"
```

## License

MIT
