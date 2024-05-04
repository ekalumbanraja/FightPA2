@extends('layouts.customer')

@section('css')
<style>
    .status{
        background-color: red;
    }
    .btn.success {
        background-color: #28a745;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .btn.success:hover {
        background-color: #218838;
    }

    /* Style untuk tombol bahaya */
    .btn.danger {
        background-color: #dc3545;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .btn.danger:hover {
        background-color: #c82333;
    }
</style>
@endsection

@section('content')
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Transaction</h1>
                </div>
            </div>
            <div class="col-lg-7">
                
            </div>
        </div>
    </div>
</div>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="row">
    <div class="col-md-12">
        <div class="table-wrap">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nama Penerima</th>
                        <th>Nama Barang</th>
                        <th>Total Harga</th>
                        <th>NO HP </th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- <input type="hidden" name="snapToken" value="{{ $snapToken }}"> --}}
                    @foreach($orders as $order)
<tr>
    <td>{{ $order->recipient_name }}</td>
    <td>
        @foreach(json_decode($order->namaproduk) as $productName)
            {{ $productName }} <br>
        @endforeach
    </td>
    <td>{{ 'Rp ' . number_format($order->total_price, 0, ',', '.') }}</td>
    <td>{{ $order->phone }}</td>
    <td><a href="#" class="status">{{ $order->status }}</a></td>
    <td>
        <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn danger">Hapus</button>
        </form>
        <button class="pay-button" data-snap-token="{{ $order->snap_token }}">Bayar</button>
    </td>
</tr>
@endforeach
             
                </tbody>
            </table>
        </div>
    </div>
</div>
<br><br><br><br>

@endsection

@section('script')
{{-- <script type="text/javascript"
    src="https://app.stg.midtrans.com/snap/snap.js"
    data-client-key="{{ config('midtrans.clientKey') }}">
</script> --}}
<script type="text/javascript">
   document.addEventListener("DOMContentLoaded", function(event) { 
    var payButtons = document.querySelectorAll('.pay-button');
    payButtons.forEach(function(button) {
        button.addEventListener('click', function () {
            var snapToken = this.getAttribute('data-snap-token');
            snap.pay(snapToken, {
                onSuccess: function (result) {
                    alert("Pembayaran berhasil!"); 
                    console.log(result);
                },
                onPending: function (result) {
                    alert("Menunggu pembayaran Anda!"); 
                    console.log(result);
                },
                onError: function (result) {
                    alert("Pembayaran gagal!"); 
                    console.log(result);
                },
                onClose: function () {
                    alert('Anda menutup popup tanpa menyelesaikan pembayaran');
                }
            });
        });
    });
});
</script>
@endsection
