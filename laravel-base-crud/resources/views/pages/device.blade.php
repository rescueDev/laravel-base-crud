@extends('layouts.main-layout')
@section('content')
    <div class="devices-container">
        <h3>Name: {{ $device->name }}</h3>
        <h3>Model: {{ $device->model }}</h3>
        <h3>Price: {{ $device->price }}</h3>
        <h3>Consumption: {{ $device->consumption }}</h3>
    </div>
@endsection
