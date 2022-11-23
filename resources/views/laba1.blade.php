@extends('laouts.mainApp')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app1.js'])
    <script>
        window.default_locale = "{{ config('app.lang') }}";
        window.fallback_locale = "{{ config('app.fallback_locale') }}";
    </script>
@endsection
