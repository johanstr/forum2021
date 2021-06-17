@extends('layouts.main')

@section('content')
    <div class="col s12">
        <div class="card">
            <div class="card-content">
                <!-- BEGIN VAN EEN THREAD -->
                <span class="card-title">Threads</span>
                <div class="collection">
                    @foreach($threads as $thread)
                    <a href="{{ route('thread.index', [ 'thread' => $thread->id ] ) }}" class="collection-item avatar collection-link">
                        <img src="img/icon-java.png" alt="" class="circle">
                        <div class="row">
                            <div class="col s9">
                                <div class="row last-row">
                                    <div class="col s12">
                                        <span class="title">
                                            {{ $thread->title }}
                                        </span>
                                        <p>{{ $thread->description }}</p>
                                    </div>
                                </div>
                                <div class="row last-row">
                                    <div class="col s12 post-timestamp">
                                        Moderator: {{ $thread->user->name }}
                                    </div>
                                </div>
                            </div>
                            <div class="col s3">
                                <h6 class="title center-align">Statistieken</h6>
                                <p class="center-align">{{ $thread->count_topics() }} topic(s)</p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
                <!-- EINDE VAN EEN THREAD -->
            </div>
        </div>
    </div>
@endsection
