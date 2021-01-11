
<form method="post" action="/posts/{{$post->id}}">

    {{csrf_field()}}

    <input type="hidden" name="_method" value="PUT">

    <input type="text" name="Title" value="{{$post->title}}">

    <input type="submit" name="Go">



</form>

<form method="post" action="/posts/{{$post->id}}">

    {{csrf_field()}}

    <input type="hidden" name="_method" value="DELETE">

    <input type="submit" value="DELETE">

</form>