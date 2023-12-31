@extends('admin.layout.app')
@section('content')

<main id="main-container">

    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">All Deposits</h1>
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
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-vcenter">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 200px;">
                                <i class="far fa-clock"></i>
                            </th>
                            <th>User</th>
                            <th >Amount</th>
                            <th >Status</th>
                            <th class="text-center" style="width: 150px;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($deposits as $item)
                            <tr>
                            <td class="text-center">
                                <span>{{ date('d-M-Y', strtotime($item->created_at)) }}</span>
                            </td>
                            <td class="fw-semibold">
                                <a href="{{ route('admin.profile', $item->user->id) }}">{{ $item->user->name }}</a>
                            </td>
                            <td>
                                @money($item->amount)
                            </td>
                            <td>
                                {!! $item->status() !!}
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{ route('admin.approveDeposit', $item->id) }}" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Approve Deposit">
                                        <i class="fa fa-check"></i>
                                    </a>
                                    <a href="{{ route('admin.viewDeposit', $item->id) }}" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <form method="POST" action="{!! route('admin.deleteDeposit', $item->id) !!}" accept-charset="UTF-8">
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

@endsection
