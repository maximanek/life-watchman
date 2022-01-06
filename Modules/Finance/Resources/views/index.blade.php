<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('finance.create') }}">{{ __('add') }}</a>
                    <table class="table-fixed">
                        <thead>
                        <tr>
                            <td>{{ __('date') }}</td>
                            <td>{{ __('value') }}</td>
                            <td>{{ __('name') }}</td>
                            <td>{{ __('subCat') }}</td>
                            <td>{{ __('mainCat') }}</td>
                            <td>{{ __('sub') }}</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($payments as $payment)
                            <tr>
                                <td>{{ $payment->created_at->format('d/m/Y') }}</td>
                                <td>{{ $payment->value }}</td>
                                <td>{{ $payment->name }}</td>
                                <td>{{ $payment->financeSubCategory->name }}</td>
                                <td>{{ $payment->financeSubCategory->financeMainCategory->name }}</td>
                                <td>{{ $payment->is_subscription }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
