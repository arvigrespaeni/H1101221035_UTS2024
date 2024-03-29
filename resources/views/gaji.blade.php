@extends('layout.main')
@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Form Gaji Karyawan</h5>
                </div>
                <div class="card-body">
                    
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Karyawan</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan Karyawan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan">
                        </div>
                        <div class="mb-3">
                            <label for="gaji" class="form-label">Gaji</label>
                            <input type="text" class="form-control" id="gaji" name="gaji">
                        </div>
                        <div class="mb-3">
                            <label for="pendidikan" class="form-label">Pendidikan Terakhir Karyawan</label>
                            <select class="form-select" id="pendidikan" name="pendidikan">
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA/SMK">SMA/SMK</option>
                                <option value="Diploma">Diploma</option>
                                <option value="Sarjana">Sarjana</option>
                                <option value="Pasca Sarjana">Pasca Sarjana</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
