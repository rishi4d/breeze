<!DOCTYPE html>
<html lang="en">
	<!-- Breeze(Windy) 1.0.1 Beta ||| Last Updated on 13/04/2022-->
<head>
	<title>Breeze</title>

    <!-- Bootstrap CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!--Google Font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Roboto:700|Poppins|Poppins:300|Raleway:300|Comfortaa|Satisfy|Quicksand|Poiret One|Raleway:500">

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/df1fe34d47.js" crossorigin="anonymous"></script>

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<!-- Background Image -->
	<div class="bg">
        <div class="blur"></div>
    </div>
    <div class="header">
        <h1>Breeze</h1>
	</div>

    <div class="container-fluid">
        <div class="searchBar container-fluid">
            <form id="search_form" autocomplete="off">
                <div class="autocomplete">
                    <input id="inputloc" type="text" placeholder="Search location..." name="location">
                    <button id="currentloc" type="button" onclick="getGPSLocation()"><a><i class="fas fa-location-arrow"></i></a></button>
                    <button id="subform" type="button"><a><i class="fas fa-search"></i></a></button>
                </div>
            </form>
        </div>

        <!-- Weather Widget -->
        <div class="mainWidget">
            <div class="mainContainer container-fluid">
                <div class="row" style="margin: auto;">
                    <div class="mainDescription col-6">
                        <img src="res/cloud.svg" class="icon mx-auto">
                        <h5 id="state" class="weather-status mx-auto">Partly Cloudy</h5>
                    </div>
                    <div class="mainInfo col-4">
                        <h5 id="city" class="city">Kolkata</h5>
                        <h5 id="temp" class="degree">25&#176;c</h5>
                    </div>
                </div>
                <div class="row extendedInfo" style="margin: auto">
                    <div class="col-4">Wind Speed <span id="wind_speed">22 kmph</span></div>
                    <div class="col-4">Cloud Cover <span id="cloud_cover">22%</span></div>
                    <div class="col-4">Pressure <span id="pressure">1010 mb</span></div>
                </div>
            </div>
        </div>
            <!-- End of weather widget -->


        <div class="cards container-fluid">
            <div class="container2">
                <!-- Weather Widget -->
                <div class="widget2">
                    <div class="mid">
                        <h6 id="day_1">Wednesday</h6>
                        <div id="maxtemp_1">13&#176;c</div>
                        <div id="mintemp_1">13&#176;c</div>
                        <div id="state_1" >Clear</div>
                    </div>
                </div>
            </div>
            <div class="container3">
                <!-- Weather Widget -->
                <div class="widget3">
                    <div class="mid1">
                        <h6 id="day_2">Thursday</h6>
                        <div id="maxtemp_2">11&#176;c</div>
                        <div id="mintemp_2">11&#176;c</div>
                        <div id="state_2">Clear</div>
                    </div>
                </div>
            </div>
            <div class="container4">
                <!-- Weather Widget -->
                <div class="widget4">
                    <div class="mid2">
                        <h6 id="day_3">Friday</h6>
                        <div id="maxtemp_3">15&#176;c</div>
                        <div id="mintemp_3">15&#176;c</div>
                        <div id="state_3">Cloudy</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <h2>Breeze</h2>
        </div>
    </div>
	
	<script src="app.js"></script>

</body>
</html>