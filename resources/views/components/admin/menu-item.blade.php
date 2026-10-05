@props([
    'href' => '#',
    'label' => '',
    'icon' => null,
])

@php
    $isActive = request()->url() === $href;
@endphp

<li>
    <a
        href="{{ $href }}"
        @class([
            'flex items-center p-2 text-base font-medium rounded-lg group transition duration-75',
            'bg-gray-100 text-gray-900 dark:bg-gray-700 dark:text-white' => $isActive,
            'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' => ! $isActive,
        ])
    >
        @if ($icon)
            <div @class([
                'transition duration-75',
                'text-gray-900 dark:text-white' => $isActive,
                'text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white' => ! $isActive,
            ])>
                {!! $icon !!}
            </div>
        @endif

        <span class="ml-3">{{ $label }}</span>
    </a>
</li>
