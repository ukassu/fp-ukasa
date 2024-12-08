@extends ('MyEmployeeApp.layout')
@section('title', 'Notifikasi')
{{-- @section('navbar') --}}
<div class="card-body">
    <form action="{{ route('notifikasi.clear') }}" method="POST">
        @csrf
        <button type="submit">clear all</button>
    </form>
    @foreach($notifikasi as $notifikasi)
        <div>{{ $notifikasi->pesan }}</div>
        <form action="{{ route('notifikasi.delete', $notifikasi->id) }}" method="POST">
            @csrf
            <button type="submit">delete</button>
        </form>
    @endforeach
</div>
{{-- @endsection --}}