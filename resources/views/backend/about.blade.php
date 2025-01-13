@extends('backend.layout.app')

@section('title', 'About')

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
                <h6 class="mb-4">About</h6>
                <div class="table-responsive">
                    <table class="table" id="about">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Background</th>
                                <th scope="col">Visi</th>
                                <th scope="col">Misi</th>
                                <th scope="col">Foto 1</th>
                                <th scope="col">Foto 2</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($abouts as $about)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $about->background }}</td>
                                    <td>{{ Str::limit($about->visi, 10, '...') }}</td>
                                    <td>{{ Str::limit($about->misi, 10, '...') }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $about->foto1) }}" alt="" width="30">
                                    </td>
                                    <td>
                                        <img src="{{ asset('storage/' . $about->foto2) }}" alt="" width="30">
                                    </td>
                                    <td>
                                        <a href="{{ route('about.edit', $about->id_about) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{ route('about.delete', $about->id_about) }}"
                                            onclick="return confirm('Yakin Ingin Hapus Data?')"
                                            class="btn btn-danger btn-sm">Hapus</a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if ($abouts->isEmpty())
                        <div class="text-center">
                            <a href="{{ route('about.create') }}" class="btn btn-info btn-sm">Tambah</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#about').DataTable();
        });
    </script>

@endsection
