<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Carrito') }}
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="max-w-2xl mx-auto py-8 px-4 sm:py-8 sm:px-6 lg:max-w-7xl lg:px-8">
                <h2 class="sr-only">Carrito</h2>

                <ul role="list" class="-my-6 divide-y divide-gray-200">

                    @foreach ($carritos as $carrito)
                        <li class="flex py-6">
                        <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                            <img src="{{ $carrito->zapato->imagen }}" class="h-full w-full object-cover object-center">
                        </div>

                        <div class="ml-4 flex flex-1 flex-col">
                            <div>
                            <div class="flex justify-between text-base font-semibold text-gray-900">
                                <h3>
                                <a href="{{ route('zapatos.show', $carrito->zapato) }}">{{ $carrito->zapato->denominacion }}</a>
                                </h3>
                                <p class="ml-4">{{ $carrito->zapato->precio * $carrito->cantidad }} €</p>
                            </div>
                            <p class="mt-1 text-sm font-medium text-gray-600">{{ $carrito->zapato->precio }} €</p>
                            </div>
                            <div class="flex flex-1 items-end justify-between text-sm">
                                <form action="{{ route('carritos.delete', $carrito->zapato) }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="font-medium text-gray-600 hover:text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </form>

                                <div class="flex">
                                    <div class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px">
                                        <form action="{{ route('carritos.restar', $carrito->zapato) }}" method="POST" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                            @csrf
                                            @method('POST')
                                            <button type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4 m 8 8 H 4" />
                                                </svg>
                                            </button>
                                        </form>

                                        <p class="bg-white border-gray-300 text-gray-500 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> {{ $carrito->cantidad }} </p>

                                        <form action="{{ route('carritos.sumar', $carrito->zapato) }}" method="POST" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                            @csrf
                                            @method('POST')
                                            <button type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                                </svg>
                                            </button>
                                        </form>
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
                    foreach ($carritos as $carrito)
                        $total += $carrito->zapato->precio * $carrito->cantidad;
                @endphp

                @if ($carritos->isNotEmpty())
                    <div class="border-t border-gray-200 mt-6 py-6 px-4 sm:px-6">
                        <div class="flex justify-between text-base font-medium text-gray-900">
                        <p class="font-bold">Total</p>
                        <p class="font-bold">{{ $total }} €</p>
                        </div>
                        <p class="mt-0.5 text-sm text-gray-500">Gastos de envío calculados al pasar por caja.</p>
                        <div class="mt-6">
                        <a href="#" class="flex items-center justify-center rounded-md border border-transparent bg-gray-600 px-6 py-3 text-base font-semibold text-white shadow-sm hover:bg-gray-700">Pasar por caja</a>
                        </div>
                        <div class="mt-6 flex justify-between text-center text-sm text-gray-500">
                            <div>
                                <form action="{{ route('carritos.vaciar') }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="rounded-md border text-base shadow-sm hover:bg-gray-100 px-3 py-1 text-center inline-flex items-center font-medium text-gray-600 hover:text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-5 mr-2 -ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                        Vaciar carrito
                                    </button>
                                </form>
                            </div>
                            <div>
                                <p>
                                    <form action="{{ route('zapatos.index') }}" method="GET">
                                        <button type="submit" class="rounded-md border text-base shadow-sm hover:bg-gray-100 px-3 py-1 text-center inline-flex items-center font-medium text-gray-600 hover:text-gray-500">
                                            Continuar comprando
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-5 ml-2 -mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                            </svg>
                                        </button>
                                    </form>
                                </p>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
                        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                            <span class="block">Carrito vacío.</span>
                            <a class="block text-gray-400">Visita nuestro catálogo.</span>
                        </h2>
                        <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                            <div class="inline-flex rounded-md shadow">
                                <a href="{{ route('zapatos.index') }}" class="inline-flex items-center justify-center rounded-md border border-transparent bg-gray-600 px-6 py-3 text-base font-semibold text-white shadow-sm hover:bg-gray-700"> Catálogo </a>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>
