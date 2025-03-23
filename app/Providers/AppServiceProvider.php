<?php

namespace App\Providers;
use App\Repositories\Implementations\ItemRepository;
use App\Repositories\Constracts\ItemRepositoryInterface;
use App\Services\Contracts\ItemServiceInterface;
use App\Services\Implementations\ItemService;

use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     * アプリ起動時に実行される
     */
    public function register(): void
    {

        //ItemRepositryInterfaceにItemRepositoryをバインドする
        $this->app->bind(ItemRepositoryInterface::class, ItemRepository::class);

        //ItemServiceInterfaceにItemServiceをバインドする
        $this->app->bind(ItemServiceInterface::class, ItemService::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //

    }
}
