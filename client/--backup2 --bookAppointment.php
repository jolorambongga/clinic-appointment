<?php
include_once ('../includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDAIC</title>

    <!-- snippet-card-2 -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.js"></script>

    <!-- my-custom-css -->
    <link rel="stylesheet" href="client-css/bookAppointment.css">

</head>

<body>

    <!-- procedures -->

    <div class="row d-flex justify-content-center mt-custom">
        <div class="col-md-4">
            <div class="card-proc">
                <div class="card-body-proc">
                    <h4 class="card-title-proc">Kindly select your procedure type.</h4>
                    <div>
                        <input type="radio" name="radio" id="radOBGYNE" checked="true" />
                        <label class="radio" for="radOBGYNE">OB-GYNE</label>
                        <input type="radio" name="radio" id="radCTSCAN" />
                        <label for="radCTSCAN">CT-SCAN</label>
                        <input type="radio" name="radio" id="radECG" />
                        <label for="radECG">ECG</label>
                        <input type="radio" name="radio" id="radULTRASOUND" />
                        <label for="radULTRASOUND">ULTRASOUND</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- date-and-time -->

    <div class="row d-flex justify-content-center mt-3">
        <div class="col-md-6">
            <div class="card border-0">
                <form autocomplete="off">
                    <div class="card-header bg-dark">
                        <div class="mx-0 mb-0 row justify-content-sm-center justify-content-start px-1">
                            <input type="text" id="dp1" class="datepicker" placeholder="Pick Date" name="date" readonly>
                            <span class="fa fa-calendar"></span>
                        </div>
                    </div>
                    <div class="card-body p-3 p-sm-5">
                        <div class="grid-container text-center mx-0">
                            <div class="cell py-1">9:00AM</div>
                            <div class="cell py-1">9:30AM</div>
                            <div class="cell py-1">9:45AM</div>
                            <div class="cell py-1">10:00AM</div>
                            <div class="cell py-1">10:30AM</div>
                            <div class="cell py-1">10:45AM</div>
                            <div class="cell py-1">11:00AM</div>
                            <div class="cell py-1">11:30AM</div>
                            <div class="cell py-1">11:45AM</div>
                            <div class="cell py-1">12:00PM</div>
                            <div class="cell py-1">12:30PM</div>
                            <div class="cell py-1">12:45PM</div>
                            <div class="cell py-1">1:00PM</div>
                            <div class="cell py-1">1:30PM</div>
                            <div class="cell py-1">1:45PM</div>
                            <div class="cell py-1">2:00PM</div>
                            <div class="cell py-1">2:30PM</div>
                            <div class="cell py-1">2:45PM</div>
                            <div class="cell py-1">3:00PM</div>
                            <div class="cell py-1">3:30PM</div>
                            <div class="cell py-1">4:15PM</div>
                            <div class="cell py-1">5:00PM</div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- button -->
        <div class="container mb-5">
            <div class="row mt-3 text-center">
                <div class="col-md-12">
                    <button class="btn btn-success" type="submit" name="submit">Set Appointment</button>
                    <button class="btn btn-danger" type="submit" name="submit">Cancel</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function () {
            $('.datepicker').datepicker({
                format: 'dd-mm-yyyy',
                autoclose: true,
                startDate: '0d'
            });

            $('.cell').click(function () {
                $('.cell').removeClass('select');
                $(this).addClass('select');
            });
        });
    </script>
</body>

</html>