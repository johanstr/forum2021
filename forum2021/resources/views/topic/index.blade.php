@extends('layouts.main')

@section('content')
    <div class="col s12">
        <div class="card">
            <div class="card-content clearfix">
                    <span class="card-title">
                        {{ $topic->title }}
                        <span class="status-badge status-open">
                            Open
                        </span>
                    </span>
            </div>
        </div>

        <!-- BEGIN TOPIC -->
        <div class="card cyan lighten-5">
            <div class="card-content">
                <div class="collection">
                    <div class="collection-item row">
                        <div class="col s3">
                            <div class="avatar collection-link">
                                <div class="row">
                                    <div class="col s3">
                                        <img src="http://www.gravatar.com/avatar/fc7d81525f7040b7e34b073f0218084d?s=50" alt="" class="square">
                                    </div>
                                    <div class="col s9">
                                        <p class="user-name">{{ $topic->user->name }}</p>
                                    </div>
                                </div>
                                <p class="post-timestamp">
                                    Gepost op {{ $topic->created_at }}
                                </p>
                            </div>
                        </div>
                        <div class="col s9">
                            <div class="row last-row">
                                <div class="col s12">
                                    <h6 class="title">{{ $topic->title }}</h6>
                                    <p>
                                        {{ $topic->body }}
                                    </p>
                                </div>
                            </div>
                            <div class="row last-row block-timestamp">
                                <div class="col s6 push-s6">
                                    <p class="post-timestamp last-post-timestamp">Laatst aangepast op: {{ $topic->updated_at }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- EINDE TOPIC -->

        @foreach($topic->replies as $reply)
        <!-- BEGIN REPLY -->
        <div class="card">
            <div class="card-content">
                <span class="card-title">Replies</span>
                <div class="collection">
                    <div class="collection-item row">
                        <div class="col s2">
                            <span class="reply-username">{{ $reply->user->name }}</span>
                            <span class="reply-timestamp">Geplaatst op {{ $reply->created_at }}</span>
                        </div>
                        <div class="col s10">
                            <p>{{ $reply->body }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- EINDE REPLY -->
        @endforeach

        @auth
        <!-- TOEVOEGEN VAN EEN REPLY -->
        <div class="card">
            <div class="card-content">
                <form method="POST" action="">
                    <div class="row">
                        <div class="col s12">
                            <textarea id="message-body" name="body"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6 push-s6">
                            <a href="" class="btn right cyan darken-1">
                                Bewaren
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- EINDE TOEVOEGEN VAN EEN REPLY -->
        @endauth
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script src="{{ asset('js/editor.js') }}"></script>
@endsection
