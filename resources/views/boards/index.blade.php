@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 m-b">

                @if(!empty($teams))
                    <div class="mx-auto float-right m-b">
                        <a href="{{ route('boards.create') }}">
                            <button class="btn btn-primary">@lang('boards.createBoard') </button>
                        </a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="mb-2 offset-sm-1">
                        @foreach($teams as $team)

                            <div class="mx-auto float-left m-b col-sm-12">
                                <h3 style="color: #333; border-bottom: 2px solid #007bff; padding-bottom: 5px;">{{ $team->name }}</h3>
                            </div>

                            @foreach($team->boards as $board)

                                <a href="{{ route('boards.show', ['board' => $board->id]) }}" class="hover text-center">
                                    <div class="card col-sm-5 mb-2 ml-0" style="border: 1px solid #ccc; border-radius: 5px; background-color: #f9f9f9;">
                                        <div class="card-body">
                                            <p style="color: #333; font-weight: bold;">{{ $board->name }}</p>
                                        </div>
                                    </div>
                                </a>

                            @endforeach

                            <hr class="col-sm-12 m-2" style="border-color: #ccc;">
                            <div class="clearfix"></div>

                        @endforeach
                    </div>

                @else

                    <h1 class="text-center m-b" style="color: #333;">@lang('boards.noneBoards')</h1>

                    <div class="col-md-12 text-center">
                        <a href="{{ route('boards.create') }}">
                            <button class="btn btn-primary">@lang('boards.createFirstBoard')</button>
                        </a>
                    </div>

                @endif
            </div>
        </div>
    </div>
@endsection
