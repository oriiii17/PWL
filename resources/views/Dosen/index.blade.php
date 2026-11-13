<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container py-4">
      <h1 class="mb-4">Data Dosen</h1>
      <div class="card">
        <div class="card-body">
            <div class="header">
    <a href="{{ route('dosen.create') }}" class="btn btn-primary">Create</a>
</div>
          <table id="tabel-dosen" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th>NIK</th>
                <th>Nama Dosen</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $d->nik }}</td>
                        <td>{{ $d->namaDosen }}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
    <script scr ="https://cdn.datatables.net/3.1.5/js/dataTables.min.js" crossorigin ="anymous"></script>
    </script>
  </body>
</html>