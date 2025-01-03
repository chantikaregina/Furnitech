@extends('backend.layout.app')

@section('title', 'Edit Company Info')

@section('content')

    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Edit Company Info</h6>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('companyinfo.update', $companyinfo->id_company_info) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="company_name" class="form-label">Perusahaan</label>
                                <input type="text" class="form-control" id="company_name" name="company_name" value="{{ old('company_name', $companyinfo->company_name) }}">
                                <div class="text-danger">
                                    @error('company_name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="slogan" class="form-label">Slogan</label>
                                <input type="text" class="form-control" id="slogan" name="slogan" value="{{ old('slogan', $companyinfo->slogan) }}">
                                <div class="text-danger">
                                    @error('slogan')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" rows="5" name="deskripsi">{{ $companyinfo->deskripsi }}</textarea>
                                <div class="text-danger">
                                    @error('deskripsi')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="tahun_berdiri" class="form-label">Tahun Berdiri</label>
                                <input type="text" class="form-control" id="tahun_berdiri" name="tahun_berdiri" value="{{ old('tahun_berdiri', $companyinfo->tahun_berdiri) }}">
                                <div class="text-danger">
                                    @error('tahun_berdiri')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', $companyinfo->alamat) }}">
                                <div class="text-danger">
                                    @error('alamat')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $companyinfo->email) }}">
                                <div class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="telepon" class="form-label">Telepon</label>
                                <input type="text" class="form-control" id="telepon" name="telepon" value="{{ old('telepon', $companyinfo->telepon) }}">
                                <div class="text-danger">
                                    @error('telepon')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="logo" class="form-label">Logo</label>
                                <input type="file" class="form-control" id="logo" name="logo" value="{{ old('logo', $companyinfo->logo) }}">
                                <div class="text-danger">
                                    @error('logo')
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
