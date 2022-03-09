<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Zapatos') }}
        </h2>
    </x-slot>

    <!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
{{-- https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,b_rgb:f5f5f5/a0a300da-2e16-4483-ba64-9815cf0598ac/air-force-1-07-zapatillas-lKPQ6q.png
    https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,b_rgb:f5f5f5/ef4dbed6-c621-4879-8db3-f87296bfb570/blazer-mid-77-vintage-zapatillas-3x983t.png
    https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,b_rgb:f5f5f5/25fd1779-ad4b-4497-aa54-bb094cc28283/acg-mountain-fly-low-zapatillas-8wT9Qq.png
    https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,b_rgb:f5f5f5/4a4e4848-4ecc-48d2-8853-82b1999e9128/zion-1-zapatillas-de-baloncesto-2WjGPX.png
    https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,b_rgb:f5f5f5/28f375fb-b67e-48bf-9557-22aaefc02e12/sb-bruin-react-zapatillas-de-skateboard-xcCPh2.png --}}
-->
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="max-w-2xl mx-auto py-8 px-4 sm:py-8 sm:px-6 lg:max-w-7xl lg:px-8">
                <h2 class="sr-only">Products</h2>

                <!-- Variable Session -->
                @if (session()->has('error'))
                    <div class="bg-red-100 p-4 mb-4 text-sm text-red-700" role="alert">
                        <span class="font-semibold">{{ session('error') }}</span>
                    </div>
                @endif

                @if (session()->has('success'))
                    <div class="bg-green-100 p-4 mb-4 text-sm text-green-700" role="alert">
                        <span class="font-semibold">{{ session('success') }}</span>
                    </div>
                @endif

                <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                    @foreach ($zapatos as $zapato)
                        <div>
                            <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                                <img src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,b_rgb:f5f5f5/a0a300da-2e16-4483-ba64-9815cf0598ac/air-force-1-07-zapatillas-lKPQ6q.png" class="w-full h-full object-center object-cover group-hover:opacity-75">
                            </div>
                            <div class="flex justify-between items-stretch">
                                <div>
                                    <h3 class="mt-4 text-lg font-semibold text-gray-700">{{ $zapato->denominacion }}</h3>
                                    <p class="mt-1 text-sm font-medium text-gray-900">{{ $zapato->precio }} €</p>
                                </div>
                                <form class="flex content-center mr-4" action="{{ route('carritos.add', $zapato) }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <button type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
