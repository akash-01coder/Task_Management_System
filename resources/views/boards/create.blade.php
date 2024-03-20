@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <div class="mx-auto float-left m-b">
                    @include('components.back-button')
                </div>

                <div class="clearfix"></div>

                <div class="card">
                    <div class="card-header" style="background-color: #007bff; color: #fff; font-weight: bold;">
                        @lang('boards.titlePanelCreate')
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('boards.store') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name" class="col-md-4 col-form-label">@lang('boards.Name')</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus style="border: 1px solid #ccc; border-radius: 5px; padding: 10px;">

                                    @if ($errors->has('name'))
                                        <span class="form-text" style="color: #f00;">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="team_id" class="col-md-4 col-form-label">@lang('teams.Team')</label>

                                <div class="col-md-6">
                                    <select id="team_id" class="form-control" name="team_id" required style="border: 1px solid #ccc; border-radius: 5px; padding: 10px;">
                                        @foreach($teams as $team)
                                            <option value="{{ $team->id }}">{{ $team->name }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('team_id'))
                                        <span class="form-text" style="color: #f00;">
                                            <strong>{{ $errors->first('team_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" style="background-color: #28a745; border: none; border-radius: 5px; padding: 10px 20px;">
                                        @lang('boards.addBoard')
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
