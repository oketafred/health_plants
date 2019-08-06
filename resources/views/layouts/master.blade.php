<!DOCTYPE <!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
  <script src="main.js"></script>
</head>

<body id="customer">

  <div class="container pt-5" style="background-color: #ffffff;">
    <header class="mt-2">

      <img src="{{ asset('assets/front/img/healthlogo.png.png') }}" alt="" class="img-fluid">
      <!-- <nav class="navbar navbar-light bg-light"> -->

        <form action="{{ route('disease.query') }}" method="POST" class="my-5">

          {{ csrf_field() }}

          <div class="form-group row">
            <div class="input-group col-md-8 offset-md-2 flex-nowrap">
              <input type="text" name="searchTerm" class="form-control form-control-lg" placeholder="Search for disease" required>
              <div class="input-group-prepend">
                <button class="btn btn-success btn-rounded" type="submit">Search</button>
              </div>
            </div>
          </div>
        </form>
        <!-- </nav> -->
      </header>


      <section class="mt-3 h-100">
        <div class="container">
          <div class="row">
            <div class="col-md-10 offset-md-1">

            </div>
          </div>
        </div>
      </section>
    </div>




    <script src="js/jQuery.js"></script>
    <script src="js/popper.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

  </body>

  </html>