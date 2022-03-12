<?php

namespace App\Providers;

// use Illuminate\Auth\Access\Gate;
use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        PaginationPaginator::useBootstrap();

        Gate::define('admin', function (User $user) {
            return $user->role == 'Admin';
        });

        Blade::directive('convert', function ($money) {
            return "<?php echo number_format($money, 0, ',', '.'); ?>";
        });
    }
}
