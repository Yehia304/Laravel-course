<h1>EDIT POST MAN</h1>


{!! Form::model($post, ['method'=>'PATCH', 'action'=>['App\Http\Controllers\PostsController@update',$post->id]]) !!}

    {{csrf_field()}}


{!! Form::label('title','title') !!}
{!! Form::text('title',null,['class'=>'form-control']) !!}

    <input type="submit" name="Go">





<form method="post" action="/posts/{{$post->id}}">

    {{csrf_field()}}

    <input type="hidden" name="_method" value="DELETE">

    <input type="submit" value="DELETE">

</form>