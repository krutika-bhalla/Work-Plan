<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TaskList</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link id="theme" rel="stylesheet" type="text/css" href="light-theme.css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
</head>

    <style>
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999;
            width: 100%;
        }
        /*.dark-mode .card{
            background-color: #00909e;
            color: #142850;
        }
        .dark-mode button{
            background-color: #27496d;
        }
        .dark-mode{
            background-color: #dae1e7;
        }*/
    </style>
    <script>
        /*function myFunction() {
           var element = document.body;
           element.classList.toggle("dark-mode");
        }*/
        </script>
<body>
<div class="jumbotron">
    <h2 class="display-5" style="text-align: center; padding-top: 20px;">Plan Your Day Here!</h2>
</div>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand">TaskList</a>
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="text" placeholder="Search Task" aria-label="Search">
          <button class="btn btn-outline-light my-2 my-sm-0" >Search</button>
        </form>
        <!--button onclick="myFunction()">Toggle dark mode</button-->

    </nav>

<div class="container">
    @yield('content')
</div>
</body>
</html>
