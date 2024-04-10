<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto mt-5">
                <table border="1" cellpadding="10" class="table shadow-lg">
                    <thead>
                        <tr class="table-info">
                            <td class="fw-bold">SL</td>
                            <td class="fw-bold">ID</td>
                            <td class="fw-bold">Name</td>
                            <td class="fw-bold">Email</td>
                            <td class="fw-bold">Phone</td>
                            <td class="fw-bold">Image</td>
                            <td class="fw-bold text-center">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>
                                    <img src="{{ $item->img }}" alt="" width="50">
                                </td>
                                <td>
                                    <a href="{{ route('edit', $item->id) }}">Edit</a>

                                    <a href="{{ route('show', $item->id) }}">Show</a>

                                    <form action="{{ route('delete', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button>Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('create') }}" class="btn btn-sm btn-info mt-2 px-5 py-3">Create</a>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
