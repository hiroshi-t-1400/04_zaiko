<?php

namespace App\Providers;
use App\Repositories\Implementations\ItemRepository;
use App\Repositories\Constracts\ItemRepositoryInterface;

use App\Services\Contracts\ItemServiceInterface;
use App\Services\Implementations\ItemService;

use App\Services\Contracts\TableDisplayServiceInterface;
use App\Services\Implementations\TableDisplayService;
use App\Enums\ItemColumn;

use Illuminate\Support\ServiceProvider;
use Laravel\Prompts\Table;

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

        //バインドする
        $this->app->bind(TableDisplayServiceInterface::class, TableDisplayService::class);


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
