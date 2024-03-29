@extends('layout.main')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Form Presensi Pegawai</h5>
                </div>
                <div class="card-body">
                        @csrf
                        <div class="mb-3">
                            <label for="employee_id" class="form-label">ID Pegawai</label>
                            <input type="text" class="form-control" id="employee_id" name="employee_id">
                        </div>
                        <div class="mb-3">
                            <label for="employee_name" class="form-label">Nama Pegawai</label>
                            <input type="text" class="form-control" id="employee_name" name="employee_name">
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                        <div class="mb-3">
                            <label for="time_in" class="form-label">Jam Masuk Kerja</label>
                            <input type="time" class="form-control" id="time_in" name="time_in">
                        </div>
                        <div class="mb-3">
                            <label for="time_out" class="form-label">Jam Keluar Kerja</label>
                            <input type="time" class="form-control" id="time_out" name="time_out">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
