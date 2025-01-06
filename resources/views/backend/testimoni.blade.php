@extends('backend.layout.app')

@section('title', 'Testimoni')

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
                <h6 class="mb-4">Testimoni</h6>
                <div class="table-responsive">
                    <table class="table" id="testimoni">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Pelanggan</th>
                                <th scope="col">Testimoni</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testimonis as $testimoni)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $testimoni->nama_pelanggan }}</td>
                                    <td>{{ $testimoni->testimoni }}</td>
                                    <td>{{ $testimoni->rating }}</td>
                                    <td>
                                        <a href="{{route('testimoni.delete', $testimoni->id_testimoni)}}"
                                            onclick="return confirm('Yakin Ingin Hapus Data?')"
                                            class="btn btn-danger btn-sm">Hapus</a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#testimoni').DataTable();
        });
    </script>

@endsection
