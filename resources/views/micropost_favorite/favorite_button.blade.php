@if (Auth::id() != $micropost->id)
    @if (Auth::user()->is_favorite($micropost->id))
        {{-- お気に入り解除ボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-success"]) !!}
        {!! Form::close() !!}
    @else
        {{-- お気に入り登録ボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-outline-success"]) !!}
        {!! Form::close() !!}
    @endif
@endif