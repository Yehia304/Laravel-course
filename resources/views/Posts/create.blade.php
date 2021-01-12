



{{--    <form method="post" action="/posts">--}}

{!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\PostsController@store']) !!}

<div class="form-group">

    {!! Form::label('title','Title') !!}
    {!! Form::text('title',null,['class' => 'form-control']) !!}

    {!! Form::label('content','Content') !!}
    {!! Form::text('content',null,['class' => 'form-control']) !!}

</div>



        <input type="submit" name="submit">


    </form>


