@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <div class="mx-auto float-left m-b">
                    @include('components.back-button')
                </div>

                <div class="mx-auto float-right m-b">
                    <a href="#" onclick="document.getElementById('board-delete-form').submit()" style="margin-left: 10px">
                        <button class="btn btn-danger">
                            @lang('boards.deleteBoard') <i class="fas fa-trash"></i>
                        </button>
                    </a>
                    <a href="{{ route('boards.edit', ['board' => $board->id]) }}">
                        <button class="btn btn-primary">
                            @lang('boards.editBoard') <i class="fas fa-pencil-alt"></i>
                        </button>
                    </a>
                </div>

                <form id="board-delete-form" action="{{ route('boards.destroy', ['board' => $board->id]) }}" method="POST" style="display: none">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                </form>
            </div>
        </div>
    </div>

    {{-- Fixing bug with .float-right and .Panel --}}
    <div class="clearfix"></div>

    <div class="container-fluid">
        <div class="row">
            @foreach($board->cards as $card)
                <div class="col-md-3 m-b"> <!-- Adjust the number of columns based on your preference -->
                    <div class="card" style="border: 1px solid #ccc; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">

                        <div class="card-header" style="background-color: #f8f9fa; border-bottom: 1px solid #ccc;">
                            <div class="float-left"><h5 class="m-0">{{ $card->name }}</h5></div>
                            <div class="float-right">
                                <a href="#" onclick="document.getElementById('card-delete-form-{{ $card->id }}').submit()" style="margin-left: 10px">
                                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </a>
                                <a href="{{ route('cards.edit', ['card' => $card->id]) }}">
                                    <button class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></button>
                                </a>
                                <form id="card-delete-form-{{ $card->id }}" action="{{ route('cards.destroy', ['card' => $card->id]) }}" method="POST" style="display: none">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="card-body">
                            <div class="list-group">
                                @foreach($card->tasks as $task)
                                    <a href="{{ route('tasks.show', ['task' => $task->id]) }}" class="list-group-item list-group-item-action">
                                        <span class="col-sm-8 col-7">{{ $task->title }}</span>
                                        <span class="col-sm-2 col-3">@include('tasks.components.priority-label')</span>
                                    </a>
                                @endforeach
                            </div>
                            <a href="{{ route('tasks.create', ['board' => $board->id, 'card' => $card->id]) }}" class="btn btn-secondary btn-block mt-3" style="background-color: #28a745">@lang('tasks.createTask')</a>
                        </div>

                    </div>
                </div>
            @endforeach

            <div class="col-md-3 m-b"> <!-- Adjust the number of columns based on your preference -->
                <a href="{{ route('cards.create', ['board' => $board->id]) }}" style="text-decoration: none;">
                    <div class="card" style="border: 1px dashed #007bff; border-radius: 5px; text-align: center; padding: 30px;">
                        <h5 style="color: #007bff;"><i class="fas fa-plus-circle"></i> @lang('cards.createCard')</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
