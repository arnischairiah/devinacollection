@extends('layouts/murid')

@section('container')
<div class="card">
    <h3 class="card-header">Your Savings History</h3>
    <div class="table-responsive text-nowrap">
        <table class="table text-center">
            <thead>
                <tr>
                    <th class="w-25">No</th>
                    <th class="w-25">Amount</th>
                    <th class="w-25">Transfer VIA</th>
                    <th class="w-25">Status</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @isset($histories)
                @forelse ($histories as $history)
                    <tr>
                        <td><strong>{{ $no++ }}</strong></td>
                        <td>Rp. {{ $history->amount }} </td>
                        @if ($history->via == 'OVO')
                            <td>
                                <img src="./assets/img/icons/misc/ovo.png" alt="Avatar" class="avatar avatar-xs pull-up mx-auto">
                            </td>
                        @elseif($history->via == 'DANA')
                            <td>
                                <img src="./assets/img/icons/misc/dana.png" alt="Avatar" class="avatar avatar-xs pull-up mx-auto" style="width: 2.4rem">
                            </td>
                        @elseif($history->via == 'GO-PAY')
                            <td>
                                <img src="./assets/img/icons/misc/gopay.png" alt="Avatar" class="avatar avatar-xs pull-up mx-auto">
                            </td>
                        @elseif($history->via == 'MANDIRI MOBILE')
                            <td>
                                <img src="./assets/img/icons/misc/mandiri.jpg" alt="Avatar" class="avatar avatar-xs pull-up mx-auto">
                            </td>
                        @elseif($history->via == 'BCA MOBILE')
                            <td>
                                <img src="./assets/img/icons/misc/bca.png" alt="Avatar" class="avatar avatar-xs pull-up mx-auto">
                            </td>
                            @elseif($history->via == 'Wali Kelas')
                            <td>
                                <img src="./assets/img/icons/misc/admin.png" alt="Avatar" class="avatar avatar-xs pull-up mx-auto" style="width: 2.4rem">
                            </td>
                        @endif
                        <td>
                            <span class="badge bg-label-@if($history->status == "pending"){{'warning'}}@elseif($history->status == 'rejected'){{"danger"}}@else{{"success"}}@endif me-1">{{ $history->status }}</span>
                        </td>
                    </tr>
                @empty
                @endforelse
            @else
            <tr>
                <td colspan="4">
                    <h4 class="mb-0">
                        <i class="bx bxs-sad bx-md"></i>
                        <span style="vertical-align: -.2rem">Uh oh, you have no record to show</span> 
                    </h4>
                </td>
            </tr>
            @endisset
            </tbody>
        </table>
    </div>
</div>
@endsection