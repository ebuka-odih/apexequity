@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Add / Remove Fund</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Full Table -->
            <div class="block block-rounded">

                <div class="block-content">
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modal-block-normal">Add / Remove Fund</button>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 200px;">
                                    <i class="far fa-clock"></i>
                                </th>
                                <th>User</th>
                                <th>Type</th>
                                <th>Amount</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($funding as $item)
                                <tr>
                                    <td class="text-center">
                                        <span>{{ date('d-M-Y', strtotime($item->created_at)) }}</span>
                                    </td>
                                    <td class="fw-semibold">
                                        {{ $item->user->name }}
                                    </td>
                                    <td>
                                        {{ $item->type }}
                                        <span>{!! $item->type() !!}</span>
                                    </td>
                                    <td>
                                        @money($item->amount)
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{ route('admin.wallet.edit', $item->id) }}" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="View">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <form method="POST" action="{!! route('admin.wallet.destroy', $item->id) !!}" accept-charset="UTF-8">
                                                <input name="_method" value="DELETE" type="hidden">
                                                {{ csrf_field() }}

                                                <div class="btn-group btn-group-xs pull-right" role="group">
                                                    <button type="submit" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" onclick="return confirm(&quot;Delete Item?&quot;)">
                                                        <i class="fa fa-times"></i>
                                                    </button>

                                                </div>

                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Full Table -->

        </div>
        <!-- END Page Content -->
    </main>


    <div class="modal" id="modal-block-normal" tabindex="-1" role="dialog" aria-labelledby="modal-block-normal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Add Wallet</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <form action="{{ route('admin.funding.store') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <label for="name">Select User</label>
                                <select name="user_id" id="" class="form-control">
                                    @foreach($users as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-row">
                                <label for="name">Select Type</label>
                                <select name="type" id="" class="form-control">
                                    <option value="Deposit">Deposit</option>
                                    <option value="Profit">Profit</option>
                                </select>
                            </div>
                            <div class="form-row mt-3 mb-3">
                                <label for="value">Amount</label>
                                <input type="number" id="value" name="amount" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary" name="f_type" value="credit">Credit</button>
                            <button type="submit" class="btn btn-sm btn-danger" name="f_type" value="debit">Debit</button>
                        </form>
                    </div>
                    <div class="block-content block-content-full text-end bg-body">
                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
