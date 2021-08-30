@props([
    'title',
    'subtitle' => null,
    'description',
    'tags' => [],
    'titleClasses' => '',
    'tagClasses' => ''
])

@php
    $hasLink = $attributes->has('href');
@endphp

<article>
    <a {{ $attributes->class('flex flex-col group') }} target="_blank">

        {{-- Title --}}
        <h3 class="font-black text-xl leading-7 flex items-center">
            <span @if ($hasLink) class="{{ $titleClasses }} transition-all" @endif>{{ $title }}</span>

            {{-- Right arrow --}}
            @if ($hasLink)
                <span class="{{ $titleClasses }} transition-all font-normal inline-block opacity-0 group-hover:opacity-100 group-hover:translate-x-1">
                    &rarr;
                </span>
            @endif
        </h3>
        @isset ($subtitle)
            <span class="text-gray-400 text-sm mb-2 font-normal">{{ $subtitle }}</span>
        @endisset

        {{-- Description --}}
        <p {{ $description->attributes->class('font-normal leading-6') }}>
            {{ $description }}
        </p>
    </a>
    @if (count($tags) > 0)
        <div class="mt-2 text-xs flex flex-wrap gap-2 text-gray-400">
            @foreach ($tags as $tag => $link)
                <a href="{{ $link }}" target="_blank" class="group">
                    <span class="px-3 py-1 bg-gray-400 rounded-full inline-block {{ $tagClasses }} !bg-opacity-20 transition-colors">
                        {{ $tag }}
                    </span>
                </a>
            @endforeach
        </div>
    @endif
</article>
