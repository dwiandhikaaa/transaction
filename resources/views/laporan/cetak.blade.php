<!DOCTYPE html>
<html>
<head>
	<title>Cetak</title>
</head>
<body onload="javascript:window.print()">
	<center>
		<table style="text-align: center;">
			<tr>
				<td><img src=""></td>
				<td style="font-family: sans-serif; text-align: center;">
					<div style="text-align: center;">
						<h2>Laporan penjualan per- bulan</h2>
						<h2>Toko lancar</h2>
					</div>
					<p style="text-align: center;">Jl. Keling Jepara KM 36,  keling, Jepara, jawa tengah 59454</p>
				</td>
				<hr style="text-align: center;">
				<td><img src=""></td>
			</tr>
		</table>
	</center>
	<br>
	<table cellspacing="0" width="100%" border="1">
		<tr>
			<th>No</th>
            <th>id penjualan</th>
            <th>pembeli</th>
            <th>nama barang</th>
            <th>jumlah beli</th>
            <th>sub total</th>
            <th>total</th>
            <th>bayar</th>
            <th>petugas</th>
            <th>Tanggal dan waktu transaksi</th>
		</tr>
			@foreach( $data as $query)
         <tr>
            <th>{{$loop->iteration}}</th>
            <th>{{$query->id_penjualan}}</th>
            <th>{{$query->nama}}</th>
            <th>{{$query->nama_barang}}</th>
            <th>{{$query->jumlah_beli}}</th>
            <th>{{$query->sub_total}}</th>
            <th>{{$query->total}}</th>
            <th>{{$query->bayar}}</th>
            <th>{{$query->username}}</th>
            <th>{{$query->created_at}}</th>
         </tr>
            @endforeach

	</table>
	<table style="text-align: center;">
		<tr>
			<td style="font-family: sans-serif;text-align: center;">
				<div style="text-align: center; float: right; margin-left: 500px; margin-top: 25px;">Jepara, {{date('Y-m-d')}}</div>
			</td>
		</tr>
	</table>
	<table style="text-align: center;">
		<tr>
			<td style="font-family: sans-serif;text-align: center;">
				<div style="text-align: center; float: right; margin-left: 520px; margin-top: 40px;">Admin</div>
			</td>
		</tr>
	</table>

</body>
</html>