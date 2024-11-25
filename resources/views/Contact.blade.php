<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-label-required::after {
            content: " Required";
            color: red;
            font-size: 0.9em;
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <form>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label form-label-required">Name</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-sm-5">
                    <input type="text" class="form-control" placeholder="Last name">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label form-label-required">Telephone number</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter your phone number">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Post code</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter your Postal Code">
                </div>
            </div>


            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Your address">
                </div>
            </div>

 
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label form-label-required">Email address</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" placeholder="Your email">
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
