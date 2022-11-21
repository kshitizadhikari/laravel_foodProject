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
                        <form action="{{ route('updateItem') }}" method="post">
                            @csrf

                            <input type="hidden" class="form-control" name="id" value="{{$item->id}}">

                            <div class="mb-3">
                                <label class=" form-label">Food ID</label>
                                <input type="number" class="form-control" name="food_id" value="{{$item->Food_ID}}">
                            </div>
                            <div class=" mb-3">
                                <label class=" form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="{{$item->Name}}">
                            </div>
                            <div class=" mb-3">
                                <label class="form-label">Category</label>
                                <input type="text" class="form-control" name="category" value="{{$item->Category}}">
                            </div>
                            <div class=" mb-3">
                                <label class="form-label">Price</label>
                                <input type="text" class="form-control" name="price" value="{{$item->Price}}">
                            </div>
                            <div class=" mb-3">
                                <label class="form-label">Date Added</label>
                                <input type="date" class="form-control" name="date" value="{{$item->Date}}">
                            </div>
                            <div class=" mb-3">
                                <label class="form-label">Description</label>
                                <textarea rows="4" cols="50" placeholder="Optional" name="description"
                                    value="{{$item->Description}}"></textarea>
                            </div>
                            <div class="btn">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col col2 hidden">
                    <div class="tableko">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>