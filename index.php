<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HPL Quotes</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container" style="padding-top:15px">

        <div class="card mb-6">
        <div class="row no-gutters">
            <div class="col-md-4">
            <img src="img/hpl.png" class="card-img" alt="H. P. Lovecraft">
            </div>
            <div class="col-md-8">
            <div class="card-body d-flex flex-column" style="height:100%">
                <h5 class="card-title">H. P. Lovecraft Quotes</h5>
                <blockquote class="blockquote" id="quote"></blockquote>
                <button id="quoteBtn" type="button" class="btn btn-primary align-self-end" style="margin-top: auto;">Get New Quote</button>
            </div>
            </div>
        </div>
        </div>


    </div>
    <script src="js/quotes.js"></script>
</body>
</html>