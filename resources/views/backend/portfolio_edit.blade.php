@extends('backend.layout.app')

@section('title', 'Edit Portfolio')

@section('content')

    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Edit Portfolio</h6>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('portfolio.update', $portfolio->id_portfolio)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="project_name" class="form-label">Projek</label>
                                <input type="text" class="form-control" id="project_name" name="project_name" value="{{ old('project_name', $portfolio->project_name) }}">
                                <div class="text-danger">
                                    @error('project_name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" rows="5" name="deskripsi">{{ $portfolio->deskripsi }}</textarea>
                                <div class="text-danger">
                                    @error('deskripsi')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="project_date" class="form-label">Tanggal Projek</label>
                                <input type="date" class="form-control" id="project_date" name="project_date" value="{{ old('project_date', $portfolio->project_date) }}">
                                <div class="text-danger">
                                    @error('project_date')
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
