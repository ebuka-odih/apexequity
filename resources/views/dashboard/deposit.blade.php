
@include('dashboard.layout.header')

        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-sm-12 col-lg-9">
                    <div class="iq-card" style="background-color:#131313;">
                        <div class="iq-card" style="background-color:#131313;">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title" style="color:#fff; font-family: 'Roboto'!important;">Deposit</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <p style="font-size:40px;"><b>Deposit Method</b></p>
                                <form action="" method="post" autocomplete="off" id="withdrawal-form" class="was-validated" enctype="multipart/form-data">


                                    <div class="form-group">
                                        <select name="depositmethod"  style="background-color:#131313; color:#dbdbdb;" id="withdrawalMethod" class="form-control" required>
                                            <option value="" style="font-size:30px;"><b>---Select Method---</b></option>
                                            @foreach($wallets as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div id="field15" class="mb-3" style="display: None;">
                                        <label for="validationDefault01" style="color:#dbdbdb;">USDT Wallet Address</label>
                                        <input style="background-color:#131313;" type="text" class="form-control" id="validationDefault01" value="0x94299225840135038F567d414e94Bcc8Eeb2E5BF" disabled>
                                    </div>

                                    <div class="mb-3">
                                        <label for="validationTextarea"  style="color:#dbdbdb;">Amount ($)</label>
                                        <input type="number" class="form-control is-invalid" name="amount" placeholder="Amount without $" required>
                                    </div>

                                    <div class="uk-margin-small uk-width-auto uk-text-small">
                                        <label  style="color:#dbdbdb;"><input class="uk-checkbox uk-border-rounded" type="checkbox" required> Agree to Terms & Conditions?</label>
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <button class="btn btn-primary" name="deposit" type="submit">Proceed to Payment</button>
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
