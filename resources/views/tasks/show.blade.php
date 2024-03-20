@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <div class="mx-auto float-left m-b">
                    @include('components.back-button')
                </div>

                <div class="mx-auto float-right m-b">
                    <a href="#" onclick="document.getElementById('task-delete-form').submit()" style="margin-left: 10px;">
                        <button class="btn btn-danger">
                            @lang('tasks.deleteTask') <i class="fas fa-trash"></i>
                        </button>
                    </a>

                    <a href="{{ route('tasks.edit', ['task' => $task->id]) }}">
                        <button class="btn btn-primary">
                            @lang('tasks.editTask') <i class="fas fa-pencil-alt"></i>
                        </button>
                    </a>
                </div>

                <form id="task-delete-form" action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                </form>

                <div class="clearfix"></div>

                <div class="card">
                    <div class="card-header" style="background-color: #f8f9fa; border-bottom: 1px solid #ccc;">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>@lang('tasks.titlePanelShow')</span>
                            <span>@include('tasks.components.card-label')</span>
                        </div>
                    </div>

                    <div class="card-body">
                        <h3 class="text-center" style="color: #333;">{{ $task->title }}</h3>

                        <h4 style="color: #555;">@lang('tasks.Description'):</h4>
                        <p>{{ $task->description }}</p>

                        <hr>

                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: #f8f9fa;">
                                @lang('tasks.Card'):
                                <span>@include('tasks.components.card-label')</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: #f8f9fa;">
                                @lang('tasks.Priority'):
                                <span>@include('tasks.components.priority-label')</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: #f8f9fa;">
                                @lang('tasks.Created'):
                                <span class="badge badge-light">{{ $task->created_at->toDateString() }}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: #f8f9fa;">
                                @lang('tasks.Updated'):
                                <span class="badge badge-light">{{ $task->updated_at->toDateString() }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
