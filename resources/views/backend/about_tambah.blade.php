@extends('backend.layout.app')

@section('title', 'Tambah About')

@section('content')

    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Tambah About</h6>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="background" class="form-label">Background</label>
                                <textarea class="form-control" rows="5" name="background"></textarea>
                                <div class="text-danger">
                                    @error('background')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="visi" class="form-label">Visi</label>
                                <textarea class="form-control" rows="5" name="visi"></textarea>
                                <div class="text-danger">
                                    @error('visi')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="misi" class="form-label">Misi</label>
                                <textarea class="form-control" rows="5" name="misi"></textarea>
                                <div class="text-danger">
                                    @error('misi')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="foto1" class="form-label">Foto 1</label>
                                <input type="file" class="form-control" id="foto1" name="foto1">
                                <div class="text-danger">
                                    @error('foto1')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="foto2" class="form-label">Foto 2</label>
                                <input type="file" class="form-control" id="foto2" name="foto2">
                                <div class="text-danger">
                                    @error('foto2')
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
