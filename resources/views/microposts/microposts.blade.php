<ul class="list-unstyled">
    @foreach($microposts as $micropost)
    <li class="media mb-3">
        <img class="mr-2 rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">

        <div class="media-body">
            <div>
                {!!link_to_route('users.show',$micropost->user->name,['id'=>$micropost->user->id])!!}<span class="text-muted">posted_at: {{$micropost->created_at}}</span>
            </div>
            <div>
                <p class="mb-0">{{nl2br(e($micropost->content))}}</p>
            </div>
        </div>
    </li>
    @endforeach
</ul>
{{$microposts -> render('pagination::bootstrap4')}} 