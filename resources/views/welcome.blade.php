<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <script src="/js/main.js" defer></script>
    <title>Food App</title>
</head>

<body>
    <div class="container">
        <div class="header hidden">
            <div class="heading">
                <h1>MENU</h1>
            </div>
        </div>
        <div class="main hidden">
            <div class="row">
                <div class="col col1 hidden">
                    <div class="formko ">
                        <div class="logo">
                            <h2>ABC's Kitchen</h2>
                        </div>
                        <form action="{{ route('saveItem') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class=" form-label">Food ID</label>
                                <input type="number" class="form-control" name="food_id">
                            </div>
                            <div class="mb-3">
                                <label class=" form-label">Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class=" mb-3">
                                <label class="form-label">Category</label>
                                <input type="text" class="form-control" name="category">
                            </div>
                            <div class=" mb-3">
                                <label class="form-label">Price</label>
                                <input type="text" class="form-control" name="price">
                            </div>
                            <div class=" mb-3">
                                <label class="form-label">Date Added</label>
                                <input type="date" class="form-control" name="date">
                            </div>
                            <div class=" mb-3">
                                <label class="form-label">Description</label>
                                <textarea rows="4" cols="50" placeholder="Optional" name="description"></textarea>
                            </div>
                            <div class="btn">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col col2 hidden">
                    <div class="tableko">
                        <table class="table table-dark table-striped-columns table-bordered border-primary">
                            <thead>
                                <tr>
                                    <th scope="col">Food_ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Date Added</th>
                                    <th scope="col" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($all as $value)
                                <tr>
                                    <th scope="row">{{$value->Food_ID}}</th>
                                    <td>{{$value->Name}}</td>
                                    <td>{{$value->Category}}</td>
                                    <td>{{$value->Price}}</td>
                                    <td>{{$value->Date}}</td>
                                    <td><a href="{{url('/edit/' . $value->id )}}">Edit</a></td>
                                    <td><a href="{{url('/delete/' . $value->id )}}">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>