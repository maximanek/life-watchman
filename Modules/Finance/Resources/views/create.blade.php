<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a class="bg-gray-500 px-6 py-2 text-sm rounded shadow bg-slate-300 hover:bg-slate-200 text-slate-500"
                       href="{{ route('finance.index') }}">{{ __('user.back') }}</a>
                    <form method="POST">
                        @csrf
                        <div class="mb-4">
                            <input
                                class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="is_income" type="checkbox" name="is_income" value="1">
                            <label class=" text-gray-700 text-sm font-bold mb-2" for="is_income">
                                {{ __('finance.income') }}
                            </label>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="date">
                                {{ __('finance.date') }}
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="date" type="date" name="date" placeholder="Date" required >
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="value">
                                {{ __('finance.value') }}
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="value" type="number" step="0.01" name="value" placeholder="Amount of money" required >
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                {{ __('finance.name') }}
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="name" type="text" name="name" placeholder="Name of payment" required >
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                {{ __('finance.mainCat') }}
                            </label>
                            <select
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="name" type="text" name="">
                                <option value="1">Other</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="sub_category_id">
                                {{ __('finance.subCat') }}
                            </label>
                            <select
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="sub_category_id" type="text" name="sub_category_id">
                                <option value="1">Other</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <input
                                class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="is_subscription" type="checkbox" name="is_subscription" value="1">
                            <label class=" text-gray-700 text-sm font-bold mb-2" for="is_subscription">
                                {{ __('finance.sub') }}
                            </label>
                        </div>

                        <div class="flex items-center justify-between">
                            <button
                                class="bg-gray-500 px-6 py-2 text-sm rounded shadow bg-slate-300 hover:bg-slate-200 text-slate-500"
                                type="submit">
                                {{ __('user.submit') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
