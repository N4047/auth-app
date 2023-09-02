<x-dashboard-layout>

    <x-slot name="title">Checkout</x-slot>

    <div class="p-4 md:p-6 lg:p-8">
        <h1 class="text-2xl md:text-3xl lg:text-4xl font-semibold mb-6">{{__('utils.checkout')}}</h1>
        <div class="shadow-md rounded-lg overflow-x-auto">
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th class="px-4 md:px-6 py-3 md:py-4 lg:py-5 border border-gray-400">{{__('utils.product')}}
                        </th>
                        <th class="px-4 md:px-6 py-3 md:py-4 lg:py-5 border border-gray-400">{{__('utils.price')}}</th>
                        <th class="px-4 md:px-6 py-3 md:py-4 lg:py-5 border border-gray-400">{{__('utils.period')}}</th>
                        <th class="px-4 md:px-6 py-3 md:py-4 lg:py-5 border border-gray-400">{{__('utils.total')}}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td
                            class="px-4 md:px-6 py-3 md:py-4 lg:py-5 text-center border border-gray-400 hover:bg-gray-300">
                            {{$product}}</td>
                        <td
                            class="px-4 md:px-6 py-3 md:py-4 lg:py-5 text-center border border-gray-400 hover:bg-gray-300">
                            {{$price}}$</td>
                        <td
                            class="px-4 md:px-6 py-3 md:py-4 lg:py-5 text-center border border-gray-400 hover:bg-gray-300">
                            {{$period}}</td>
                        <td
                            class="px-4 md:px-6 py-3 md:py-4 lg:py-5 text-center border border-gray-400 hover:bg-gray-300">
                            {{$price}}$</td>
                    </tr>
                </tbody>
            </table>
            <div class="px-4 md:px-6 py-4 md:py-6 lg:py-8">
                <p class="text-lg md:text-xl lg:text-2xl font-semibold">{{__('utils.total')}}: {{$price}}$</p>
            </div>
        </div>
        <button
            class="w-full md:w-auto bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 mt-4 rounded-lg focus:outline-none">
            {{__('utils.proceed_to_payment')}}
        </button>
    </div>

</x-dashboard-layout>