@extends('layouts.main-layout')
@section('content')
    <div class="devices-container">
        <h3>{{ $device->name }}</h3>
        <h3>{{ $device->model }}</h3>
        <h3>{{ $device->price }}</h3>
        <h3>{{ $device->consumption }}</h3>
    </div>
@endsection
