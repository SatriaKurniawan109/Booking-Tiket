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
    @if (\Session::has('error'))
      <div class="alert alert-danger" role="alert">
        {!! \Session::get('error')  !!}
      </div>
    @endif
    
    <form action="/film" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{-- <div class="mb-3">
          <label for="judul" class="form-label">Judul :</label>
          <input type="text" class="form-control" id="judul" placeholder="Enter judul" name="judul">
        </div> --}}
        
        {{-- <div class="form-group">
          <label>Judul Film</label>
          <select class="form-control" id="jadwal_id" name="jadwal_id">
              <option disabled value>pilih</option>
              @foreach ($f as $item)
                <option value="{{$item->id}}">{{$item->judul}}</option>
              @endforeach
          </select>
        </div> --}}
        <div class="mb-3">
          <label for="film_id" class="form-label">Film_id :</label>
          <input type="text" class="form-control" id="film_id" name="film_id">
        </div>
        <div class="mb-3">
          <label for="judul" class="form-label">Tanggal tayang :</label>
          <input type="date" class="form-control" id="tanggal" name="tanggal">
        </div>
        <div class="mb-3">
          <label for="judul" class="form-label">Waktu tayang :</label>
          <input type="time" class="form-control" id="waktu" name="waktu">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      <table>
        <thead>
          <tr>
            <th>Judul</th>
            <th>Tanggal Tayang</th>
            <th>Waktu Tayang</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($jadwal as $data)
              <td>{{$data->film->judul}}</td>
              <td>{{$data->tanggal}}</td>
              <td>{{$data->waktu}}</td>
          @endforeach
        </tbody>
      </table>
</body>
</html>