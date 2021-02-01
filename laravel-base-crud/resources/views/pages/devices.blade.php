@extends('layouts.main-layout')
@section('content')
    <div class="devices-container">
        @foreach ($devices as $device)
            <ul>
                <li>
                    <a href="{{ route('device-show', $device->id) }}">

                        {{ $device->name }}
                    </a>
                </li>
            </ul>

        @endforeach
    </div>
@endsection
