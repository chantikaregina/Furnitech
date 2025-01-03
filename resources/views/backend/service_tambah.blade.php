@extends('backend.layout.app')

@section('title', 'Tambah Service')

@section('content')

    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Tambah Service</h6>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('service.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="company_name" class="form-label">Perusahaan</label>
                                <input type="text" class="form-control" id="company_name" name="company_name">
                                <div class="text-danger">
                                    @error('company_name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" rows="5" name="deskripsi"></textarea>
                                <div class="text-danger">
                                    @error('deskripsi')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="telepon" class="form-label">Telepon</label>
                                <input type="text" class="form-control" id="telepon" name="telepon">
                                <div class="text-danger">
                                    @error('telepon')
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
