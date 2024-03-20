@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <div class="mx-auto float-left m-b">
                    @include('components.back-button')
                </div>

                <div class="clearfix"></div>

                <div class="card" style="border: 1px solid #ccc; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">

                    <div class="card-header" style="background-color: #007bff; color: #fff; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                        <h4 style="margin-bottom: 0;">@lang('cards.titlePanelCreate')</h4>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('cards.store', ['board' => $board->id]) }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name" class="col-md-4 col-form-label">@lang('cards.Name')</label>

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
                                <label for="status" class="col-md-4 col-form-label">@lang('cards.Status')</label>

                                <div class="col-md-6">
                                    <input id="status" type="number" min="0" class="form-control" name="status" value="{{ old('status') }}" required style="border: 1px solid #ccc; border-radius: 5px; padding: 10px;">

                                    @if ($errors->has('status'))
                                        <span class="form-text" style="color: #f00;">
                                            <strong>{{ $errors->first('status') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" style="background-color: #28a745; border: none; border-radius: 5px; padding: 10px 20px;">
                                        @lang('cards.addCard')
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
