@extends('layouts.work')

@section('header')
    @include('partials.nav')
@endsection

@section('content')
    @include('partials.sidebar')
    <v-app>
        <test-table></test-table>
    </v-app>
@endsection 
@section('script')
    {{-- @include('./public/js/work-space-table.js') --}}
@endsection
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('partials.sidebar')
</body>
</html> --}}