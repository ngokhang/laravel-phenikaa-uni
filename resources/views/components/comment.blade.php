<div style="padding-left: 50px">
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    @foreach ($commentData as $data)
        <div>
            <span>User: </span>
            <a href="#">{{$data->user->name}}</a>
            --------- <span>{{$data->updated_at}}</span>
        </div>        
        <div>
            <p>
                {{$data->content}}
            </p>
        </div>
        <hr>
    @endforeach
</div>