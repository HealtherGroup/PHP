<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * 视图composer共享后台菜单数据
         */
        view()->composer(
            'layouts.partials.sidebar', 'App\Http\ViewComposers\MenuComposer'
        );
        $data = \DB::table('classification')->where('pid','0')->get();
        //查询二级
        $data1 = \DB::table('classification')->where('pid','<>','0')->get();

        //dd($data);
        view()->share(array('data' => $data,'data1' => $data1));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
