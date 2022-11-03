<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
    </head>

    <body>
        <!--Main Navigation-->
        <header>
        <link rel="stylesheet" href="./css/main.css">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
            <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand nav-link" target="_blank" href="http://docenti.ing.unipi.it/m.cimino/isw/">
                <strong>ISW</strong>
                </a>
            </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--Main Navigation-->
        
            <!-- Background image -->
            <div id="intro" class="bg-image shadow-2-strong">
            <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
                <div class="container">
                <div class="row justify-content-center">
                    
                    <div class="col-xl-5 col-md-8">
                    <form action='./src/controllers/PdfController.php' method="post" class="bg-white  rounded-5 shadow-5-strong p-5">
                    <h1>Pdf generator</h1><br>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                        <input type="text" name="text" id="form1Example1" class="form-control" />
                        <label class="form-label" for="form1Example1">Text</label>
                        </div>

         

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block">Generate</button>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
            <!-- Background image -->
        

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>