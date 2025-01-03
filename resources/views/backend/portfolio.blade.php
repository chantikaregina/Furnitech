@extends('backend.layout.app')

@section('title', 'Portfolio')

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
                <h6 class="mb-4">Portfolio</h6>
                <div class="table-responsive">
                    <table class="table" id="portfolio">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Projek</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Tanggal Projek</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($portfolios as $portfolio)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $portfolio->project_name }}</td>
                                    <td>{{ $portfolio->deskripsi }}</td>
                                    <td>{{ $portfolio->project_date }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $portfolio->foto) }}" alt="" width="30">
                                    </td>
                                    <td>
                                        <a href="{{ route('portfolio.edit', $portfolio->id_portfolio) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{ route('portfolio.delete', $portfolio->id_portfolio) }}"
                                            onclick="return confirm('Yakin Ingin Hapus Data?')"
                                            class="btn btn-danger btn-sm">Hapus</a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                        <a href="{{ route('portfolio.create') }}" class="btn btn-info btn-sm">Tambah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#portfolio').DataTable();
        });
    </script>

@endsection
