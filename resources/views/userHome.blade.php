<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>house rental</title>
    <link href="{{ asset('/css/mystyle.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
<div id="all">
    <div id="header">
        <div id="logoff">


        </div>
        <div id="logo">
            <h1>Welcome, {{$account->userName}}</h1>
            <span><b>Design by XU,YANG,YE,ZHAO</b></span>
        </div>
        <nav id="nav">

            <a href="{{URL('home')}}">Homepage</a>

        </nav>

    </div>

    <div id="section">

    </div>




    <div id="search">
        <nav id="nav1">
            <form method="get">

                <br><br>
                <label>User Name:</label>

                <h4>{{$account->userName}}</h4><br>
                <label>Name:</label>
                <h4>{{$account->firstName}} {{$account->lastName}}</h4><br>

                <label>Contact:</label>
                <h4>{{$account->contact}}</h4><br>
                <br>
                <label>Email:</label>
                <h4>{{$account->email}}</h4><br><br>



                <br><br>
                <a href="{{ URL('home/pages/createPage/'.$account->id) }}" class="btn btn-lg btn-primary">Create</a>
                <hr>


            </form>
        </nav>
    </div>
    <div id="content">
        <?php
            use Illuminate\Support\Facades\DB;
            $pages = DB::table('pages')->orderBy('updated_at','desc')->where('authorId',$account->id)->paginate(6);
            $pages->setpath(URL('userHome/'.$account->id));

        ?>
            @foreach ($pages as $page)
                <div class="chart">
                    <div id="picture">
                        <img src="{{URL(asset('/uploads/'.$page->image))}}" width="100%" height="100%" alt="image" >
                    </div>
                    <div id="detail">
                        <br><br>
                        <div id="detail2">
                            <a href="{{URl('home/pages/'.$page->id.'/view')}}" style=" color: #0000FF;">{{$page->title}}</a><br><br>
                            {{$page->address}}
                        </div>
                    </div>
                    <div id="price">
                        <br><br>
                        ${{$page->price}}/month<br><br>
                        {{$page->numRoom}} Rooms/ {{$page->numBathroom}} Bathrooms/ {{$page->rentalType}}

                        <br>
                        <br>
                        <a href="{{URl('home/pages/'.$page->id.'/edit')}}" class="btn btn-success">Edit</a>
                        <form method="POST" action="{{ URL('home/pages/'.$page->id.'/delete') }}" style="display: inline;">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>


                </div>
            @endforeach
            {!! $pages->render() !!}
    </div>


        <div id="nav4">

    </div>
    <div id="footer">
        <nav id="nav3">

        </nav>
    </div>
</div>
</body>
</html>
