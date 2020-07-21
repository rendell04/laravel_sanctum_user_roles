@extends('layouts.app')

@section('content')
    <div class="container w-50">
        <login v-bind:token="token"></login>
        <router-view></router-view>
    </div>
@endsection