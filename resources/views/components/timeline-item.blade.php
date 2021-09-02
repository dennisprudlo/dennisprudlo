@props([
    'title',
    'subtitle' => null,
    'description'
])

@php
    $hasLink = $attributes->has('href');
@endphp

<article>
    <a {{ $attributes->class('flex flex-col group') }} target="_blank">

        {{-- Title --}}
        <h3 class="font-black text-xl leading-7 flex items-center text-gray-900 dark:text-gray-50">
            <span @if ($hasLink) {{ $title->attributes->class('transition-all') }} @endif>
                {{ $title }}
            </span>

            {{-- Right arrow --}}
            @if ($hasLink)
                <span {{ $title->attributes->class('transition-all font-normal inline-block opacity-0 group-hover:opacity-100 group-hover:translate-x-1') }}>
                    &rarr;
                </span>
            @endif
        </h3>
        @isset ($subtitle)
            <span class="opacity-50 text-sm mb-2 font-normal">{{ $subtitle }}</span>
        @endisset

        {{-- Description --}}
        <p {{ $description->attributes->class('font-normal leading-7') }}>
            {{ $description }}
        </p>
    </a>

    {{-- Tags --}}
    @if (isset($tags) && $tags->isNotEmpty())
        <div class="mt-3 text-xs flex flex-wrap gap-2 text-gray-400">
            @foreach (explode(',', $tags) as $tag)
                <a href="{{ app('tags')->link($tag) }}" target="_blank" class="group">
                    <span {{ $tags->attributes->class('px-3 py-1 bg-gray-400 rounded-full inline-block !bg-opacity-20 transition-colors') }}>
                        {{ app('tags')->label($tag) }}
                    </span>
                </a>
            @endforeach
        </div>
    @endif
</article>
