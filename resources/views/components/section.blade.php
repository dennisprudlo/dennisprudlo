@props([ 'title' ])

<section class="flex flex-col gap-4 md:flex-row md:gap-8">
    <aside class="text-xl font-bold text-gray-400 md:w-1/3 md:text-right leading-7">
        {{ $title }}
    </aside>
    <div {{ $attributes->class('space-y-4 text-base font-semibold md:w-2/3 leading-7') }}>
        {{ $slot }}
    </div>
</section>
