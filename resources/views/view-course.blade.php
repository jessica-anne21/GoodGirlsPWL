<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Course</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #649173;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #DBD5A4, #649173);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #DBD5A4, #649173); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

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
            background-color: #71B280;
            border-color: #71B280;
        }
    </style>
</head>

<body>
<div class="container">
    <h1 class="content-title">View Course</h1>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Kode MK</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">SKS</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($matakuliah as $mk)
                    <tr>
                        <td>{{ $mk->Kode_MK }}</td>
                        <td>{{ $mk->Mata_Kuliah }}</td>
                        <td>{{ $mk->Jml_sks }}</td>
                        <td>
                            <a href="{{ route('updatematkul', ['KodeMK' => $mk->Kode_MK]) }}" role="button" class="btn btn-primary btn-edit bi bi-pencil mr-2">Edit</a>
                            <form method="POST" action="{{ route('data-polling.delete') }}" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                @csrf
                                <input type="hidden" name="kodeMk" value="{{ $mk->Kode_MK }}">
                                <button type="submit" class="btn btn-danger btn-delete" title="Hapus">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    {{--function editMatakuliah(kodeMk) {--}}
    {{--    // Periksa apakah kodeMk tidak kosong atau tidak null--}}
    {{--    if (kodeMk !== '' && kodeMk !== null) {--}}
    {{--        // Mengarahkan pengguna ke halaman edit dengan menggunakan URL dinamis--}}
    {{--        window.location.href = "{{ route('update-matakuliah', ['kodeMk' => '']) }}/" + kodeMk;--}}
    {{--    } else {--}}
    {{--        console.log('Kode MK tidak valid:', kodeMk);--}}
    {{--        // Tambahkan logika atau tindakan lain sesuai kebutuhan jika kodeMk tidak valid--}}
    {{--    }--}}
    {{--}--}}
    {{--// Fungsi untuk menangani klik tombol Hapus--}}
    {{--function hapusMatakuliah(kodeMk) {--}}
    {{--    // Di sini Anda bisa membuat permintaan Ajax untuk menghapus data berdasarkan kodeMk--}}
    {{--    console.log('Hapus Kode MK:', kodeMk);--}}
    {{--}--}}

    // function editMatakuliah(Kode_MK) {
    //     // Periksa apakah Kode_MK tidak kosong atau tidak null
    //     if (Kode_MK !== '' && Kode_MK !== null) {
    //         // Mengarahkan pengguna ke halaman edit dengan menggunakan URL dinamis
    //         window.location.href = "updatematkul" + Kode_MK;
    //     } else {
    //         console.log('Kode MK tidak valid:', Kode_MK);
    //         // Tambahkan logika atau tindakan lain sesuai kebutuhan jika Kode_MK tidak valid
    //     }
    // }
    // // Fungsi untuk menangani klik tombol Hapus
    // function hapusMatakuliah(Kode_MK) {
    //     // Di sini Anda bisa membuat permintaan Ajax untuk menghapus data berdasarkan kodeMk
    //     console.log('Hapus Kode MK:', Kode_MK);
    // }

    {{--// Mendapatkan semua tombol Edit pada tabel--}}
    {{--const editButtons = document.querySelectorAll('.btn-edit');--}}

    {{--// Menambahkan event listener untuk setiap tombol Edit--}}
    {{--editButtons.forEach(button => {--}}
    {{--    button.addEventListener('click', () => {--}}
    {{--        const kodeMk = button.dataset.kodeMk; // Mendapatkan nilai data-kode-mk dari tombol--}}
    {{--        editMatakuliah(kodeMk); // Panggil fungsi editMatakuliah dengan kodeMk yang dipilih--}}
    {{--    });--}}
    {{--});--}}
    // Menambahkan event listener untuk setiap tombol Edit
    editButtons.forEach(button => {
        button.addEventListener('click', () => {
            const Kode_MK = button.dataset.Kode_MK; // Mendapatkan nilai data-kode-mk dari tombol
            editMatakuliah(Kode_MK); // Panggil fungsi editMatakuliah dengan kodeMk yang dipilih
        });
    });

    // Mendapatkan semua tombol Hapus pada tabel
    const deleteButtons = document.querySelectorAll('.btn-delete');

    // Menambahkan event listener untuk setiap tombol Hapus
    deleteButtons.forEach(button => {
        button.addEventListener('click', () => {
            const Kode_MK = button.dataset.Kode_MK; // Mendapatkan nilai data-kode-mk dari tombol
            hapusMatakuliah(Kode_MK); // Panggil fungsi hapusMatakuliah dengan kodeMk yang dipilih
        });
    });
    function konfirmasiHapus(Kode_MK) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                // Panggil fungsi Ajax untuk menghapus data
                hapusData(Kode_MK);
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire({
                    title: "Cancelled",
                    text: "Your imaginary file is safe :)",
                    icon: "error"
                });
            }
        });
    }

    function hapusData(Kode_MK) {
        $.ajax({
            type: "POST",
            url: "{{ route('data-polling.delete') }}",
            data: {
                _token: "{{ csrf_token() }}",
                kodeMk: Kode_MK
            },
            success: function (response) {
                if (response.success) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    }).then(() => {
                        location.reload(); // Refresh halaman setelah penghapusan berhasil
                    });
                } else {
                    Swal.fire({
                        title: "Error!",
                        text: "Failed to delete file.",
                        icon: "error"
                    });
                }
            },
            error: function () {
                Swal.fire({
                    title: "Error!",
                    text: "Failed to delete file.",
                    icon: "error"
                });
            }
        });
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
