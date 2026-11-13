<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Dosen</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Tambah Data Dosen</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dosen.store') }}" method="POST">
                            @csrf
                            
                            <!-- Input NIK -->
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="nik" name="nik" maxlength="7" placeholder="Masukkan 7 digit NIK" required>
                            </div>

                            <!-- Input Nama Dosen -->
                            <div class="mb-3">
                                <label for="namaDosen" class="form-label">Nama Dosen</label>
                                <input type="text" class="form-control" id="namaDosen" name="namaDosen" maxlength="35" placeholder="Masukkan nama lengkap beserta gelar" required>
                            </div>

                            <!-- Tombol Aksi -->
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>