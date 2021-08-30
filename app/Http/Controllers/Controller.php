<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Handles an incoming request
     *
     * @return View
     */
    public function handle () : View {
        $work = [
            'roublez' => (object) [
                'url' => 'https://staging.roublez.com',
                'description' => 'Building an expenditure tracking software as a service for managing budgets, tracking expenses and overviewing capital investments.',
                'tags' => [
                    'Laravel' => 'https://laravel.com/',
                    'Livewire' => 'https://laravel-livewire.com/',
                    'Tailwind' => 'https://tailwindcss.com/',
                    'Alpine.js' => 'https://alpinejs.dev/',
                    'TypeScript' => 'https://www.typescriptlang.org/',
                    'Chart.js' => 'https://www.chartjs.org/'
                ],
                'text' => 'group-hover:text-[#3B82F6]',
                'background' => 'group-hover:bg-[#3B82F6]'
            ],
            'writeaguide' => (object) [
                'url' => 'https://writeaguide.com',
                'description' => 'Lead developer at writeaguide – a knowledge management platform combining knowledge base, learning management and help centers.',
                'tags' => [
                    'Laravel' => 'https://laravel.com/',
                    'Livewire' => 'https://laravel-livewire.com/',
                    'Tailwind' => 'https://tailwindcss.com/',
                    'Alpine.js' => 'https://alpinejs.dev/',
                ],
                'text' => 'group-hover:text-[#20BA82]',
                'background' => 'group-hover:bg-[#20BA82]'
            ]
        ];

        return view('index', [
            'title' => 'Hi, I am Dennis Prudlo',
            'description' => 'I am a highly motivated full-stack web & iOS developer with a keen eye for UI/UX based in Berlin.',
            'work' => $work
        ]);
    }
}
