@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
@include('users.partials.header', [
'title' => __('Hello') . ', '. auth()->user()->firstname,
'class' => 'col-lg-12'
])

<div class="container-fluid mt--7">
    <router-view></router-view>
    @include('layouts.footers.auth')
</div>
@endsection