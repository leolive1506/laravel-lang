@props(['first' => false])
<th {{ $attributes->merge([
        'class' => ($first ? 'py-3.5 pl-4 pr-3 sm:pl-6 lg:pl-8' : 'px-3 py-3.5') . ' text-left text-sm font-semibold text-gray-900'
    ]) }}
    scope="col"
>
    {{ $slot }}
</th>
