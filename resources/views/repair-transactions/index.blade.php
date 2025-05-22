@extends('layouts.app')

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>Repair Transactions</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="d-flex justify-content-between mb-3">
                        <a href="{{ route('repair-transactions.pending') }}" class="btn btn-warning">Pending Repair Transactions</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>{{ __('ID') }}</th>
                                    <th>{{ __('Inspection Barcode') }}</th>
                                    <th>{{ __('Tire Type') }}</th>
                                    <th>{{ __('Decision') }}</th>
                                    <th>{{ __('Repair Steps') }}</th>
                                    <th>{{ __('Created At') }}</th>
                                    <th>{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($repairTransactions as $transaction)
                                    <tr>
                                        <td>{{ $transaction->id }}</td>
                                        <td>{{ $transaction->inspectionTransaction->barcode }}</td>
                                        <td>{{ $transaction->inspectionTransaction->tireType->name_en }}</td>
                                        <td>
                                            @if ($transaction->decision === 'repair')
                                                <span class="badge bg-success">{{ $transaction->decision }}</span>
                                            @elseif ($transaction->decision === 'scrap')
                                                <span class="badge bg-danger">{{ $transaction->decision }}</span>
                                            @else
                                                <span class="badge bg-warning">{{ $transaction->decision }}</span>
                                            @endif
                                        </td>
                                        <td>{{ $transaction->repairSteps->count() }}</td>
                                        <td>{{ $transaction->created_at->format('Y-m-d') }}</td>
                                        <td>
                                                <a href="{{ route('repair-transactions.show', $transaction) }}" class="btn btn-info btn-sm">{{ __('View') }}</a>
                                                <a href="{{ route('repair-transactions.edit', $transaction) }}" class="btn btn-warning btn-sm">{{ __('Edit') }}</a>
                                                <form action="{{ route('repair-transactions.destroy', $transaction) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this repair transaction?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">{{ __('Delete') }}</button>
                                                </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">{{ __('No repair transactions found.') }}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
