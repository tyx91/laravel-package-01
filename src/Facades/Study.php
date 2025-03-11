<?php
/**
 * Created by PhpStorm.
 *
 * @author Tian.Yuxing
 * @email tianyuxing@sciall.org.cn
 * Date: 2025/3/10
 * Time: 22:05
 */

namespace Tian\TestLaravelPackage\Facades;

use Illuminate\Support\Facades\Facade;

class Study extends Facade
{
    /**
     * 获取组件的注册名称
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'study';
    }
}