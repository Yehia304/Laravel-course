



{{--    <form method="post" action="/posts">--}}

{!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\PostsController@store']) !!}

<div class="form-group">

    {!! Form::label('title','Title') !!}
    {!! Form::text('title',null,['class' => 'form-control']) !!}

    {!! Form::label('content','Content') !!}
    {!! Form::text('content',null,['class' => 'form-control']) !!}

</div>



{!! Form::submit('Create Post',['class'=>'btn btn-info']) !!}
{!! Form::close() !!}

@if(count($errors) > 0)



        <div class="alert alert-danger">
            <ul>

                @foreach($errors->all() as $error)

                    <li>{{$error}}</li>
                @endforeach



            </ul>


        </div>




@endif




