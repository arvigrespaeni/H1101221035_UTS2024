@extends('layout.main')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Form Master Jabatan</h5>
                </div>
                <div class="card-body">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Jabatan Karyawan</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi Jabatan</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
