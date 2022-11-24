@extends('layouts/murid')

@section('container')
<div class="row">
    <div class="col-12">
        <h4 class="fw-bold py-3 mb-4">
            Halaman Menabung
        </h4>
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
            @endif
        <div class="card mb-4">
            <h5 class="card-header"><b>Metode Pembayaran</b></h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <form id="transfer-form" class="row g-3" method="POST" action="{{ url('tabung') }}">
                            @csrf
                            <div class="col-12">
                                <table>
                                    <tr>
                                        <th>
                                            <div class="form-check form-check-inline">
                                                <input name="via" class="form-check-input" type="radio" value="OVO" id="via-cash" />
                                                <label class="form-check-label" for="via-cash">OVO</label>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="form-check form-check-inline">
                                                <input name="via" class="form-check-input" type="radio" value="MANDIRI MOBILE" id="via-cash" />
                                                <label class="form-check-label" for="via-cash">MANDIRI MOBILE</label>
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div class="form-check form-check-inline">
                                                <input name="via" class="form-check-input" type="radio" value="DANA" id="via-cash" />
                                                <label class="form-check-label" for="via-cash">DANA</label>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="form-check form-check-inline">
                                                <input name="via" class="form-check-input" type="radio" value="BCA MOBILE" id="via-cash" />
                                                <label class="form-check-label" for="via-cash">BCA MOBILE</label>
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div class="form-check form-check-inline">
                                                <input name="via" class="form-check-input" type="radio" value="GO-PAY" id="via-cash" />
                                                <label class="form-check-label" for="via-cash">GO-PAY</label>
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
                            <label for="nominal" class="form-label">Nominal</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp.</span>
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                <input type="hidden" name="status" value="pending">
                                <input type="text" id="saving-amount" name="amount" class="form-control" placeholder="Amount" required>
                                <span class="input-group-text">Minimum (Rp. 1,000)</span>
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
