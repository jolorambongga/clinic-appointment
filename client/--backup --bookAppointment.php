<?php
include_once ('../includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDAIC</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.js"></script>
    <style>
        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-color: #EDC001 !important;
            background-repeat: no-repeat;
            padding: 0px !important;
        }

        .container-fluid {
            padding-top: 120px !important;
            padding-bottom: 120px !important;
        }

        .card {
            box-shadow: 0px 4px 8px 0px #C7A827;
        }

        input {
            padding: 10px 20px !important;
            border: 1px solid #000 !important;
            border-radius: 10px;
            box-sizing: border-box;
            background-color: #616161 !important;
            color: #fff !important;
            font-size: 16px;
            letter-spacing: 1px;
            width: 180px;
        }

        input:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #512DA8;
            outline-width: 0;
        }

        ::placeholder {
            color: #fff;
            opacity: 1;
        }

        :-ms-input-placeholder {
            color: #fff;
        }

        ::-ms-input-placeholder {
            color: #fff;
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0;
        }

        .datepicker {
            background-color: #000 !important;
            color: #fff !important;
            border: none;
            padding: 10px !important;
        }

        .datepicker-dropdown:after {
            border-bottom: 6px solid #000;
        }

        thead tr:nth-child(3) th {
            color: #fff !important;
            font-weight: bold;
            padding-top: 20px;
            padding-bottom: 10px;
        }

        .dow,
        .old-day,
        .day,
        .new-day {
            width: 40px !important;
            height: 40px !important;
            border-radius: 0px !important;
        }

        .old-day:hover,
        .day:hover,
        .new-day:hover,
        .month:hover,
        .year:hover,
        .decade:hover,
        .century:hover {
            border-radius: 6px !important;
            background-color: #eee;
            color: #000;
        }

        .active {
            border-radius: 6px !important;
            background-image: linear-gradient(#EDC001, #FFE2CF) !important;
            color: #000 !important;
        }

        .disabled {
            color: #616161 !important;
        }

        .prev,
        .next,
        .datepicker-switch {
            border-radius: 0 !important;
            padding: 20px 10px !important;
            text-transform: uppercase;
            font-size: 20px;
            color: #fff !important;
            opacity: 0.8;
        }

        .prev:hover,
        .next:hover,
        .datepicker-switch:hover {
            background-color: inherit !important;
            opacity: 1;
        }

        .cell {
            border: 1px solid #BDBDBD;
            margin: 2px;
            cursor: pointer;
        }

        .cell:hover {
            border: 1px solid #EDC001;
        }

        .cell.select {
            background-color: #EDC001;
        }

        .fa-calendar {
            color: #fff;
            font-size: 30px;
            padding-top: 8px;
            padding-left: 5px;
            cursor: pointer;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            max-width: 400px;
            margin: auto;
        }
    </style>

    <style>
        body {
            background-color: #512DA8
        }

        .mt-100 {
            margin-top: 100px;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #d2d2dc;
            border-radius: 0
        }

        .card .card-body {
            padding: 1.25rem 1.75rem
        }

        .card-body {
            flex: 1 1 auto;
            padding: 1.25rem
        }

        .card .card-title {
            color: #000000;
            margin-bottom: 0.625rem;
            text-transform: capitalize;
            font-size: 1.3rem;
            font-weight: 500
        }

        .card .card-description {
            margin-bottom: .875rem;
            font-weight: 400;
            color: #76838f
        }

        p {
            font-size: 0.875rem;
            margin-bottom: .5rem;
            line-height: 1.5rem
        }

        /*Radio buttons*/
        input[type="radio"] {
            display: none;
        }

        input[type="radio"]+label:before {
            content: "";
            display: inline-block;
            width: 25px;
            height: 25px;
            padding: 6px;
            margin-right: 3px;
            background-clip: content-box;
            border: 2px solid #bbb;
            background-color: #e7e6e7;
            border-radius: 50%;
        }

        input[type="radio"]:checked+label:before {
            background-color: #93e026;
        }

        label {
            display: flex;
            align-items: center;
        }
    </style>

</head>

<body>

    <div class="row d-flex justify-content-center mt-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Kindly select your procedure type.</h4>
                    <div>
                        <input type="radio" name="radio" id="radio1" checked="true" />
                        <label class="radio" for="radio1">Procedure1</label>
                        <input type="radio" name="radio" id="radio2" />
                        <label for="radio2">Procedure2</label>
                        <input type="radio" name="radio" id="radio3" />
                        <label for="radio3">Procedure3</label>
                        <input type="radio" name="radio" id="radio4" />
                        <label for="radio3">Procedure4</label>
                        <input type="radio" name="radio" id="radio5" />
                        <label for="radio3">Procedure5</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row d-flex justify-content-center mt-5">
        <div class="col-md-4">
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