<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
<section class="container-fluid">
    <div>
        <h2 class="text-center my-4">Enter your Details</h2>
    </div>
        <form action="userinfo.php" method="post">
            <div class="form-group w-50 m-auto">
                <label style="font-weight: bold;">Name</label>
                <input type="text" name="Name" id="Name" class="form-control  " autocomplete="off">
            </div>
            <div class="form-group w-50 m-auto">
                <label style="font-weight: bold;">Email</label>
                <input type="text" name="Email" id="Email" class="form-control ">
            </div>
            <div class="form-group w-50 m-auto">
                <label style="font-weight: bold;">Phone</label>
            </div>
            <div class="form-group w-50 m-auto">
 
                <input type="text" name="Phone" id="Phone" class="form-control ">
            </div>
            <div class="form-group w-50 m-auto">

                <label style="font-weight: bold;">Comments</label>
                <textarea name="Comments" id="Comments" class="form-control"></textarea>
                <button type="submit" class="btn btn-primary  my-4"> Submit</button>
            </div>

            </div>
        </form>
    </section>
    </body>
    </html>