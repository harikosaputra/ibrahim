@extends('template') <!-- Menggunakan layout app.blade.php -->
@php
    $pageTitle = 'Add Aqiqah';
@endphp

@section('css')
<style>
    .important {
        color:red;
    }
</style>
@endsection

@section('content')
<section class="section">
    <form action="{{ route('aqiqah.store') }}" method="POST">
        @csrf
        <div class="card shadow">
            <div class="card-header">
                <div class="row">
                    <div class="col-md">
                        <h5 class="card-title">Create Aqiqah</h5>
                    </div>
                    <div class="col-md-auto">
                        <button class="btn btn-success" type="submmit">Save</button>
                        <a href="{{ route('aqiqah.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label for="nama">Nama <span class="important">*</span></label>
                        <input type="text" class="form-control" name="nama" required autocomplete="off">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <label for="phone">Phone <span class="important">*</span></label>
                        <input type="text" class="form-control" name="phone" required autocomplete="off">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <label for="email">Email <span class="important">*</span></label>
                        <input type="email" class="form-control" name="email" required autocomplete="off">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <label for="lokasi">Lokasi <span class="important">*</span></label>
                        <input type="text" class="form-control" name="lokasi" required autocomplete="off">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <label for="link">Link Website</label>
                        <input type="text" class="form-control" name="link" required autocomplete="off">
                    </div>
                </div>
            </div>
            

        </div>
    </form>
</section>
@endsection

@section('js')
<script src="/assets/extensions/jquery/jquery.min.js"></script>
@endsection