@if (count($users) > 0)
    <ul class="media-list">
    @foreach ($users as $user)
        <li class="media">
            <div class="media-left">
            </div>
            <div class="media-body">
                <div>
                    <h3>{{ $user->name }}</h3>
                </div>
                <div>
                    <p>{!! link_to_route('users.show', 'プロフィールを見る', ['id' => $user->id], ['class' => 'btn btn-default']) !!}</p>
                </div>
            </div>
        </li>
    @endforeach
    </ul>
    {!! $users->render() !!}
@endif