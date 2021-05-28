<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row p-5">
            <div class="col-10">
                <h1>Events</h1>
            </div>
            <div class="col-2">
                <a href="/create" class="btn btn-success">Add New</a>
            </div>
            <div class="col-12 mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Location</th>
                            <th scope="col">Date</th>
                            <th scope="col">Description</th>
                            <th scope="col">Entrance Fee</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- $loop for the data from the table -->
                        @foreach($data as $x)
                        <tr>
                           
                            <th scope="row">{{ $x->title }}</th>
                            <th scope="row">{{ $x->location }}</th>
                            <th scope="row">{{ $x->date }}</th>
                            <th scope="row">{{ $x->description }}</th>
                            <th scope="row">{{ $x->entrance_fee }}</th>
                            <th scope="row">
                                <a href="{{ URL::route('update', $x->id) }}" class="btn btn-success btn-sm">Update</a>
                                <a href="{{ URL::route('delete', $x->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                
                            </th>
                                
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>