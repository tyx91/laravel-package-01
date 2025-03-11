<?php
/**
 * Created by PhpStorm.
 *
 * @author Tian.Yuxing
 * @email tianyuxing@sciall.org.cn
 * Date: 2025/3/10
 * Time: 21:43
 */

namespace Tian\TestLaravelPackage;
use Illuminate\Support\ServiceProvider;

/**
 * zqzx\ExcelPro StudyServiceProvider.
 */
class StudyServiceProvider extends ServiceProvider
{


    /**
     * 注册服务提供者
     *
     * @return void
     */
    public function register()
    {
        // 合并配置文件
        $this->mergeConfigFrom(
            __DIR__.'/../config/study.php', 'study'
        );
        
        // 注册 Study 类到服务容器
        $this->app->singleton('study', function ($app) {
            return new Study();
        });
    }

    /**
     * 引导服务
     */
    public function boot()
    {
        // 发布配置文件
        $this->publishes([
            __DIR__.'/../config/study.php' => config_path('study.php'),
        ], 'study-config');
        
        // 发布视图文件
        // $this->publishes([
        //     __DIR__.'/../resources/views' => resource_path('views/vendor/study'),
        // ], 'study-views');
        
        // 发布迁移文件
        // $this->publishes([
        //     __DIR__.'/../database/migrations' => database_path('migrations'),
        // ], 'study-migrations');
        
        // 发布语言文件
        // $this->publishes([
        //     __DIR__.'/../resources/lang' => resource_path('lang/vendor/study'),
        // ], 'study-lang');
        

         // 发布公共资源（如JS、CSS、图片等）
        //  $this->publishes([
        //     __DIR__.'/../public' => public_path('vendor/study'),
        // ], 'study-assets');
        
        // 如果有视图，可以加载视图
        //Laravel 会在您扩展包的 resources/views 目录中查找视图文件
        //用户可以使用 view('study::viewname') 语法来渲染您扩展包中的视图
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'study');

        
        // 如果有路由，可以加载路由
        // $this->loadRoutesFrom(__DIR__.'/routes.php');
        
        // 如果有迁移文件，可以加载迁移文件
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}