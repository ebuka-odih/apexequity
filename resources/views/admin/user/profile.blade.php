@extends('admin.layout.app')
@section('content')

<main id="main-container">

    <!-- Hero -->
    <div class="bg-image" style="background-color: black;">
        <div class="bg-black-25">
            <div class="content content-full">
                <div class="py-5 text-center">
                    <a class="img-link" >
                        <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{ asset('assets/media/avatars/avatar10.jpg') }}" alt="">
                    </a>
                    <h1 class="fw-bold my-2 text-white">{{ $user->name }}</h1>

                    <span >
                        {!! $user->adminStatus() !!}
                    </span>
                    <h3 class="mt-3 text-success fs-30">@money($user->balance)</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content content-full content-boxed">
        <!-- Latest Friends -->
        <h2 class="content-heading">
            <i class="si si-users me-1"></i> Details
        </h2>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped" style="width:100%">
                        <tr>
                            <th>Name:</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Phone:</th>
                            <td>{{ $user->phone }}</td>
                        </tr>
                        <tr>
                            <th>Address:</th>
                            <td>{{ $user->address }}</td>
                        </tr>
                        <tr>
                            <th>City:</th>
                            <td>{{ $user->city }}</td>
                        </tr>
                        <tr>
                            <th>State:</th>
                            <td>{{ $user->state }}</td>
                        </tr>
                        <tr>
                            <th>Country:</th>
                            <td>{{ $user->country }}</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>

        <!-- END Latest Friends -->


    </div>
    <!-- END Page Content -->
</main>

@endsection
