<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-9 mx-auto mt-5">
                <form action="{{ route('update', $data->id) }}" method="post" enctype="multipart/form-data"
                    class="bg-white px-5 pb-5 mx-auto shadow-lg">
                    @csrf
                    @method('PUT')
                    <label for="" class="mt-5">Name</label>
                    <input type="text" name="name" value="{{ $data->name }}"
                        class="form-control form-input form-control-sm"><br>
                    <label for="">Email</label>
                    <input type="email" name="email" value="{{ $data->email }}"
                        class="form-control form-input form-control-sm"><br>
                    <label for="">Phone</label>
                    <input type="text" name="phone" value="{{ $data->phone }}"
                        class="form-control form-input form-control-sm"><br>
                    <label for="">Image</label>
                    <input type="file" name="img" value="{{ $data->img }}"><br><br>
                    <button type="submit" class="btn btn-sm btn-success  mx-3 px-5 py-3">Submit</button>

                </form>

                <a href="{{ route('index') }}" class="btn btn-sm btn-success mt-5 px-5 py-3">Index</a>

            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
