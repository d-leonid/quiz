@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="add">
                <a href="{{ URL('Admin/AddGames') }}" class="btn btn-success float-right">
                    Add Games
                </a>
            </div>
            <div class="row mt-5">
            @foreach($games as $game)
            <div class='col-md-4 class_for_custom_bootstrap'>
                <div class='full_width_div'>
                    <div class='div_for_image'>
                        <img class='img_class_games img-fluid' src='{{ asset("images/$game->img") }}'>
                    </div>
                    <div class='div_for_title'>
                        {{ $game->title}}
                    </div>
                </div>
                <div class="mt-1">
                    visit : {{$game->visit}}
                    <a  href='{{ URl("Admin/DeleteGames/$game->id") }}' class="float-right btn btn-danger">Delete</a>
                    <a  href='{{ URl("Admin/EditGames/$game->id") }}' class="ml-1 mr-1 float-right btn btn-warning">Edit</a>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
