@extends('layout')
    @section('content')
        <div class="content">
            <div class="title m-b-md">
                Laravel
            </div>

            <div class="links">
                <a href="{{ url('/admin') }}">Administration</a>
                <a href="{{ url('/admin/12/toto') }}">Edit 12</a>
                <a href="{{ url('/myform') }}">Form</a>
            </div>
        </div>
@endsection