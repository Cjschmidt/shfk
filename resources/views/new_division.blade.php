@extends('layouts.master')
@section('content')
    <div class="division-container">
        <div class="header">
            Skriv navnet på opdelingen
        </div>
        <div class="content">
            <div class="name">
                <input placeholder="F.eks. Havfisketur 2016" id="name"/>
                <input type="button" id="name_btn" class="button inline" value="Gem"/>
            </div>
        </div>
        <input type="hidden" id="division_id" value="{{$division->id}}">
    </div>
@stop