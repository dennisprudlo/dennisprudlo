<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=no">

        <title>{{ $title }} | dennisprudlo.com</title>

        {{-- General Meta Tags --}}
        <meta name="keywords"       content="dennisprudlo dennis prudlo personal website ios full stack web developer php laravel swift artisan ui ux">
        <meta name="description"    content="{{ $description }}">
        <meta name="copyright"      content="Copyright &copy; {{ now()->year }} Dennis Prudlo">
        <meta name="language"       content="{{ app()->getLocale() }}">
        <meta name="robots"         content="all">

        {{-- Open Graph Properties --}}
        <meta property="og:locale"      content="{{ app()->getLocale() }}" />
        <meta property="og:site_name"   content="dennisprudlo.com" />
        <meta property="og:title"       content="{{ $title }}" />
        <meta property="og:description" content="{{ $description }}" />
        <meta property="og:image"       content="{{ asset('img/avatar.jpg') }}" />
        <meta property="og:url"         content="{{ url()->current() }}" />
        <meta property="og:type"        content="website" />

        {{-- Twitter Properties --}}
        <meta name="twitter:card"           content="summary_large_image" />
        <meta name="twitter:title"          content="{{ $title }}" />
        <meta name="twitter:description"    content="{{ $description }}" />
        <meta name="twitter:image"          content="{{ asset('img/avatar.jpg') }}" />
        <meta name="twitter:site"           content="@dennisprudlo" />
        <meta name="twitter:creator"        content="@dennisprudlo" />

        <script src="https://kit.fontawesome.com/e52a4612a5.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="{{ mix('css/app.min.css') }}">
    </head>
    <body class="bg-gray-100 text-gray-600 dark:bg-gray-900 dark:text-gray-300">
        <main class="max-w-4xl mx-auto px-5 py-8 sm:px-8 md:px-12 md:py-20 space-y-12 md:space-y-16">

            {{-- Heading --}}
            <x-section class="mt-2 md:mt-6">
                <x-slot name="title" class="!opacity-100">
                    <img src="{{ asset('img/avatar.jpg') }}" class="md:ml-auto object-cover w-32 h-32 md:w-48 md:h-48 rounded-full" alt="Dennis Prudlo" />
                </x-slot>

                <strong class="text-3xl text-gray-900 dark:text-gray-50">{{ $title }}</strong>
                <p class="font-normal">{{ $description }}</p>
                <p class="font-normal">
                    While developing websites, I found out that the overall design and usability is of great importance to me.
                    Turns out, I am a UI/UX enthusiast. User experience is the name of the game!
                </p>
                <div class="inline-block space-x-3 text-gray-400 dark:text-gray-500 text-xl">
                    <a href="https://github.com/dennisprudlo" class="hover:text-brand-github focus:text-brand-github dark:hover:text-gray-50 dark:focus:text-gray-50 transition-colors">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://instagram.com/dennisprudlo" class="hover:text-brand-instagram focus:text-brand-instagram transition-colors">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://twitter.com/dennisprudlo" class="hover:text-brand-twitter focus:text-brand-twitter transition-colors">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </x-section>

            {{-- Work --}}
            <x-section>
                <x-slot name="title">Work</x-slot>

                {{-- roublez --}}
                <x-timeline-item href="https://staging.roublez.com">
                    <x-slot name="title" class="group-hover:text-brand-roublez">
                        roublez
                    </x-slot>
                    <x-slot name="description">
                        Building an expenditure tracking software as a service for managing budgets, tracking expenses and overviewing capital investments.
                    </x-slot>
                    <x-slot name="tags" class="group-hover:text-brand-roublez group-hover:bg-brand-roublez">
                        laravel,livewire,tailwind,alpine,typescript,chartjs
                    </x-slot>
                </x-timeline-item>

                {{-- writeaguide --}}
                <x-timeline-item href="https://writeaguide.com">
                    <x-slot name="title" class="group-hover:text-brand-writeaguide">
                        writeaguide
                    </x-slot>
                    <x-slot name="description">
                        Lead developer at writeaguide – a knowledge management platform combining knowledge base, learning management and help centers.
                    </x-slot>
                    <x-slot name="tags" class="group-hover:text-brand-writeaguide group-hover:bg-brand-writeaguide">
                        laravel,livewire,tailwind,alpine
                    </x-slot>
                </x-timeline-item>
            </x-section>

            {{-- Education --}}
            <x-section>
                <x-slot name="title">Education</x-slot>

                {{-- University --}}
                <x-timeline-item title="BSc in Business Computing">
                    <x-slot name="subtitle">
                        at Hochschule für Technik und Wirtschaft Berlin
                    </x-slot>
                    <x-slot name="description" class="italic">
                        &quot;Software development and design of information systems for business and administration as well as the transfer of profound knowledge in economics are the main focus of the of the application-oriented training.&quot;
                    </x-slot>
                </x-timeline-item>
            </x-section>
        </main>
    </body>
</html>
