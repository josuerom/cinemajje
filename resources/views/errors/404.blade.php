@extends('errors::illustrated-layout')

@section('codes', '404')
@section('title', __('Página no encontrada'))

@section('image')
<style>
    #apartado-derecho{
        text-align:center;
    }
    ul{
        text-decoration: none !important;
        list-style: none;
        color: black;
        font-weight: bold;
    }
</style>
<div id="apartado-derecho" style="background-color: #222;" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
    <ul>

    </ul>
</div>
@endsection

@section('message', __('Te has perdido?'))