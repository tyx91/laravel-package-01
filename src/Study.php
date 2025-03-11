<?php

namespace Tian\TestLaravelPackage;

class Study
{
    /**
     * 示例方法
     *
     * @param string $message
     * @return string
     */
    public function hello(string $message = 'World'): string
    {
        return "Hello, {$message}!";
    }
    
    /**
     * 其他方法...
     */
}