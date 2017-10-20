@extends('layouts.app')
<link href="{{ asset('css/map.css') }}" rel="stylesheet">

@section('content')
            <div id="map-canvas"></div>

    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"
            async defer></script>
    <script src="{{ asset('js/buildHeatmap.js') }}"></script>
    <script src="{{ asset('js/gmaps-heatmap.js') }}"></script>
    <script src="{{ asset('js/heatMap.js') }}"></script>
@endsection

