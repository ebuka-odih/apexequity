
<script type="text/javascript">
    $(document).ready(function() {
        $("#withdrawalMethod").change(function() {
            if ($(this).val() == "Bitcoin") {
                $("#field1").fadeIn();
                $("#field2").hide();
                $("#field3").hide();
                $("#field4").hide();
                $("#field5").hide();
                $("#field6").hide();
                $("#field7").hide();
                $("#field8").hide();
                $("#field9").hide();
                $("#field10").hide();
                $("#field11").hide();
                $("#field12").fadeIn();
                $("#field13").hide();
                $("#field14").hide();
                $("#field15").hide();
                $('#wallet-number').attr("placeholder", "Bitcoin");
                //$('#amount-fees').val('2%')

            } else if ($(this).val() == "Ethereum") {
                $("#field2").fadeIn();
                $("#field1").hide();
                $("#field3").hide();
                $("#field4").hide();
                $("#field5").hide();
                $("#field6").hide();
                $("#field7").hide();
                $("#field8").hide();
                $("#field9").hide();
                $("#field10").hide();
                $("#field11").hide();
                $("#field12").hide();
                $("#field13").fadeIn();
                $("#field14").hide();
                $("#field15").hide();
                $('#wallet-number').attr("placeholder", "Ethereum");
                //$('#amount-fees').val('4%')
            } else if ($(this).val() == "Litecoin") {
                $("#field3").fadeIn();
                $("#field1").hide();
                $("#field2").hide();
                $("#field4").hide();
                $("#field5").hide();
                $("#field6").hide();
                $("#field7").hide();
                $("#field8").hide();
                $("#field9").hide();
                $("#field10").hide();
                $("#field11").hide();
                $("#field12").hide();
                $("#field13").hide();
                $("#field14").fadeIn();
                $("#field15").hide();
                $('#wallet-number').attr("placeholder", "Litecoin");
                //$('#amount-fees').val('4%')
            } else if ($(this).val() == "BitcoinCash") {
                $("#field4").fadeIn();
                $("#field1").hide();
                $("#field2").hide();
                $("#field3").hide();
                $("#field5").hide();
                $("#field6").hide();
                $("#field7").hide();
                $("#field8").hide();
                $("#field9").hide();
                $("#field10").hide();
                $("#field11").hide();
                $("#field12").hide();
                $("#field13").hide();
                $("#field14").hide();
                $("#field15").fadeIn();
                $('#wallet-number').attr("placeholder", "BitcoinCash");
                //$('#amount-fees').val('4%')
            } else if ($(this).val() == "Skrill") {
                $("#field5").fadeIn();
                $("#field1").hide();
                $("#field2").hide();
                $("#field3").hide();
                $("#field4").hide();
                $("#field6").hide();
                $("#field7").hide();
                $("#field8").hide();
                $("#field9").hide();
                $("#field10").hide();
                $("#field11").hide();
                $("#field12").hide();
                $("#field13").hide();
                $("#field14").hide();
                $("#field15").hide();
                $('#wallet-number').attr("placeholder", "Skrill");
                //$('#amount-fees').val('3%')
            } else if ($(this).val() == "Paypal") {
                $("#field6").fadeIn();
                $("#field1").hide();
                $("#field2").hide();
                $("#field3").hide();
                $("#field4").hide();
                $("#field5").hide();
                $("#field7").hide();
                $("#field8").hide();
                $("#field9").hide();
                $("#field10").hide();
                $("#field11").hide();
                $("#field12").hide();
                $("#field13").hide();
                $("#field14").hide();
                $("#field15").hide();
                $('#wallet-number').attr("placeholder", "Paypal");
                //$('#amount-fees').val('2%')
            } else if ($(this).val() == "Bank Transfer") {
                $("#field7").fadeIn();
                $("#field8").fadeIn();
                $("#field9").fadeIn();
                $("#field10").fadeIn();
                $("#field11").fadeIn();
                $("#field1").hide();
                $("#field2").hide();
                $("#field3").hide();
                $("#field4").hide();
                $("#field5").hide();
                $("#field6").hide();
                $("#field12").hide();
                $("#field13").hide();
                $("#field14").hide();
                $("#field15").hide();
                $('#wallet-number').attr("placeholder", "Bank Transfer");
                //$('#amount-fees').val('5%')
            } else {
                $("#field1").hide();
                $("#field2").hide();
                $("#field3").hide();
                $("#field4").hide();
                $("#field5").hide();
                $("#field6").hide();
                $("#field7").hide();
                $("#field8").hide();
                $("#field9").hide();
                $("#field10").hide();
                $("#field11").hide();
                $("#field12").hide();
                $("#field13").hide();
                $("#field14").hide();
                $("#field15").hide();
            }
        });

        $("#amount-gram").keyup(function() {
            //var usd = this.val();
            var usd = $("#amount-gram").val();
            //var course = '2.0682345991368067';
            var course = '0.00011';
            $("#amount-usd").val(usd * course);
        });


        /*$('#withdrawal-form').on('submit', function(event) {

            var totalGgram = $('#total-gram').data('balance'),
                amountGram = $("#amount-usd").val();
            console.log(totalGgram + '===' + amountGram);

            if (totalGgram <= amountGram) {
                event.preventDefault();
                //$('#notEnough .card-body h2').text('Not enough Gram')
                //$('#notEnough').modal('toggle');
                Swal.fire({
                    title: "Error!",
                    text: "Not enough Gram",
                    type: "error",
                    confirmButtonClass: 'btn btn-primary',
                    buttonsStyling: false,
                });

            } else {*/
        //$('#notEnough .card-body h2').text('Not available')
        ///$('#notEnough').modal('toggle')
        /* Swal.fire({
            title: "Error!",
            text: "Not available",
            type: "error",
            confirmButtonClass: 'btn btn-primary',
            buttonsStyling: false,
            });  */
        //}
        //});
    });
</script>

<script>
    function noticePop( value, type ){
        swal({
            html: '<span style="font-size:18px!important;">'+ `${value}` +'</span>',
            type: `${type}`,
            timer: 4000,
            showConfirmButton: false,
            allowOutsideClick: false,
            allowEscapeKey: false,
        }).then(function(){
            window.location.href = 'deposit';
        });
    }
</script>

<!-- Footer -->
<footer class="iq-footer" style="background-color:#131313; color:#dbdbdb;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-lg-6 text-right">
                Copyright {{ Date('Y') }} <a href="#">{{ env('APP_NAME') }} </a> All Rights Reserved.
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('plugins/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('plugins/sweetalerts/sweetalert2.min.js') }}"></script>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Appear JavaScript -->
<script src="{{ asset('js/jquery.appear.js') }}"></script>
<!-- Countdown JavaScript -->
<script src="{{ asset('js/countdown.min.js') }}"></script>
<!-- Counterup JavaScript -->
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<!-- Wow JavaScript -->
<script src="{{ asset('js/wow.min.js') }}"></script>
<!-- Apexcharts JavaScript -->
<script src="{{ asset('js/apexcharts.js') }}"></script>
<!-- Slick JavaScript -->
<script src="{{ asset('js/slick.min.js') }}"></script>
<!-- Select2 JavaScript -->
<script src="{{ asset('js/select2.min.js') }}"></script>
<!-- Owl Carousel JavaScript -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- Magnific Popup JavaScript -->
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="{{ asset('js/smooth-scrollbar.js') }}"></script>
<!-- lottie JavaScript -->
<script src="{{ asset('js/lottie.js') }}"></script>
<!-- am core JavaScript -->
<script src="{{ asset('js/core.js') }}"></script>
<!-- am charts JavaScript -->
<script src="{{ asset('js/charts.js') }}"></script>
<!-- am animated JavaScript -->
<script src="{{ asset('js/animated.js') }}"></script>
<!-- am kelly JavaScript -->
<script src="{{ asset('js/kelly.js') }}"></script>
<!-- am maps JavaScript -->
<script src="{{ asset('js/maps.js') }}"></script>
<!-- am worldLow JavaScript -->
<script src="{{ asset('js/worldLow.js') }}"></script>
<!-- Raphael-min JavaScript -->
<script src="{{ asset('js/raphael-min.js') }}"></script>
<!-- Morris JavaScript -->
<script src="{{ asset('js/morris.js') }}"></script>
<!-- Morris min JavaScript -->
<script src="{{ asset('js/morris.min.js') }}"></script>
<!-- Flatpicker Js -->
<script src="{{ asset('js/flatpickr.js') }}"></script>
<!-- Style Customizer -->
<script src="{{ asset('js/style-customizer.js') }}"></script>
<!-- Chart Custom JavaScript -->
<script src="{{ asset('js/chart-custom.js') }}"></script>
<!-- Custom JavaScript -->
<script src="{{ asset('js/custom.js') }}"></script>


<script>
    function boda(val) {
        document.querySelector("#" + val).style = 'background-color:#000; width:950px; border: 2px solid red!important;';
    }
</script>

</body>

</html>
