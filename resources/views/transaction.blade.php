<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Buscar Transacción') }}
        </h2>
    </x-slot>

    @php
        $transaction = session('transaction');
    @endphp

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <!-- Formulario de búsqueda -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6 transition-colors duration-200">
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-4 text-gray-900 dark:text-gray-100">Buscar Transacción</h3>
                    <form method="POST" action="{{ route('transaction.show') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="transaction_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">ID de Transacción</label>
                            <input type="text" class="border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 focus:border-primary focus:ring-primary rounded-md shadow-sm block w-full"
                                id="transaction_id" name="transaction_id" placeholder="Ingresa el ID" required>
                        </div>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-primary hover:bg-primary-600 focus:bg-primary-600 active:bg-primary-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            Consultar
                        </button>
                    </form>
                </div>
            </div>

            <!-- Resultado del estado -->
            @if(session('result'))
                <div class="bg-primary-100 dark:bg-primary-900/30 border border-primary-400 dark:border-primary-700 text-primary-700 dark:text-primary-400 px-4 py-3 rounded relative mb-6 alert-box" role="alert">
                    <strong class="font-bold">{{ session('result') }}</strong>
                    <button onclick="this.parentElement.style.display='none';" class="absolute top-3 right-3 text-primary-700 dark:text-primary-400 hover:text-primary-900 dark:hover:text-primary-200 font-bold text-xl leading-none" aria-label="Cerrar alerta">
                        ×
                    </button>
                </div>
            @endif

            <!-- Datos de la transacción -->
            @isset($transaction)
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg transition-colors duration-200">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-4 text-gray-900 dark:text-gray-100">Información de la Transacción</h3>
                        <div class="space-y-3">
                            <div>
                                <span class="font-semibold text-gray-700 dark:text-gray-300">ID:</span>
                                <span class="text-gray-900 dark:text-gray-100">{{ $transaction['transactionId'] }}</span>
                            </div>
                            <div>
                                <span class="font-semibold text-gray-700 dark:text-gray-300">Monto:</span>
                                <span class="text-gray-900 dark:text-gray-100">${{ number_format($transaction['amount'], 2) }}</span>
                            </div>
                            <div>
                                <span class="font-semibold text-gray-700 dark:text-gray-300">Fecha:</span>
                                <span class="text-gray-900 dark:text-gray-100">{{ $transaction['createdAt'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endisset
        </div>
    </div>
</x-app-layout>
