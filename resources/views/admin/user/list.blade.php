@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">All Users</h1>
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
                                <th>Name</th>
                                <th style="width: 30%;">Email</th>
                                <th style="width: 15%;">Status</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $item)
                                <tr>
                                    <td class="text-center">
                                        <span>{{ date('d-M-Y', strtotime($item->created_at)) }}</span>
                                    </td>
                                    <td class="fw-semibold">
                                        {{ $item->name }}
                                    </td>
                                    <td>
                                        <em class="text-muted">{{ $item->email }}</em></td>
                                    <td>
                                        {!! $item->adminStatus() !!}
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{ route('admin.profile', $item->id) }}" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
                                                <i class="fa fa-eye"></i>
                                            </a>

                                            <form method="POST" action="{!! route('admin.deleteUser', $item->id) !!}" accept-charset="UTF-8">
                                                <input name="_method" value="DELETE" type="hidden">
                                                {{ csrf_field() }}

                                                <div class="btn-group btn-group-xs pull-right" role="group">
                                                    <button type="submit" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" onclick="return confirm(&quot;Delete User?&quot;)">
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
