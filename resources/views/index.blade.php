<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <style>
            .pagination{
                float: right;
                margin-top: 10px;
                box-shadow: 0px 5px 15px rgba(0,0,0,0.25);
            }

            .card{
                box-shadow: 0px 5px 15px rgba(0,0,0,0.25);
            }

        </style>
    </head>
    <body>

    <div class="container mt-5">
        <h1 class="text-center">Todos los estudiantes</h1>
        <div class="row mt-5">
            @foreach ($students as $student)
                <div class="col-lg-6">
                    <div class="card mt-2">

                        <div class="card-header">
                            {{ $student->university }}
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">{{ $student->career }}</h5>
                            <p class="card-text text-end">{{ $student->published_at }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {!! $students->links() !!}
    </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>
