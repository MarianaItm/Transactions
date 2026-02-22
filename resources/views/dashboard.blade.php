<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg transition-colors duration-200">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-2">Bienvenido, {{ $user['name'] }}</h3>
                        <div class="flex items-center gap-2">
                            <span class="text-gray-600 dark:text-gray-400">Saldo actual:</span>
                            <span class="text-2xl font-bold text-green-600 dark:text-green-400">${{ number_format($user['balance'], 2) }}</span>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <a href="{{ route('topup.form') }}" class="inline-flex items-center px-4 py-2 bg-primary hover:bg-primary-600 focus:bg-primary-600 active:bg-primary-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            Recargar
                        </a>

                        <a href="{{ route('transaction.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-600 dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:bg-gray-700 dark:focus:bg-gray-600 active:bg-gray-900 dark:active:bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            Ver Transacciones
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
