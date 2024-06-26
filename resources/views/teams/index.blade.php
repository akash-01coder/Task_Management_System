@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 m-b">

                <div class="clearfix"></div>
                @if(!empty($teams))

                    <div class="mx-auto float-right m-b">
                        <a href="{{ route('teams.create') }}">
                            <button class="btn btn-primary">@lang('teams.createTeam') </button>
                        </a>

                        <a href="{{ route('teams.addUser') }}">
                            <button class="btn btn-primary">@lang('teams.addUser') </button>
                        </a>
                    </div>

                    <div class="clearfix"></div>

                    @foreach($teams as $team)

                        <div class="mx-auto float-left m-b col-sm-12">
                            <h3 style="color: #333; font-weight: bold;">{{ $team->name }}</h3>
                        </div>

                        <div class="clearfix"></div>

                        <div class="mb-2 offset-sm-1">
                            @foreach($team->users as $user)
                                <a href="{{--{{ route('teams.show', ['teams' => $team->id]) }}--}}" class="hover">
                                    <div class="card col-sm-5 m-l-22" style="border: 1px solid #ccc; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                        <div class="card-body" style="color: #333;">
                                            {{ $user->name }}
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>

                        <hr class="col-sm-12" style="border: 1px solid #ccc;">

                    @endforeach

                @else

                    <h1 class="text-center m-b">@lang('teams.noneTeams')</h1>

                    <div class="col-md-12 text-center">
                        <a href="{{ route('teams.create') }}">
                            <button class="btn btn-primary">@lang('teams.createFirstTeam')</button>
                        </a>
                    </div>

                @endif
            </div>
        </div>
    </div>
@endsection
