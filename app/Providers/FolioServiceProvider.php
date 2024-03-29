<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Folio\Folio;

final class FolioServiceProvider extends ServiceProvider
{
    public function register(): void
    {

    }

    public function boot(): void
    {
        Folio::path(resource_path('views/pages'))->middleware([
            '*' => [

            ],
        ]);
    }
}
