<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Course</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #5BB9B8;
            color: #2C3845;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }

        .content-title {
            text-align: center;
            font-weight: 1000;
            margin-bottom: 20px;
        }

        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 20px;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .table tbody+tbody {
            border-top: 2px solid #dee2e6;
        }

        .btn-primary {
            color: #fff;
            background-color: #BD2A4E;
            border-color: #BD2A4E;
        }
    </style>
</head>

<body>
<div class="container">
    <h1 class="content-title">View Course</h1>
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('view-course.index') }}">
                @csrf
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Mata Kuliah</th>
                        <th scope="col">Dosen</th>
                        <th scope="col">Jadwal</th>
                        <th scope="col">Pilih</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($matakuliahs as $matakuliah)
                        <tr>
                            <td>{{ $matakuliah->Mata_Kuliah }}</td>
                            <td>{{ $matakuliah->Dosen }}</td>
                            <td>{{ $matakuliah->Jumlah_SKS }}</td>
                            <td><input type="checkbox" name="matakuliah[]" value="{{ $matakuliah->id }}"></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>
