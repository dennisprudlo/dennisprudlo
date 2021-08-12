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
    <body class="bg-gray-100 text-gray-600">

        <main class="max-w-4xl mx-auto px-5 py-8 sm:px-8 md:px-12 md:py-20 space-y-8 md:space-y-12">

            {{-- Heading --}}
            <x-section class="md:mt-6">
                <x-slot name="title">
                    <img src="{{ asset('img/avatar.jpg') }}" class="md:ml-auto object-cover w-32 h-32 md:w-48 md:h-48 rounded-full" alt="Dennis Prudlo" />
                </x-slot>

                <strong class="text-3xl text-black">{{ $title }}</strong>
                <p>{{ $description }}</p>

                <p>
                    While developing websites, I found out that the overall design and usability is of great importance to me.
                    Turns out, I am a UI/UX enthusiast. User experience is the name of the game!
                </p>
                <div class="inline-block space-x-3 text-gray-400">
                    <a href="https://github.com/dennisprudlo" class="hover:text-[#333333] focus:text-[#333333] transition-colors">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://instagram.com/dennisprudlo" class="hover:text-[#E1306C] focus:text-[#E1306C] transition-colors">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://twitter.com/dennisprudlo" class="hover:text-[#1DA1F2] focus:text-[#1DA1F2] transition-colors">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </x-section>

            {{-- Timeline --}}
            <x-section title="Work">
                <x-project
                    title="roublez"
                    description="An expenditure tracking software as a service for managing budgets, tracking expenses and overviewing capital investments."
                    href="https://staging.roublez.com" />
                <x-project
                    title="writeaguide"
                    description="Lead developer at writeaguide – a knowledge management platform combining knowledge base, learning management and help centers."
                    href="https://writeaguide.com" />
            </x-section>

        </main>
    </body>
</html>
