<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
        @if (\Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {!! \Session::get('error')  !!}
            </div>
        @endif
            <div class="card" style="width: 100rem;">
                <div class="card-body">
                    <form action="/transaction" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="pelanggan" class="form-label">Nama pelanggan :</label>
                            <input type="text" class="form-control" id="pelanggan" name="pelanggan">
                          </div>
                        <div class="form-group">
                            <label>Film</label>
                            <select class="form-control" id="jadwal_id" name="jadwal_id">
                                <option value="">Pilih</option>
                                @foreach ($djadwal as $item)
                                    <option value="{{$item->id}}">{{$item->film->judul}} {{ ' | ' }} Tanggal :{{$item->tanggal}} {{ ' | ' }} Waktu :{{$item->waktu}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="mt-3 btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="card" style="width: 100rem;">
                <div class="card-body">
                    <table class="table border-b">
                        <thead>
                            <tr>
                                <th>Nama Pelanggan</th>
                                <th>Film id</th>
                                <th>Tanggal Tayang</th>
                                <th>Waktu Tayang</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transact as $data)
                            <tr>
                                <td>{{$data->pelanggan}}</td>
                                <td>{{$data->jadwal->film_id}}</td>
                                <td>{{$data->jadwal->tanggal}}</td>
                                <td>{{$data->jadwal->waktu}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>