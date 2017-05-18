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
    <div id="logo">
        <h1>Welcome</h1>
        <span><b>Design by XU,YANG,YE,ZHAO</b></span>
    </div>
    <nav id="nav">

        <a href="{{URL('home')}}">Homepage</a>

    </nav>
</div>

<div id="section">

</div>




<div id="search">

</div>
<div id="content">
    <div id="title">
        <br><br>
        <h2>Welcome to join</h2>
        <br><br>

    </div>
    <div id="form1" >
        <form method="POST" action="{{URL('home/pages/createAccount')}}">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label>* Firstname : </label><br>
        <input type="text" name="firstName" class="txt"><br><br>
        <label>* Lastname : </label><br>
        <input type="text" name="lastName" class="txt"><br><br>
        <label>* Username : </label><br>
        <input type="text" name="userName" class="txt"><br><br>
        <label>* Password : </label><br>
        <input type="password" name="password" class="txt"><br><br>
        <label>* Contact : </label><br>
        <input type="text" name="contact" class="txt"><br><br>
        <label>  Email : </label><br>
        <input type="text" name="email" class="txt"><br><br>
        <label>* City : </label><br>
        <input type="text" name="city" class="txt"><br><br>
        <label>* Zip Code: </label><br>
        <input type="text" name="postCode" class="txt"><br>
        <hr>
        <div id="button1">
            <button class="button1">Submit</button>
        </div>

        </form>
    </div>


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
