@extends('backend.layout.app')

@section('title', 'Edit Testimoni')

@section('content')

    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Edit Testimoni</h6>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('testimoni.update', $testimoni->id_testimoni)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="nama_pelanggan" class="form-label">Pelanggan</label>
                                <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="{{ old('nama_pelanggan', $service->nama_pelanggan) }}">
                                <div class="text-danger">
                                    @error('nama_pelanggan')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="testimoni" class="form-label">Testimoni</label>
                                <input type="text" class="form-control" id="testimoni" name="testimoni" value="{{ old('testimoni', $service->testimoni) }}">
                                <div class="text-danger">
                                    @error('testimoni')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="rating" class="form-label">Rating</label>
                                <input type="text" class="form-control" id="rating" name="rating" value="{{ old('rating', $service->rating) }}">
                                <div class="text-danger">
                                    @error('rating')
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
