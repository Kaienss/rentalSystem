<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>house rental</title>
    <link href="{{ asset('/css/mystyle.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">
</head>
    <script src="http://maps.googleapis.com/maps/api/js">
	</script>

	<script>
    function initialize() {
		var mapProp = {
    center: new google.maps.LatLng(51.508742,-0.120850),
    zoom:9,
    mapTypeId: google.maps.MapTypeId.ROADMAP
                       };
	var map = new google.maps.Map(document.getElementById(  "googleMap"),mapProp);				   
	}
	google.maps.event.addDomListener(window, 'load', initialize);
    </script>

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
        <a href="{{URL('home/pages/login')}}"><button class="logregistbutton">Login</button></a>
        <a href="{{URL('home/pages/createAccount')}}"><button class="logregistbutton">Register</button></a>
        </div>
  
     
    
    
<div id="search">

</div>
    <div id="content">
    	<div id="information1">
            <br>
       	  <p id="information_title">{{$page->title}}</p>
            <h6>Date:(11/12/2015)</h6>
            <br>
          <hr>
        </div>
        
      <div id="information2">
        	<table>
            	<tr>
                	<td width="100"><h5>Details :</h5></td>
                    
                </tr>
                <tr>
                	<td></td>
                    
                </tr>
                <tr>
                	<td>Price : </td>
                    <td width="123">({{$page->price}}) $/M</td>
                    <td width="1">&nbsp;</td>
                    <td width="23"></td>
                    <td width="95">Room :</td>
                    <td width="138">({{$page->numRoom}}Room/{{$page->numBathroom}}Bathroom)</td>
                </tr>
                <tr>
                	<td>Rental Type :</td>
                    <td>({{$page->rentalType}})</td>
                    <td></td>
                    <td></td>
                    <td>Living Date:</td>
                    <td>({{$page->moveInDate}})</td>
                </tr>
                <tr>
                	<td>Location :</td>
                    <td>({{$page->location}})</td>
                    <td></td>
                    <td></td>
                    <td>Address:</td>
                    <td>({{$page->address}})</td>
                </tr>
            </table>
            <hr>
        </div>
        <div id="information3">
        	<table width="475">
                <tr>
                	<td width="135"><h5>Contact :</h5></td>
                </tr>
                <tr>
                	<td>Name :</td>
                    <td width="62"></td>
                    <td width="29"></td>
                    <td width="229">({{$page->contactName}})</td>
                </tr>
                <tr>
                	<td>Phone :</td>
                    <td></td>
                    <td></td>
                    <td>({{$page->contactNumber}})</td>
                </tr>
                <tr>
                	<td>Email :</td>
                    <td></td>
                    <td></td>
                    <td>({{$page->contactEmail}})</td>
                </tr>

            </table>
            <hr>
            
      </div>
        <div id="information4">
        	<table height="100">
                <tr>
                <td>Description :</td>
                </tr>
                <tr>
                	<td colspan="5"><div style="width:85%;height:200px;border: dotted">{{$page->description}}</div></td>
                </tr>
                <tr>
                    <td><img src="{{URL(asset('/uploads/'.$page->image))}}" width="400px" height="400px"></td>

                </tr>
                 <tr>
                	<td colspan="5">
                        <div id="map" style="width:85%;height:400px;">
                    <?php
                            echo $page->mapLink;
                            ?>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    	
</div>

        <div id="nav4">
            <ul>
                <li><img src="{{asset('css/1.jpg')}}" ></li>
                <li><img src="{{asset('css/2.jpg')}}" ></li>
                <li><img src="{{asset('css/3.jpg')}}" ></li>
                <li><img src="{{asset('css/4.jpg')}}" ></li>
            </ul>
<div id="footer">
     <nav id="nav3">

  </nav>
</div>
</div>
</body>
</html>
