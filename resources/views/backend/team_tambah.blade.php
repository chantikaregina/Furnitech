@extends('backend.layout.app')

@section('title', 'Tambah Team')

@section('content')

    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Tambah Team</h6>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('team.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <select id="jabatan" name="jabatan" class="form-select">
                                    <option value="" disabled selected>Pilih Jabatan</option>
                                    <option value="CEO (Chief Executive Officer)">CEO (Chief Executive Officer)</option>
                                    <option value="CTO (Chief Technology Officer)">CTO (Chief Technology Officer)</option>
                                    <option value="CFO (Chief Financial Officer)">CFO (Chief Financial Officer)</option>
                                    <option value="Manager HR">Manager HR</option>
                                    <option value="Manager Marketing">Manager Marketing</option>
                                    <option value="Manager Production">Manager Production</option>
                                    <option value="Designer">Designer</option>
                                    <option value="Engineer">Engineer</option>
                                    <option value="Staff Admin">Staff Admin</option>
                                    <option value="Staff Sales">Staff Sales</option>
                                    <option value="Technician">Technician</option>
                                    <option value="Intern">Intern</option>
                                </select>
                                <div class="text-danger">
                                    @error('jabatan')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="nama_team" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama_team" name="nama_team">
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
