<div>
    {{-- The Master doesn't talk, he acts. --}}

    <ul class="list-group w-75 mx-auto mt-3 container-fluid">
        @foreach ($users as $user)
            
        <li class="list-group-item list-group-item-action">{{$user->name}}</li>
        @endforeach
    </ul>
</div>
