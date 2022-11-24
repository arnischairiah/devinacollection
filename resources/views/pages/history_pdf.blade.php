<!DOCTYPE html>
<html>
<head>
	<title>REPORT DATA</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>DAFTAR TRANSAKSI SISWA</h5>
        <hr>
	</center>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NISN</th>
                                    <th>NAMA SISWA</th>
                                    <th>NOMINAL</th>
                                    <th>TRANSFER DARI</th>
                                    <th>STATUS</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach($histories as $his)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    @foreach ($users as $u)
                                        @if ($his->user_id == $u->id)
                                        <td> {{ $u->NISN }}</td>
                                        @endif
                                    @endforeach
                                    @foreach ($users as $u)
                                        @if ($his->user_id == $u->id)
                                        <td> {{ $u->username }}</td>
                                        @endif
                                    @endforeach
                                        <td> {{$his->amount}} </td>
                                        <td> {{$his->via}} </td>
                                    @if ($his->status=='confirmed')
                                        <td> <span class="badge bg-label-success me-1"> {{$his->status}} </span> </td>
                                    @elseif($his->status=='pending')
                                        <td> <span class="badge bg-label-warning me-1"> {{$his->status}} </span> </td>
                                    @elseif($his->status=='rejected')
                                        <td> <span class="badge bg-label-danger me-1"> {{$his->status}} </span> </td>
                                    @endif
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
          <!-- / Content -->
</body>
</html>