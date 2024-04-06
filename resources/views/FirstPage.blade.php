

<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>FirstPage</title>
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
                <img src="https://i.pinimg.com/236x/85/42/1d/85421d99a96b40388c70eea6a1af2d1f.jpg"  alt="..." class="card-img">
                <div class="card-body">
                    <h5 class="card-title">"You better keep moving forward, pal, or else..."
                    </h5>
                    <a href="{{ route('SecondPage') }}" class="btn btn-outline-danger fw-bold">Keep moving!
                    </a>      
                 </div>


            </div>
           
           
    </div>
  

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
