@extends('Layout.main')
@section('title')
    Nota Pembelian
@endsection
@section('header')
    <h1 class="m-0">Nota Pembelian</h1>
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="invoice p-3 mb-3">
                        <button type="button" class="btn btn-warning btn-flat"
                            onclick="notaPembelian('{{ route('pembelian.notaPembelian') }}')">Cetak Nota</button>
                        <a class="btn btn-primary" href="{{ route('pembelian.index') }}">Tambah Pembelian</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
@push('script')
    <script>
        document.cookie = "innerHeight=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";

        function notaPembelian(url, title) {
            popupCenter(url, title, 625, 500);
        }

        function popupCenter(url, title, w, h) {
            const dualScreenLeft = window.screenLeft !== undefined ? window.screenLeft : window.screenX;
            const dualScreenTop = window.screenTop !== undefined ? window.screenTop : window.screenY;

            const width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document
                .documentElement.clientWidth : screen.width;
            const height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document
                .documentElement.clientHeight : screen.height;

            const systemZoom = width / window.screen.availWidth;
            const left = (width - w) / 2 / systemZoom + dualScreenLeft
            const top = (height - h) / 2 / systemZoom + dualScreenTop
            const newWindow = window.open(url, title,
                `
            scrollbars=yes,
            width  = ${w / systemZoom}, 
            height = ${h / systemZoom}, 
            top    = ${top}, 
            left   = ${left}
        `
            );
            if (window.focus) newWindow.focus();
        }
    </script>
@endpush
