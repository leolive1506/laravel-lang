<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transactions') }} {{  __('transaction.original_amount') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="px-4 sm:px-6 lg:px-8">
                        @if (isset($response['entities']))
                            @foreach ($response['entities'] as $key => $collection)
                                @if ($key !== 'messages' && !empty($response['entities'][$key]))
                                    <div class="sm:flex-auto mt-8">
                                        <h1 class="text-xl font-semibold text-gray-900 capitalize">{{ $key }}
                                        </h1>
                                    </div>

                                    <div class="mt-8 flex flex-col">
                                        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="inline-block min-w-full py-2 align-middle">
                                                <div class="overflow-hidden shadow-sm ring-1 ring-black ring-opacity-5">
                                                    <x-table.table>
                                                        <x-table.thead>
                                                            <x-table.tr>
                                                                @if (array_key_exists(0, $collection))
                                                                    @foreach ($collection[0] as $keyTh => $value)
                                                                        <x-table.th :first="$loop->first">
                                                                            {{ $keyTh }}</x-table.th>
                                                                    @endforeach
                                                                @else
                                                                    @foreach ($collection as $keyTh => $value)
                                                                        <x-table.th :first="$loop->first">
                                                                            {{ $keyTh }}</x-table.th>
                                                                    @endforeach
                                                                @endif
                                                                <x-table.th-actions />
                                                            </x-table.tr>
                                                        </x-table.thead>
                                                        <tbody class="divide-y divide-gray-200 bg-white">
                                                            @if (array_key_exists(0, $collection))
                                                                @foreach ($collection as $keyCollection => $item)
                                                                    <x-table.tr>
                                                                        @foreach ($item as $key => $value)
                                                                            @if ($loop->first)
                                                                                <x-table.td-first>{{ $value }}
                                                                                </x-table.td-first>
                                                                            @else
                                                                                <x-table.td>{{ $value }}
                                                                                </x-table.td>
                                                                            @endif
                                                                        @endforeach

                                                                        <x-table.td-actions>
                                                                            <button type="button"
                                                                                class="text-indigo-600 hover:text-indigo-900">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    fill="none" viewBox="0 0 24 24"
                                                                                    stroke-width="1.5"
                                                                                    stroke="currentColor"
                                                                                    class="w-6 h-6">
                                                                                    <path stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                                                                </svg>
                                                                            </button>
                                                                        </x-table.td-actions>
                                                                    </x-table.tr>
                                                                @endforeach
                                                            @else
                                                                <x-table.tr>
                                                                    @foreach ($collection as $value)
                                                                        @if ($loop->first)
                                                                            <x-table.td-first>{!! $value !!}
                                                                            </x-table.td-first>
                                                                        @else
                                                                            <x-table.td>{!! $value !!}
                                                                            </x-table.td>
                                                                        @endif
                                                                    @endforeach
                                                                </x-table.tr>
                                                            @endif
                                                        </tbody>
                                                    </x-table.table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
