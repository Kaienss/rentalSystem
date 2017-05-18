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
        <nav id="nav">

            <a href="{{URL('home')}}">Homepage</a>

        </nav>
    </nav>

</div>

<div id="section">

</div>




<div id="search">

</div>
<div id="content">
    <form method="POST" action="{{URL('home/pages/'.$page->id.'/edit')}}">
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

        <div id="create1">
            <h2>
                {{$page->title}}
            </h2>
            <table width="505">
                <tr>
                    <td width="279"><h5>Basic Information :</h5></td>
                    <td width="214"></td>

                </tr>
                <br>
                <tr>
                    <td>Zip code : </td>
                    <td><input name="postCode" type="text" class="txt" value="{{$page->postCode}}"></td>

                </tr>
                <tr>
                    <td>Location : </td>
                    <td><select class="select" name="location" value="{{$page->location}}">
                            <option value="Toronto">Toronto</option>
                            <option value="Markham">Markham</option>
                            <option value="Richmond hill">Richmond hill</option>
                            <option value="MIssisaga">MIssisaga</option>
                            <option value="North york">North york</option>
                            <option value="Scarborough">Scarborough</option>
                        </select>
                    </td>

                </tr>
                <tr>
                    <td>Address : </td>
                    <td><input name="address" type="text" class="txt" name="address" value="{{$page->address}}"></td>
                </tr>
                <tr>
                    <td>Google map Link:</td>
                    <td><input name="mapLink" type="text" class="txt" value="{{$page->mapLink}}"></td>
                </tr>

            </table>
            <hr>
        </div>
        <div id="create2">
            <table width="529" height="353">
                <tr>
                    <td><h5>Details : </h5></td>
                </tr>
                <tr>
                    <td>Type : </td>
                    <td><select class="select" name="type" value="{{$page->type}}">
                            <option value="House">House</option>
                            <option value="Apartment">Apartment</option>
                            <option value="Condo">Condo</option>
                        </select>
                    </td>

                </tr>
                <tr>
                    <td>Room : </td>
                    <td><select class="select" name="numRoom" value="{{$page->numRoom}}">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>

                        </select>
                    </td>

                </tr>
                <tr>
                    <td>Bathroom : </td>
                    <td><select class="select" name="numBathroom" value="{{$page->numBathroom}}">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>

                </tr>
                <tr>
                    <td>Rental Type : </td>
                    <td><select class="select" name="rentalType" value="{{$page->rentalType}}">
                            <option value="The whole building">The whole building</option>
                            <option value="Just room">Just room</option>
                        </select>
                    </td>

                </tr>
                <tr>
                    <td>Price : </td>
                    <td><input name="price" type="text" class="txt" value="{{$page->price}}"></td>

                </tr>
                <tr>
                    <td>Date to live in : </td>
                    <td><input name="moveInDate" type="date" class="txt" value="{{$page->moveInDate}}">                   </td>

                </tr>
                <tr>
                    <td>Description : </td>
                    <td><textarea rows="8%" cols="50%" name="description" value="{{$page->description}}">

                        </textarea></td>
                </tr>
            </table>
            <hr>
        </div>
        <div id="create3">
            <table width="539">
                <tr>
                    <td width="281"><h5>Contact : </h5></td>
                <tr>
                <tr>
                    <td>Name : </td>
                    <td width="246"><input name="contactName" type="text" class="txt" value="{{$page->contactName}}"></td>
                </tr>
                <tr>
                    <td>Phonenumber : </td>
                    <td><input name="contactNumber" type="text" class="txt" value="{{$page->contactNumber}}"></td>
                </tr>
                <tr>
                    <td>Email : </td>
                    <td><input name="contactEmail" type="text" class="txt" value="{{$page->contactEmail}}"></td>
                </tr>
            </table>
            <hr>
        </div>
        <div id="create4">
            <button id="button2">Update</button>

        </div>
    </form>


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
