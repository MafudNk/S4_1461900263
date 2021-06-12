<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Dokter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div class="col-md-12">
            <div style="height: 15px;"></div>
            <form action="/dokter/cari" method="GET">
                <div class="row">
                    <strong>Pencarian : </strong>
                    <div style="width: 10px;"></div>
                    <input type="text" name="nama" id="nama" placeholder="Masukkan Nama dokter" value="{{ old('nama') }}" class="input-group-text">
                    <div style="width: 10px;"></div>
                    <input type="submit" value="cari" class="btn btn-primary">
                    <div style="width: 10px;"></div>
                    <a href="/dokter/create" class="btn btn-primary">Tambah</a>
                    <div style="width: 10px;"></div>
                    <a href="/dokter/export/" class="btn btn-warning">Export Excel</a>
                </div>
            </form>
            <br>
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Nama Dokter</th>
                    <th>Jabatan</th>
                    <th>Action</th>
                </tr>
                @foreach($dokter as $key => $data)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->jabatan }}</td>
                    <td>
                        <a href="/dokter/{{ $data->id }}/edit/" class="btn btn-info">Update</a>
                        <form action="{{ route('dokter.destroy', $data->id) }}" method="POST" class="inline-block">
                            {!! method_field('delete') . csrf_field() !!}
                            <button type="submit" class="btn btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

</body>

</html>