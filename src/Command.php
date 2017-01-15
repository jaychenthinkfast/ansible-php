<?php 

namespace Jay\Ansible

class Command{

    private $name;

    private $binPath;

    /**
     * 构造函数
     * @param string $name    分组名或主机别名
     * @param string $binPath ansible命令的绝对路径
     */
    public function __construct($name, $binPath = '/usr/bin/ansible'){
        $this->name = $name;
        $this->binPath = $binPath;
    }

    /**
     * 命令执行函数
     * @param  string $command [shell命令]
     * @return string 
     */
    public function run($command){
        $command = $this->binPath.' '.$this->name.' -m shell -a '.$command;
        return shell_exec($command);
    }
}