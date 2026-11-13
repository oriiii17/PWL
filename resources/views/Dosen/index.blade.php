<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables Bootstrap 5 CSS -->
    <link href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container py-4">
      <h1 class="mb-4">Data Dosen</h1>
      
      <div class="mb-3">
        <a href="{{ route('dosen.create') }}" class="btn btn-primary">Create</a>
      </div>

      @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
      @endif

      <div class="card shadow-sm">
        <div class="card-body">
          <table id="tabel-dosen" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>NIK</th>
                <th>Nama Dosen</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $d)
                <tr>
                    <td>{{ $d->nik }}</td>
                    <td>{{ $d->namaDosen }}</td>
                    <td>
                        <a href="{{route('dosen.edit', $d->nik)}}" class="btn-solid theme-success">EDIT</a>
                    </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
    <!-- jQuery (Wajib untuk DataTables) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>

    <!-- Script untuk mengaktifkan DataTables pada tabel -->
    <script>
        $(document).ready(function() {
            $('#tabel-dosen').DataTable();
        });
    </script>
  </body>
</html>