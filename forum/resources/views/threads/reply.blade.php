<reply :attributes="{{ $reply }}" inline-template v-cloak>

    <div id="reply-{{ $reply->id}}" class="card">
        <div class="card-header">
            <div class="level">
                <h5 class="flex">
                    <a href="/profiles/{{$reply->owner->name}}">
                        {{$reply->owner->name}}
                    </a> said {{$reply->created_at->diffForHumans()}}...
                </h5>

                @if (Auth::check())
                    <div>
                        <favorite :reply="{{ $reply }}"></favorite>
                    </div>
                @endif
            </div>
        </div>

        <div class="alert alert-success" role="alert">
            <div v-if="editing">
                <div class="form-group">
                    <textarea class="form-control" v-model="body"></textarea>
                </div>
                
                <button class="btn btn-s btn-primary" @click="update">Update</button>
                <button class="btn btn-s btn-link" @click="editing = false">Cancel</button>

            </div>

            <div v-else v-text="body"></div>
        </div>

        @can ('update', $reply)
            <div class="panel-footer level">
                <button class="btn btn-s mr-1" @click="editing = true">Edit</button>
                <button class="btn btn-s btn-danger mr-1" @click="destroy">Delete</button>



            </div>
        @endcan
    </div>
</reply>