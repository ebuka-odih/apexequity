@include('dashboard.layout.header')

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-sm-12 col-lg-9">
            <div class="iq-card" style="background-color:#131313;">
                <div class="iq-card" style="background-color:#131313;">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h2 class="card-title" style="color:#fff; font-family: 'Roboto'!important; text-align: center">Payment</h2>
                        </div>
                    </div>
                    <hr>
                    <div class="iq-card-body">
{{--                        <p style="font-size:30px;"><b>Confirm Payment</b></p>--}}
                        <form action="{{ route('user.processPayment') }}" method="POST" autocomplete="off" id="withdrawal-form" class="was-validated" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="container">
                                @if(session()->has('success'))
                                    <div style="color: #3c7d3c" class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li style="color: #b74e4e">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            <input type="hidden" name="deposit_id" value="{{ $deposit->id }}">

                            <h4 class="mb-3 text-capitalize text-center">{{ $deposit->payment_method->name }} Wallet Address</h4>
                            <div class="visible-print text-center">
                                {!! QrCode::size(200)->generate($deposit->payment_method->value); !!}
                                <p>Scan me to copy address.</p>
                            </div>
                            <div id="field15" class="mb-3" >
                                <label for="validationDefault01" style="color:#dbdbdb;">{{ $deposit->payment_method->name }} Wallet Address</label>
                                <input style="background-color:#131313;" type="text" class="form-control" id="validationDefault01" value="{{ $deposit->payment_method->value }}" disabled>
                            </div>

                            <div class="form-group">
                                <label  style="color:#dbdbdb;">Upload Your Proof of payment:</label>
                                <input style="background-color:#131313;" type="file" class="form-control" name="payment_proof" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <button class="btn btn-primary" name="deposit" type="submit">Confirm Payment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
<!-- Wrapper END -->
@include('dashboard.layout.footer')
