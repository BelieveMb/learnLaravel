<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Larvel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset">
                <h2 class="mb-6">Add a new record </h2>
                <form action="add" method="post"> 

                    @csrf
                    <div class="form-group">
                        <label for="">Name </label>
                        <input type="text" class="form-control" name="name">
                        <span class="bg-danger text-white">@error('name')
                            {{$message}}
                        @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="">Favorite color </label>
                        <input type="text" class="form-control" name="favoriteColor">
                        <span class="bg-danger text-white">@error('favoriteColor')
                            {{$message}}
                        @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="">Email </label>
                        <input type="text" class="form-control" name="email">
                        <span class="bg-danger text-white">@error('email')
                            {{$message}}
                        @enderror</span>
                    </div>

                    <div class="form-group">
                        <button  type="submit " class="btn btn-primary btn-block"> Save </button>
                    </div>



                </form>
            </div>
        </div>
    </div>
</body>
</html>