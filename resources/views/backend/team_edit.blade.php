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
                                <select id="jabatan" name="jabatan" class="form-select">
                                    <option value="" disabled selected>Pilih Jabatan</option>
                                    <option value="CEO (Chief Executive Officer)" <?= $team->jabatan == 'CEO (Chief Executive Officer)' ? 'selected' : '' ?>>CEO (Chief Executive Officer)</option>
                                    <option value="CTO (Chief Technology Officer)" <?= $team->jabatan == 'CTO (Chief Technology Officer)' ? 'selected' : '' ?>>CTO (Chief Technology Officer)</option>
                                    <option value="CFO (Chief Financial Officer)"<?= $team->jabatan == 'CFO (Chief Financial Officer)' ? 'selected' : '' ?>>CFO (Chief Financial Officer)</option>
                                    <option value="Manager HR" <?= $team->jabatan == 'Manager HR' ? 'selected' : '' ?> >Manager HR</option>
                                    <option value="Manager Marketing" <?= $team->jabatan == 'Manager Marketing' ? 'selected' : '' ?>>Manager Marketing</option>
                                    <option value="Manager Production"<?= $team->jabatan == 'Manager Production' ? 'selected' : '' ?>>Manager Production</option>
                                    <option value="Designer"<?= $team->jabatan == 'Designer' ? 'selected' : '' ?>>Designer</option>
                                    <option value="Engineer"<?= $team->jabatan == 'Engineer' ? 'selected' : '' ?>>Engineer</option>
                                    <option value="Staff Admin"<?= $team->jabatan == 'Staff Admin' ? 'selected' : '' ?>>Staff Admin</option>
                                    <option value="Staff Sales"<?= $team->jabatan == 'Staff Sales' ? 'selected' : '' ?>>Staff Sales</option>
                                    <option value="Technician"<?= $team->jabatan == 'Technician' ? 'selected' : '' ?>>Technician</option>
                                    <option value="Intern"<?= $team->jabatan == 'Intern' ? 'selected' : '' ?>>Intern</option>
                                </select>
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
