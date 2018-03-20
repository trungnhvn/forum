@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>
                {{ $profileUser->name }}
                <small>Since {{ $profileUser->created_at->diffForHumans() }}</small>
            </h1>
        </div>

        <div class="row justify-content-center">
            <div class="col-12">
                @foreach ($threads as $thread)
                    <div class="card my-3">
                        <div class="card-header">
                            <div class="row">
                                <span class="col">
                                    <a href="#">{{ $thread->creator->name }}</a>
                                    posted: {{ $thread->title }}
                                </span>
                                <span class="col-auto">
                                    {{ $thread->created_at->diffForHumans() }}
                                </span>
                            </div>
                        </div>

                        <div class="card-body">
                            {{ $thread->body }}
                        </div>
                    </div>
                @endforeach

                {{ $threads->links() }}
            </div>
        </div>
    </div>
@endsection