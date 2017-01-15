# 描述

使用PHP 执行ansible shell命令的小工具

## 安装前

请确保已经安装ansible并配置了相关的中心机和客户机的ssh_auth,ssh_config（在中心机配置客户机的别名或机器组）

## 安装

    composer require chenjiesuper/ansible-php


## 使用说明

```php
include __DIR__ . '/vendor/autoload.php';

use Jay\Ansible\Command;

$name = 'dev';  //中心机配置的客户机别名或机器组名
$binPath = '/usr/bin/ansible';  //中心机ansible 命令绝对路径
$test = new Command($name); 
//$test = new Command($name, $binPath); //$binPaht 默认值/usr/bin/ansible，可不传
$ls = $test->run('ls'); //执行具体shell命令
var_dump($ls);

```
