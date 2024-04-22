<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mata Kuliah</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .form-control:focus {
            border-color: #71B280;
            box-shadow: 0 0 0 0.2rem rgba(113, 178, 128, 0.25);
        }

        .btn-primary {
            background-color: #71B280;
            border-color: #71B280;
        }

        .btn-primary:hover {
            background-color: #5a956d;
            border-color: #5a956d;
        }
    </style>
</head>

<body>
<div class="container">
    <h1 class="mb-4">Edit Mata Kuliah</h1>
    <form action="{{ route('updateMatakuliah', ['KodeMK' => $matakuliahs->Kode_MK]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="kodeMk">Kode MK:</label>
            <input type="text" id="Kode_MK" name="Kode_MK" value="{{ $matakuliahs-> Kode_MK }}" class="form-control"
                   readonly>
        </div>
        <div class="form-group">
            <label for="mataKuliah">Mata Kuliah:</label>
            <input type="text" id="Mata_Kuliah" name="Mata_Kuliah" value="{{ $matakuliahs->Mata_Kuliah }}"
                   class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jumlahSks">Jumlah SKS:</label>
            <input type="number" id="Jml_sks" name="Jml_sks" value="{{ $matakuliahs->Jml_sks }}" class="form-control"
                   required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
<!-- Bootstrap JS, jQuery, dan Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

