
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>house rental</title>
    <link href="{{ asset('/css/mystyle.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">
</head>

<body>

<div id="header">
    <div id="logoff">

    </div>
    <div id="logo">
        <h1>Welcome</h1>
        <span><b>Design by XU,YANG,YE,ZHAO</b></span>
    </div>
    <nav id="nav">

        <a href="{{URL('home')}}">Homepage</a>

    </nav>
</div>
<div id="section">
    <a href="{{URL('home/pages/login')}}"><button class="logregistbutton">Login</button></a>
    <a href="{{URL('home/pages/createAccount')}}"><button class="logregistbutton">Register</button></a>
    </form>
</div>




<div id="search">
    <nav id="nav1">
        <form method="post" action="{{URl('home/search')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label>Location:</label><br>
            <select class="select" name="location">
                <option value="Toronto">Toronto</option>
                <option value="Markham">Markham</option>
                <option value="Richmond">Richmond hill</option>
                <option value="MIssisaga">MIssisaga</option>
                <option value="North york">North york</option>
                <option value="Scarborough">Scarborough</option>
            </select>
            <br>
            <label>Type:</label><br>
            <select class="select" name="type">
                <option value="House">House</option>
                <option value="Apartment">Apartment</option>
                <option value="Condo">Condo</option>
            </select>
            <br>
            <label>Room:</label><br>
            <select class="select" name="numRoom">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>

            </select><br>
            <label>Bathroom:</label><br>
            <select class="select" name="numBath">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select><br>
            <label>Rental Type:</label><br>
            <select class="select" name="rentalType">
                <option value="The whole building">The whole building</option>
                <option value="Just room">Just room</option>
            </select><br><br>


            <hr>
            <button type="submit"  class="btn btn-success">Search</button>
        </form>
    </nav></div>
<div id="content">

<?php
    use Illuminate\Support\Facades\DB;
        $location = Input::get('location');
        $numBath = Input::get('numBath');
        $rentalType = Input::get('rentalType');
        $type = Input::get('type');
        $numRoom = Input::get('numRoom');
        $pages = DB::table('pages')->orderBy('updated_at','desc')->where('location',$location)->where('numBathroom','=',$numBath)->where('rentalType',$rentalType)->where('type',$type)->where('numRoom','=',$numRoom)->paginate(6);
        $pages->setpath(URl('home/search'));
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
                <br><p style="font-size: 10px; color: #0000FF;">Posted at: {{$page->updated_at}}</p>
            </div>

        </div>
    @endforeach
    {!! $pages->render() !!}
</div>
<div id="nav4">
    <ul>
        <li><img src="{{asset('css/1.jpg')}}" ></li>
        <li><img src="{{asset('css/2.jpg')}}" ></li>
        <li><img src="{{asset('css/3.jpg')}}" ></li>
        <li><img src="{{asset('css/4.jpg')}}" ></li>
    </ul>

</div>
<div id="footer">
    <nav id="nav3">

    </nav>
</div>
</body>
</html>
