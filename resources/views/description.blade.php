
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
           
        </style>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
      <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 col-sm-12 col-xs-12"> 
                   <div class="card p-4">    
                    
                       <div class="d-flex">
                           <h6 class="flex-grow-1">{{$data['name']}}</h6>
                           
                       </div>
                        
                       <div class="d-flex flex-column temp mt-5 mb-3">
                        
                           <h1 class="mb-0 font-weight-bold" id="heading"> {{$data['main'] ['temp']}}&deg; C </h1>
                         @foreach($data['weather'] as $w)
                           <span class="small grey">{{$w['description']}}</span>
                        @endforeach
                       </div>
                       
                       <div class="d-flex">
                           <div class="temp-details flex-grow-1">
                                <p class="my-1">
                                    <img src="https://i.imgur.com/B9kqOzp.png" height="17px" >
            
                                   <span> 40 km/h  </span>
                                </p>

                                <p class="my-1"> 
                                   <i class="fa fa-tint mr-2" aria-hidden="true"></i>
                                   <span> 84% </span> 
                                </p>

                                <p class="my-1"> 
                                    <img src="https://i.imgur.com/wGSJ8C5.png" height="17px" >
                                    <span> 0.2h </span>
                                </p>
                           </div>
                           
                           <div>
                               <img src="https://i.imgur.com/Qw7npIg.png" width="100px">
                           </div>
                           
                           
                       </div>
                        
          
                    </div>
            </div>
        </div>


    </div>

         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
