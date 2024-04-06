

<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>SecondPage</title>
</head>

<style>
     .card-img {
            width: 100%; 
        }
        .card {
            width: auto;
            display: inline-block;
        }
</style>
<body>
<div class="container-fluid d-flex flex-column ">

    <div class="container my-5 text-center">
            <div class="card   border rounded">
                <img src="https://www.gifgit.com/site-images/meme/gallery/futurama-fry.jpg"  alt="..." class="card-img">
                <div class="card-body">
                    <h5 class="card-title">""I'm not sure if I can trust you, but go ahead..."
                    </h5>
                    <a href="{{ route('ThirdPage') }}" class="btn btn-outline-warning fw-bold">Go ahead then...
                    </a>      
                 </div>


            </div>
           
           
    </div>
  

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
