@extends('template') 

@section('css')
<link rel="stylesheet" href="/assets/compiled/css/table-datatable-jquery.css">
<link rel="stylesheet" href="{{ asset('assets/css/customDataTables.css') }}">
<style>

</style>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('success'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Sukses!',
                    text: '{{ session('success') }}',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                });
            });
        </script>

        {{-- <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Sukses!',
                    text: '{{ session('success') }}',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK',
                    timer: 1000, // Alert akan otomatis hilang dalam 3 detik (3000ms)
                    timerProgressBar: true, // Menampilkan progress bar pada alert
                    showConfirmButton: false // Menghilangkan tombol OK agar otomatis tertutup
                });
            });
        </script> --}}
    @endif

    <script src="/assets/extensions/jquery/jquery.min.js"></script>
@endsection

@section('content')
<section class="section">
    <div class="card shadow">
        <div class="card-header">
            <div class="row">
                <div class="col-md">
                    <h5 class="card-title">Daftar Aqiqah</h5>
                </div>
                <div class="col-md-auto">
                    <a href="{{ route('aqiqah.create') }}" class="btn btn-info">Create Aqiqah</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Aqiqah</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Lokasi</th>
                            <th>Link Form</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($aqiqahs as $aqiqah)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $aqiqah->nama }}</td>
                            <td>{{ $aqiqah->phone }}</td>
                            <td>{{ $aqiqah->email }}</td>
                            <td>{{ $aqiqah->lokasi }}</td>
                            <td>{{ $aqiqah->link }}</td>
                            <td>
                                <a class="btn btn-warning" href="{{ route('aqiqah.edit', $aqiqah->id) }}">Edit</a>
                                <form action="{{ route('aqiqah.destroy', $aqiqah->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="/assets/extensions/jquery/jquery.min.js"></script>
<script src="/assets/extensions/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="/assets/static/js/pages/datatables.js"></script>

@endsection