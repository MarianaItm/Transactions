<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Recargar Saldo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Card de Saldo Actual -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6 transition-colors duration-200">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-2">Bienvenido, {{ $user['name'] }}</h3>
                    <div class="flex items-center gap-2">
                        <span class="text-gray-600 dark:text-gray-400">Saldo actual:</span>
                        <span class="text-2xl font-bold text-green-600 dark:text-green-400">${{ number_format($user['balance'], 2) }}</span>
                    </div>
                </div>
            </div>

            <!-- Card de Recarga con PayPal -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6 transition-colors duration-200">
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-4 text-gray-900 dark:text-gray-100">Recargar saldo con PayPal</h3>

                    @if(session('result'))
                        <div class="mb-4 bg-green-100 dark:bg-green-900/30 border border-green-400 dark:border-green-700 text-green-700 dark:text-green-400 px-4 py-3 rounded relative alert-box" role="alert">
                            <span class="block sm:inline">{{ session('result') }}</span>
                            <button onclick="this.parentElement.style.display='none';" class="absolute top-3 right-3 text-green-700 dark:text-green-400 hover:text-green-900 dark:hover:text-green-200 font-bold text-xl leading-none" aria-label="Cerrar alerta">
                                ×
                            </button>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="mb-4 bg-red-100 dark:bg-red-900/30 border border-red-400 dark:border-red-700 text-red-700 dark:text-red-400 px-4 py-3 rounded relative alert-box" role="alert">
                            <span class="block sm:inline">{{ session('error') }}</span>
                            <button onclick="this.parentElement.style.display='none';" class="absolute top-3 right-3 text-red-700 dark:text-red-400 hover:text-red-900 dark:hover:text-red-200 font-bold text-xl leading-none" aria-label="Cerrar alerta">
                                ×
                            </button>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('topup.create') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="amount" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Monto a recargar</label>
                            <input type="number" name="amount" id="amount"
                                class="border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 focus:border-primary focus:ring-primary rounded-md shadow-sm block w-full"
                                placeholder="Ej: 10.00" step="0.01" min="1" required>
                        </div>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-primary hover:bg-primary-600 focus:bg-primary-600 active:bg-primary-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            Pagar con PayPal
                        </button>
                    </form>
                </div>
            </div>

            <!-- Card de Historial -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg transition-colors duration-200">
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-4 text-gray-900 dark:text-gray-100">Historial de transacciones</h3>

                    @if(empty($user['transactions']))
                        <p class="text-gray-600 dark:text-gray-400">No hay transacciones registradas.</p>
                    @else
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">#</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Monto</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Fecha</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Estado</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                    @foreach($user['transactions'] as $transaction)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">{{ $transaction['transactionId'] }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">${{ number_format($transaction['amount'], 2) }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">{{ $transaction['createdAt'] }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $transaction['status'] === 'completed' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                                {{ ucfirst($transaction['status']) }}
                                            </span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
