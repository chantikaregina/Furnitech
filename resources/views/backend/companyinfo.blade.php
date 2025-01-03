@extends('backend.layout.app')

@section('title', 'Company Info')

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
                <h6 class="mb-4">Company Info</h6>
                <div class="table-responsive">
                    <table class="table" id="companyinfo">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Perusahaan</th>
                                {{-- <th scope="col">Slogan</th> --}}
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Tahun Berdiri</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Email</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Logo</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($companyinfos as $companyinfo)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $companyinfo->company_name }}</td>
                                    {{-- <td>{{ $companyinfo->slogan }}</td> --}}
                                    <td>{{ Str::limit($companyinfo->deskripsi, 10, '...') }}</td>
                                    <td>{{ $companyinfo->tahun_berdiri }}</td>
                                    <td>{{ $companyinfo->alamat }}</td>
                                    <td>{{ $companyinfo->email }}</td>
                                    <td>{{ $companyinfo->telepon }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $companyinfo->logo) }}" alt="" width="30">
                                    </td>
                                    <td>
                                        <a href="{{ route('companyinfo.edit', $companyinfo->id_company_info) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{ route('companyinfo.delete', $companyinfo->id_company_info) }}"
                                            onclick="return confirm('Yakin Ingin Hapus Data?')"
                                            class="btn btn-danger btn-sm">Hapus</a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if ($companyinfos->isEmpty())
                        <div class="text-center">
                            <a href="{{ route('companyinfo.create') }}" class="btn btn-info btn-sm">Tambah</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#companyinfo').DataTable();
        });
    </script>

@endsection
