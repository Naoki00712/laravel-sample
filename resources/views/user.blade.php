@extends('layouts.main')

@section('title','ユーザの一覧')

@section('content')
    <p>{{ $users->name }}</p>
@endsection