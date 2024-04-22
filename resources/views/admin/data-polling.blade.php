
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
            background: #EECDA3;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #EF629F, #EECDA3);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #EF629F, #EECDA3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

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
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 10px;
            padding: 20px;
            backdrop-filter: blur(50px);
        }

        .content-title {
            text-align: center;
            font-weight: 1000;
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 5px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(50px);
            background-color: rgba(255, 255, 255, 0.5);
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
                <form method="POST" action="{{ route('data-polling.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="kodeMk">Kode MK</label>
                        <input type="text" class="form-control" id="kodeMk" name="Kode_Mk" required maxlength="45">
                    </div>
                    <div class="form-group">
                        <label for="mataKuliah">Mata Kuliah</label>
                        <input type="text" class="form-control" id="mataKuliah" name="Mata_Kuliah" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="dosen">Dosen</label>
                        <input type="text" class="form-control" id="dosen" name="dosen" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="ruangan">Ruangan</label>
                        <select class="form-control" id="ruangan" name="ruangan" required>
                            <option value="Lab Multimedia">Lab Multimedia</option>
                            <option value="Lab Adv 1">Lab Adv 1</option>
                            <option value="Lab Adv 2">Lab Adv 2</option>
                            <option value="Lab Database">Lab Database</option>
                            <option value="Lab Adv 3">Lab Adv 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlahMahasiswa">Jumlah Mahasiswa</label>
                        <input type="number" class="form-control" id="jumlahMahasiswa" name="Jml_Mahasiswa" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlahSks">Jumlah SKS</label>
                        <input type="number" class="form-control" id="jumlahSks" name="Jml_sks" required>
                    </div>
                    <div class="form-group">
                        <label for="jadwalMk">Jadwal Mata Kuliah</label>
                        <input type="text" class="form-control" id="jadwalMk" name="Jadwal_Mk" required maxlength="100">
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
