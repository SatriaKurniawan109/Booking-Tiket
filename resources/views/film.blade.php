@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <form action="/film" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row mt-2">
                    <div class="card mr-3 rounded-0" style="width: 30rem;">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Genre</label>
                                <select class="form-control" id="category_id" name="category_id">
                                    <option value disabled>Pilih</option>
                                    @foreach ($ct as $item)
                                        <option value="{{ $item->id }}">{{ $item->genre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul :</label>
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Enter judul">
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-0" style="width: 30rem;">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="tanggal_tayang" class="form-label">Tanggal Tayang :</label>
                                <input type="date" class="form-control" id="tanggal_tayang" name="tanggal_tayang">
                            </div>
                            <div class="mb-3">
                                <label for="waktu_tayang" class="form-label">Waktu Tayang :</label>
                                <input type="time" class="form-control" id="waktu_tayang" name="waktu_tayang">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row mt-2">
                <div class="card rounded-0" style="width: 61rem;">
                    <div class="card-body">
                        <table class="table border-b">
                            <tr>
                                <th>Genre</th>
                                <th>Judul Film</th>
                                <th>Tanggal Tayang</th>
                                <th>Waktu Tayang</th>
                                <th>Operation</th>
                            </tr>
                            @foreach ($datafilm as $item)
                                <tr>
                                    <td>{{ $item->category->genre }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->tanggal_tayang }}</td>
                                    <td>{{ $item->waktu_tayang }}</td>
                                    <td>
                                        <a href="edit-film/{{$item->id}}" style="color: blue">
                                            <i class="fas fa-edit"></i>
                                        </a>|
                                        <a href="delete-film/{{$item->id}}" style="color: red" onclick="return confirm('Are you sure?')">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
