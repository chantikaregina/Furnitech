@extends('backend.layout.app')

@section('title', 'Edit Team')

@section('content')

    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Edit Team</h6>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('team.update', $team->id_team)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ old('jabatan', $team->jabatan) }}">
                                <div class="text-danger">
                                    @error('jabatan')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="nama_team" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama_team" name="nama_team" value="{{ old('nama_team', $team->nama_team) }}">
                                <div class="text-danger">
                                    @error('nama_team')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto</label>
                                <input type="file" class="form-control" id="foto" name="foto">
                                <div class="text-danger">
                                    @error('foto')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
