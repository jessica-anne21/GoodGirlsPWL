
@csrf
    <!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Data Polling</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #C9FFBF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #FFAFBD, #C9FFBF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #FFAFBD, #C9FFBF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            width: 400px;
        }

        .card-body {
            background-color: rgba(255, 255, 255, 0.5); /* Form background transparan */
            border-radius: 10px; /* Untuk memberi sedikit radius pada border */
            padding: 20px; /* Jarak antara konten dan pinggiran form */
            backdrop-filter: blur(50px);
        }

        .content-title {
            text-align: center;
            font-weight: 1000;
            margin-bottom: 20px;
            font-size: 30px;
            color: #707070;
            padding: 12px 60px;
        }

        .form-control {
            border-radius: 5px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(50px);
            background-color: rgba(255, 255, 255, 0.5); /* Putih setengah transparan */
        }


        .btn-primary {
            background-color: #d3959b;
            border-color: #d3959b;
        }

        .btn-primary:hover {
            background-color: #c6426e;
            border-color: #c6426e;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="form-container">
        <h1 class="content-title">Isi Data Polling</h1>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('data-polling.index') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="kodeMk">Kode MK</label>
                        <input type="text" class="form-control" id="kodeMk" name="Kode_MK" required maxlength="45">
                    </div>
                    <div class="form-group">
                        <label for="mataKuliah">Mata Kuliah</label>
                        <input type="text" class="form-control" id="mataKuliah" name="Mata_Kuliah" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="jumlahSks">Jumlah SKS</label>
                        <input type="number" class="form-control" id="jumlahSks" name="Jml_sks" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Tambah Mata Kuliah</button>
                        @if(session('success'))
                            <div class="alert alert-success mt-3">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
