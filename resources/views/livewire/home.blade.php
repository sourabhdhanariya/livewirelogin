<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
 
    @livewireStyles() 
</head>
  <body>
      <div class="container">
        <div class="row mt-5 justify-content-center">
          <div class="mt-5 col-md-8">
            <div class="card">
              <div class="card-header bg-danger text-white">
                <h5>{{ trans('user.header.welcome')}}</h5>
              </div>
              <div class="card-body">
                @livewire('login-register')
              </div>
            </div>
          </div>
        </div>
      </div>
@livewireScripts() 
</body>
</html>