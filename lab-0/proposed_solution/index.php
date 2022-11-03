<!doctype html>
<html>
    <head>
        <meta name="keywords" content="isw calculator">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <link rel="stylesheet" href="./css/main.css" >
    </head>
    <body>

    <div class="wrapper">
        <form action='./src/controllers/OperationController.php' method="post">
            <div class="h5 font-weight-bold text-center mb-3">Calculator</div><br>

            <div class="form-group d-flex align-items-center">
                <input autocomplete="off" type="number" class="form-control" placeholder="First number" name="num1">
            </div>

            <div class="form-group d-flex align-items-center">
                <input autocomplete="off" type="text" class="form-control" placeholder="operation: + - * /" name="operation">
            </div>

            <div class="form-group d-flex align-items-center">
                <input autocomplete="off" type="number" class="form-control" placeholder="Second number" name="num2">
            </div>
            
            <br>
            <input class="btn btn-primary mb-3" type="submit" value="Compute">  </input>
  
        </form>
    </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src=https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
    </body>
</html>