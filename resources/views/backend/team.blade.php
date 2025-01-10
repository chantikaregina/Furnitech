@extends('backend.layout.app')

@section('title', 'Team')

@section('content')

    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100">
                @if (session('success'))
                    <div class="alert alert-success">
                        <div class="text-center">
                            {{ session('success') }}
                        </div>
                    </div>
                @endif
                <h6 class="mb-4">Team</h6>
                <div class="table-responsive">
                    <table class="table" id="team">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teams as $team)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $team->jabatan }}</td>
                                    <td>{{ $team->nama_team }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $team->foto) }}" alt="" width="30">
                                    </td>
                                    <td>
                                        <a href="{{route('team.edit', $team->id_team)}}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{route('team.delete', $team->id_team)}}"
                                            onclick="return confirm('Yakin Ingin Hapus dari Tim?')"
                                            class="btn btn-danger btn-sm">Hapus</a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                        <a href="{{route('team.create')}}" class="btn btn-info btn-sm">Tambah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#team').DataTable();
        });
    </script>

@endsection
