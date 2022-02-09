<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a class="bg-gray-100" href="{{ route('finance.create') }}">{{ __('user.add') }}</a>
                    <table class="table-fixed">
                        <thead>
                        <tr>
                            <td>{{ __('finance.date') }}</td>
                            <td>{{ __('finance.value') }}</td>
                            <td>{{ __('finance.name') }}</td>
                            <td>{{ __('finance.subCat') }}</td>
                            <td>{{ __('finance.mainCat') }}</td>
                            <td>{{ __('finance.sub') }}</td>
                            <td>{{ __('finance.actions') }}</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($payments as $payment)
                            <tr>
                                <td>{{ $payment->date }}</td>
                                <td>{{ $payment->value }}</td>
                                <td>{{ $payment->name }}</td>
                                <td>{{ $payment->financeSubCategory->name }}</td>
                                <td>{{ $payment->financeSubCategory->financeMainCategory->name }}</td>
                                <td>{{ $payment->is_subscription }}</td>
                                <td>
                                    <a href="{{ route('finance.edit', $payment->id) }}">{{ __('finance.edit') }}</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
