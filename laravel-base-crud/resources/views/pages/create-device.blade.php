@extends('layouts.main-layout')
@section('content')

    <form id="create-device" action="{{ route('device-store') }}" method="POST">

        @csrf
        @method('POST')

        <label for="name">Name:</label>
        <input type="text" name="name">

        <label for="model">Model:</label>
        <input type="text" name="model">

        <label for="price">Price:</label>
        <input type="text" name="price">

        <label for="consumption">Consumption:</label>
        <input type="text" name="consumption">

        <input type="submit" value="SUBMIT">

    </form>

@endsection
