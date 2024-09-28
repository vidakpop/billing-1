<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Error - PamojaISP</title>
    <link rel="shortcut icon" href="ui/ui/images/logo.png" type="image/x-icon" />

    <link rel="stylesheet" href="ui/ui/styles/bootstrap.min.css">

    <link rel="stylesheet" href="ui/ui/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="ui/ui/fonts/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="ui/ui/styles/modern-AdminLTE.min.css">

    <!-- Include SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <style>
        ::-moz-selection {
            /* Code for Firefox */
            color: red;
            background: yellow;
        }

        ::selection {
            color: red;
            background: yellow;
        }
        
        /* Apply background styling */
        body {
            background-color: #f8f9fa; /* Adjust as needed */
        }
    </style>

</head>

<body class="hold-transition skin-blue">
    <div class="container">

        <section class="content">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="box box-danger box-solid">
                        <section class="content-header">
                            <h1 class="text-center">
                                PamojaISP
                            </h1>
                        </section>
                        <div class="box-body" style="font-size: larger;">
                            <center>
                                <img src="./ui/ui/images/error.png" class="img-responsive hidden-sm hidden-xs">
                            </center>
                            <br>
                            <div id="error-message" style="display: none;">
                                {$error_message}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="./ui/ui/images/error.png" class="img-responsive hidden-md hidden-lg">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function () {
            // Trigger SweetAlert toast message with error message
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: $('#error-message').text(), // Get the error message content
                position: 'center',
                toast: true,
                showConfirmButton: false,
                timer: 5000
            });

            // After 5 seconds, navigate back to the previous page
            setTimeout(function() {
                window.history.back();
            }, 5000);
        });
    </script>
</body>

</html>
