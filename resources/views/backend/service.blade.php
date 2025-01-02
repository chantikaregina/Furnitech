@extends('backend.layout.app')

@section('title', 'Service')

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
                <h6 class="mb-4">Service</h6>
                <div class="table-responsive">
                    <table class="table" id="service">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Perusahaan</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $service->company_name }}</td>
                                    <td>{{ $service->deskripsi }}</td>
                                    <td>{{ $service->telepon }}</td>
                                    <td>
                                        <a href="{{route('service.edit', $service->id_service)}}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{route('service.delete', $service->id_service)}}"
                                            onclick="return confirm('Yakin Ingin Hapus Data?')"
                                            class="btn btn-danger btn-sm">Hapus</a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                        <a href="{{route('service.create')}}" class="btn btn-info btn-sm">Tambah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#service').DataTable();
        });
    </script>

@endsection
