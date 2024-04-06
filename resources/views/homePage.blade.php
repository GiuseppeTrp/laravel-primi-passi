<!DOCTYPE html>
<html lang="it" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>HomePage</title>
</head>
<style>
  i{
   
    color: red;
    
  }
  .card-img {
            width: 100%; /* Imposta la larghezza dell'immagine al 100% della carta */
        }
        .card {
            width: auto; /* Imposta la larghezza automatica */
            display: inline-block; /* Mostra la carta come blocco inline */
        }
</style>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid ">
            <a class="navbar-brand " href="#">
              <i class="fas fa-brands fa-laravel fa-lg ms-3"></i>
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav container-fluid d-flex justify-content-around">
              <li class="nav-item active">
                <a class="nav-link active"  href="{{ route('FirstPage') }}">First Page</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('SecondPage') }}">Second Page</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('ThirdPage') }}">Third Page </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container-fluid d-flex flex-column ">

        <div class="container my-5 text-center">
                <div class="card   border rounded">
                    <img src="https://i.guim.co.uk/img/media/ac3a7be3d4cdc0b7ed07b2eeb41c03df9e1887c6/0_1952_5333_3200/master/5333.jpg?width=465&dpr=1&s=none"  alt="..." class="card-img">
                    <div class="card-body">
                        <h5 class="card-title text-black">"Oplà"
                        </h5>
                        <a href="{{ route('FirstPage') }}" class="btn btn-outline-secondary fw-bold">
                          Let's mosey along now.


                        </a>
    
                        
    
                     </div>
    
    
                </div>
               
               
        </div>
      
    
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
