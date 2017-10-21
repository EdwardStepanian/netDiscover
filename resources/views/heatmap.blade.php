@extends('layouts.app')
<link href="{{ asset('css/map.css') }}" rel="stylesheet">

@section('content')
            <div id="map-canvas"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB72qv_GuZVo7oBUUOGc_APkbRGGA4iHlc&sensor=false"
            async defer></script>
    <script src="{{ asset('js/buildHeatmap.js') }}"></script>
    <script src="{{ asset('js/gmaps-heatmap.js') }}"></script>

            <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.3/jquery.autocomplete.min.js"> </script>
            <script src="{{ asset('js/heatMap.js') }}"></script>
@endsection

