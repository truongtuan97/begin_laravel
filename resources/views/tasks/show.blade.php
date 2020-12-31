@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">Task Page</div>
                <div class="card-body">
                    {{ $task->title }} - {{ $task->body }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection