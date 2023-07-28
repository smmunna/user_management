<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form2</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>



    <!DOCTYPE html>
    <html>

    <head>
        <title>Two-Column Form</title>
        <!-- Add Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>

        <div class="bg-black text-danger fixed-top py-3 mb-2" style="color: white;">
            <?php include('userNavbar.php') ?>
        </div>

        <div class="container mt-5 pt-4 mb-5 pb-5">

            <h3 class="my-4 text-center">LankaBangla Securities <sub>Form 2</sub> </h3>
            <hr>
            <form action="#">
                <div class="row d-flex">
                    <!-- Left Column -->
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="input1">Application No:</label>
                            <input type="text" class="form-control" id="input1">
                        </div>
                        <div class="form-group">
                            <label for="input2">CDBL Participent ID:</label>
                            <input type="text" class="form-control" id="input2">
                        </div>
                        <div class="form-group">
                            <label for="input3">Account Holder BOD ID:</label>
                            <input type="text" class="form-control" id="input3">
                        </div>
                        <div class="form-group">
                            <label for="input4">Name of Account Holder:</label>
                            <input type="text" class="form-control" id="input4">
                        </div>
                        <div class="form-group">
                            <label for="input5">Date:</label>
                            <input type="date" class="form-control" id="input5">
                        </div>

                    </div>



                    <!-- Right Column -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="input6">Nomonie 1 Heire Details:</label>
                            <input type="text" class="form-control" id="input6" placeholder="Enter name of nomoniee">
                        </div>
                        <div class="form-group">
                            <label for="input7">Relationship:</label>
                            <input type="text" class="form-control" id="input7">
                        </div>
                        <div class="form-group">
                            <label for="input8">Country:</label>
                            <input type="text" class="form-control" id="input8">
                        </div>
                        <div class="form-group">
                            <label for="input9">Postal Code:</label>
                            <input type="text" class="form-control" id="input9">
                        </div>
                        <div class="form-group">
                            <label for="input10">Zip Code:</label>
                            <input type="text" class="form-control" id="input10">
                        </div>
                        <div class="form-group">
                            <label for="input10">Mobile:</label>
                            <input type="text" class="form-control" id="input10">
                        </div>
                        <div class="form-group">
                            <label for="input10">Fax:</label>
                            <input type="text" class="form-control" id="input10">
                        </div>
                        <div class="form-group">
                            <label for="input10">Email:</label>
                            <input type="text" class="form-control" id="input10">
                        </div>
                        <div class="form-group">
                            <label for="input10">Passport:</label>
                            <input type="text" class="form-control" id="input10">
                        </div>
                    </div>
                </div>
                <div class=" d-flex align-items-center justify-content-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>


        <div class="bg-black py-2 fixed-bottom">
            <?php
            include('userFooter.php');
            ?>
        </div>

        <!-- Add Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>

    </html>


    <!-- Bootstrap CDN JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>