<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Factura {{ $lineas->first()->factura_id }}
            </h2>
            <h2 class="font-medium text-gray-800 leading-tight">
                Comprado el {{ $lineas->first()->factura->created_at->tz('Europe/Madrid')->isoFormat('LL, HH:mm') }}
            </h2>
        </div>
    </x-slot>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="max-w-2xl mx-auto py-8 px-4 sm:py-8 sm:px-6 lg:max-w-7xl lg:px-8">
                <h2 class="sr-only">Factura</h2>

                <ul role="list" class="-my-6 divide-y divide-gray-200">

                    @foreach ($lineas as $linea)
                        <li class="flex py-6">
                        <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                            <img src="{{ $linea->zapato->imagen }}" class="h-full w-full object-cover object-center">
                        </div>

                        <div class="ml-4 flex flex-1 flex-col">
                            <div>
                            <div class="flex justify-between text-base font-semibold text-gray-900">
                                <h3>
                                <a href="{{ route('zapatos.show', $linea->zapato) }}">{{ $linea->zapato->denominacion }}</a>
                                </h3>
                                <p class="ml-4">{{ $linea->zapato->precio * $linea->cantidad }} €</p>
                            </div>
                            <p class="mt-1 text-sm font-medium text-gray-600">{{ $linea->zapato->precio }} €</p>
                            </div>
                            <div class="flex flex-1 items-end justify-between text-sm">

                                <div class="flex">
                                    <div class="relative z-0 inline-flex -space-x-px">

                                        @if ($linea->cantidad == 1)
                                            <p class="text-sm font-normal">{{ $linea->cantidad }} unidad</p>
                                        @else
                                            <p class="text-sm font-normal">{{ $linea->cantidad }} unidades</p>
                                        @endif

                                    </div>
                                </div>

                            </div>
                        </div>
                        </li>

                        @php

                        @endphp

                    @endforeach

                    <!-- Mas productos... -->
                </ul>

                @php
                    $total = 0;
                    foreach ($lineas as $linea)
                        $total += $linea->zapato->precio * $linea->cantidad;
                @endphp

                <div class="border-t border-gray-200 mt-6 py-6 px-4 sm:px-6">
                    <div class="flex justify-between text-base font-medium text-gray-900">
                    <p class="font-bold">Total</p>
                    <p class="font-bold">{{ $total }} €</p>
                    </div>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>

