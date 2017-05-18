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
     <nav id="nav1">

     </nav>
</div>
    <div id="content">
		<br>
	     <h2>Log in</h2>
      	<fieldset id="loginfieldset">			
			<legend><label>Log in</label></legend>
			<form id="loginform" method="POST" action="{{URL('home/pages/login')}}">
			<br><br>
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
				<label>Username : </label>
				<input name="loginName" type="text" class="txt"><br><br><br>
				<label>Password : </label>
				<input name="password" type="password" class="txt"><br><br><br>
				<input name="logbutton" type="submit" value="Login" class="logbutton"><br><br>
                <a href="{{URL('home/pages/createAccount')}}">No account?, Register here!</a>
			</form>
        	
        </fieldset>
    	
    	
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
