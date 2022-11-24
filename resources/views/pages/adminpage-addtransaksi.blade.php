
@extends('layouts/admin')

@section('container')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.css" />
<div class="row">
    <div class="col-12">
        <h4 class="fw-bold py-3 mb-4">
            Halaman Menabung
        </h4>

        <div class="card mb-4">
            <h5 class="card-header"><b>Metode Pembayaran</b></h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <form id="transfer-form" class="row g-3" method="POST" action="{{ url('tabungin') }}">
                            @csrf
                            <div class="col-12">
                                <table>
                                    <tr>
                                        <th>
                                            <div class="form-check form-check-inline">
                                                <input name="via" class="form-check-input" type="radio" value="Wali Kelas" id="via-cash" />
                                                <label class="form-check-label" for="via-cash">Wali Kelas</label>
                                            </div>
                                        </th>
                                    </tr>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <h5 class="card-header"><b>Isian Pembayaran</b></h5>
            <div class="card-body">
                    <div class="row">
                        <div class="mb-3 col-12">
                            <label for="name" class="form-label">Nama</label>
                            <div class="input-group">
                                <input type="text" id="saving-amount" name="amount" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3 col-12">
                            <label for="nominal" class="form-label">Nominal</label>
                            <div class="input-group">
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                <input type="hidden" name="status" value="pending">
                                <input type="text" id="saving-amount" name="amount" class="form-control" placeholder="Amount" required>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Tabung</button>
                        <button type="reset" class="btn btn-label-secondary">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    @endsection