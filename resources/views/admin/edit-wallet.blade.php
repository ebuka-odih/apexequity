@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Edit Wallet</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Full Table -->
            <div class="block block-rounded">

                <div class="block-content">

                    <form class="mb-5" action="{{ route('admin.wallet.update', $wallet->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-row">
                            <label for="name">Wallet Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name', optional($wallet)->name) }}" class="form-control">
                        </div>
                        <div class="form-row mt-3 mb-3">
                            <label for="value">Wallet Address</label>
                            <input type="text" id="value" name="value" value="{{ old('value', optional($wallet)->value) }}" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary" >Update</button>
                    </form>

                </div>
            </div>
            <!-- END Full Table -->

        </div>
        <!-- END Page Content -->
    </main>


@endsection
