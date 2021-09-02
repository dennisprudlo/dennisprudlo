<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        $this->app->singleton('tags', fn () => new class {
            const TAGS = [
                'laravel' => [ 'Laravel', 'https://laravel.com/' ],
                'livewire' => [ 'Livewire', 'https://laravel-livewire.com/' ],
                'tailwind' => [ 'Tailwind', 'https://tailwindcss.com/' ],
                'alpine' => [ 'Alpine.js', 'https://alpinejs.dev/' ],
                'typescript' => [ 'TypeScript', 'https://www.typescriptlang.org/' ],
                'chartjs' => [ 'Chart.js', 'https://www.chartjs.org/' ]
            ];

            public function label (string $tag) : string {
                return self::TAGS[$tag][0];
            }

            public function link (string $tag) : string {
                return self::TAGS[$tag][1];
            }
        });
    }
}
