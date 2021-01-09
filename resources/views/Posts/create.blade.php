



    <form method="post" action="/posts">

        <input type="text" name="title" placeholder="Enter the title">
        {{@csrf_field()}}
        <input type="text" name="content" placeholder="Enter the content">
        <input type="submit" name="submit">


    </form>


