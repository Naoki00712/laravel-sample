@extends('layouts.main')

@section('title','ユーザの一覧')

@section('content')
    <p>{{ $posts->name }}</p>
    <p>{{ $comments }}</p>
@endsection