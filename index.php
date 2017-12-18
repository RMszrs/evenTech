<?php 
session_start();
if(!isset($_SESSION['loggedIn'])) {
    header('Location: ./login.php');
   exit();
}
?>

<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>eventTech</title>

    <link rel="stylesheet" href="vendor/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/jquery-ui-1.12.1.custom/jquery-ui.css">
    <link rel="stylesheet" href="styles/styles.css">

</head>

<body>
    <nav>
        <div class="nav top-nav show">
            <div class="logo-main">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 952 179.22">
                    <title>evenTech</title>
                    <text transform="translate(0 134.06)" style="font-size: 157.90469360351562px;fill: #abb7b7;font-family: VarelaRound-Regular, Varela Round">&lt;<tspan x="91.58" y="0" style="letter-spacing: -0.02198591826673039em">/</tspan><tspan x="158.06" y="0" style="fill: #34495e;letter-spacing: -0.004990896214135423em">e</tspan><tspan x="246.65" y="0" style="fill: #34495e;letter-spacing: -0.006988491600957903em">v</tspan><tspan x="329.23" y="0" style="fill: #34495e">e</tspan><tspan x="418.61" y="0" style="fill: #34495e;letter-spacing: -0.06399726644841804em">n</tspan><tspan x="504.66" y="0" style="fill: #3498db;letter-spacing: -0.06399726644841804em">T</tspan><tspan x="590.72" y="0" style="fill: #3498db;letter-spacing: 0.0000061845058415556665em">ech</tspan><tspan x="860.42" y="0" style="letter-spacing: -0.0000061845058415556665em">&gt;</tspan></text>
                  </svg>
            </div>
            <div class="search-main">
                <form>
                    <button type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                    <input type="search" placeholder="Search here ..." required>
                </form>
            </div>
            <div class="avatar">
            <a href="APIs/logout.api.php">Logout</a>
            </div>
            <button class="button btn-hamburger">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
        </div>

        <hr class="divider">

        <div class="nav bottom-nav">
            <div class="menu-main">
                <ul>
                    <li>
                        <button class="button btn-nav-main selected" id="btnDashboard" data-showThisPage="pageDashboard">
                            <i class="fa fa-dashboard" aria-hidden="true"></i>Dashboard
                        </button>
                    </li>

                    <li>
                        <button class="button btn-nav-main" id="btnEvents" data-showThisPage="pageEvents">
                            <i class="fa fa-calendar-check-o" aria-hidden="true"></i>Events
                        </button>
                    </li>
                    <li>
                        <button class="button btn-nav-main" id="btnPartners" data-showThisPage="pagePartners">
                            <i class="fa fa-users" aria-hidden="true"></i>Partners
                        </button>
                    </li>
                    <li>
                        <button class="button btn-nav-main" id="btnCalendar" data-showThisPage="pageCalendar">
                            <i class="fa fa-calendar" aria-hidden="true"></i>Calendar
                        </button>
                    </li>
                    <li>
                        <button class="button btn-nav-main" id="btnSettings" data-showThisPage="pageSettings">
                            <i class="fa fa-cog" aria-hidden="true"></i>Settings
                        </button>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-main">
        <div class="page" id="pageDashboard">
            <div class="page-actionbar">
                <h3 class="page-title">Dashboard</h3>

                <div class="btn-group">
                    <button class="button btn-page-secondary">
                        <i class="fa fa-share" aria-hidden="true"></i>Export
                    </button>

                    <button class="button btn-page-secondary">
                        <i class="fa fa-print" aria-hidden="true"></i>Print
                    </button>
                </div>
            </div>

            <div class="page-topbar">
                <div class="filter-group">
                    <div class="filter-inputs">
                        <form>
                            <h5>Category:</h5>
                            <select name="">
                                <option value="value1">All</option>
                                <option value="value2">Web development</option>
                                <option value="value3">Databases</option>
                                <option value="value4">Interface design</option>
                            </select>
                        </form>

                        <form>
                            <h5>Date range:</h5>
                            <div class="form-inline">
                                <input id="txtFilterDate" type="date" name="txtFilterDate">
                                <input id="txtFilterDate" type="date" name="txtFilterDate">
                            </div>
                        </form>

                    </div>

                    <div class="btn-group">

                        <button class="button btn-page-tertiary" id="btnCreateEvent" data-showThisPage="">
                            Apply filters
                        </button>
                    </div>

                </div>
            </div>
        
            <div class="chartsContainer">
                   <div class="container">
                   <h3>Event attendance based on main sponsor</h3>
                   <canvas id="attendanceLineChart" ></canvas>
                   </div>

                   <div class="container">
                   <h3>Anual revenue from sponsors</h3>
                   <canvas id="anualRevenueChart" ></canvas>
                   </div>

                   <div class="container">
                   <h3>Revenue of event categories based on main sponsor</h3>
                   <canvas id="revenueBarChart" ></canvas>
                   </div>
                </div>

        </div>

        <div class="page" id="pageEvents">
        <div class="page-actionbar">
        <h3 class="page-title">My events</h3>

        <div class="btn-group">
            <button class="button btn-page-primary" id="btnCreateEvent" data-showThisPage="pageCreateEvent">
                <i class="fa fa-plus" aria-hidden="true"></i>Create new event
            </button>
        </div>

    </div>

    <div class="page-topbar">
        <div class="filter-group">
            <div class="filter-inputs">
                <form>
                    <h5>Category:</h5>
                    <select name="">
                        <option value="value1">All</option>
                        <option value="value2">Web development</option>
                        <option value="value3">Databases</option>
                        <option value="value4">Interface design</option>
                    </select>
                </form>

                <form>
                    <h5>Price range:</h5>
                    <div class="form-inline">
                        <input id="" type="text" name="" placeholder="min.">
                        <input id="" type="text" name="" placeholder="max.">
                    </div>
                </form>

                <form>
                    <h5>Date range:</h5>
                    <div class="form-inline">
                        <input id="txtFilterDate" type="date" name="txtFilterDate">
                        <input id="txtFilterDate" type="date" name="txtFilterDate">
                    </div>
                </form>

                <form>
                    <h5>Keywords:</h5>
                    <div class="form-inline">
                        <input id="txtFilterDate" type="text" name="txtFilterDate" placeholder="input event name, location or company name">
                    </div>
                </form>
            </div>

            <div class="btn-group">

                <button class="button btn-page-tertiary" id="btnCreateEvent" data-showThisPage="">
                    Apply filters
                </button>
            </div>

        </div>
    </div>

            <div class="table-container">
                    <table id="table-events" class="table tablesorter">
                            <thead>
                                <tr>
                                    <th class="column-sort">Name
                                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </th>
                                    <th class="column-sort">Date
                                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </th>
                                    <th class="column-sort">Location
                                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </th>
                                    <th class="column-sort">Signups
                                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </th>
                                    <th class="column-sort">Views
                                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </th>
                                    <th class="column-sort">Price
                                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="eventTable">
                               
                            </tbody>
                        </table>

            </div>
        </div>

        <div class="page" id="pageCreateEvent">
            <h3 class="page-title">Create New Event</h3>
            <div class="card-edit">
                <div class="cd-left">

                    <form id="addEventForm" enctype="multipart/form-data" >
                    <input type="hidden" name="key" value="addNew">
                        Event name:
                        <br>
                        <input id="txtEventName" type="text" name="txtEventName" placeholder="Event name...">
                        <br> Event date:
                        <br>
                        <input id="txtEventDate" type="datetime-local" name="txtEventDate">
                        <br>
                        <br> Event price:
                        <br>
                        <input id="txtEventPrice" type="text" name="txtEventPrice" placeholder="free/price...">
                        <br> Event description:
                        <br>
                        <textarea id="txtEventDesc" type="text" name="txtEventDesc" placeholder="Event description..."></textarea>
                        Event location:
                        <br>
                        <select name="txtEventLocation" id="txtEventLocation">
                             <option value="Valby Hallen">Valby Hallen</option>
                             <option value="Nørrebro">Nørrebro</option>
                             <option value="Vesterbro">Vesterbro</option>
                             <option value="Bella Center">Bella Center</option>
                        </select>
                        <br>
                        <br>
                        Event category:
                        <br>
                        <select name="txtEventCategory" id="txtEventCategory">
                             <option value="Mobile">Mobile</option>
                             <option value="Computers">Computers</option>
                             <option value="Programming">Programming</option>
                             <option value="Web development">Web development</option>
                        </select>
                        <br>
                        <br>
                        Event Image
                        <br>

                        <input type="file" name="eventImage">

                        <input class="button btn-card-primary" id="btnAddEvent" name="submit" type="button" value="Add Event">
                        <div id="lblCreateError"></div>
                    </form>

                </div>
                <!-- <div class="cd-right">
                    <p>Select category from the drop-down</p>
                    <select name="txtEventCategory">
                             <option value="Mobile">Mobile</option>
                             <option value="Computers">Computers</option>
                             <option value="Programming">Programming</option>
                             <option value="Web development">Web development</option>
                        </select>
                    <div class="group-category"> -->
                        <!-- <section>
                            <div class="checkboxBtn">
                                <input type="checkbox" value="1" id="checkboxWebDev" name="" />
                                <label for="checkboxWebDev">Category</label>
                                </label>
                            </div>
                        </section>

                        <section>
                            <div class="checkboxBtn">
                                <input type="checkbox" value="1" id="checkboxAI" name="" />
                                <label for="checkboxAI">Category</label>
                                </label>
                            </div>
                        </section>


                        <section>
                            <div class="checkboxBtn">
                                <input type="checkbox" value="1" id="checkboxRobots" name="" />
                                <label for="checkboxRobots">Category</label>
                                </label>
                            </div>
                        </section>


                        <section>
                            <div class="checkboxBtn">
                                <input type="checkbox" value="1" id="checkboxMobile" name="" />
                                <label for="checkboxMobile">Category</label>
                                </label>
                            </div>
                        </section>

                        <section>
                            <div class="checkboxBtn">
                                <input type="checkbox" value="1" id="checkboxUI" name="" />
                                <label for="checkboxUI">Category</label>
                                </label>
                            </div>
                        </section>


                        <section>
                            <div class="checkboxBtn">
                                <input type="checkbox" value="1" id="checkboxUX" name="" />
                                <label for="checkboxUX">Category</label>
                                </label>
                            </div>
                        </section> -->


                    <!-- </div> -->
                <!-- </div> -->
            </div>
        </div>

        <div class="page" id="pageEvent1">
            <div class="card-event">
                <div class="cd-top">
                    <div class="event-bg-img" style="background-image: url(event.jpg);">

                    </div>

                    <div class="event-title">
                        <h1>Example event</h1>
                        <button class="button btn-card-secondary" id="btnCreateEvent" data-showThisPage="pageCreateEvent">
                            Attend this event
                        </button>
                    </div>

                </div>

                <div class="cd-middle">
                    <div>
                        <div class="event-info">
                            <i class="fa fa-calendar" aria-hidden="true"></i>2018-11-30T13:40
                        </div>

                        <div class="event-info">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>Copenhagen
                        </div>

                        <div class="event-info">
                            <i class="fa fa-dollar" aria-hidden="true"></i>100 DKK
                        </div>
                    </div>

                    <!-- <div>
                        <div class="event-info">
                            <i class="fa fa-dollar" aria-hidden="true"></i>FREE
                        </div>

                        <div class="event-info">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>Copenhagen
                        </div>
                    </div> -->


                    <div>


                        <div class="event-info">
                            <h4>Event categories:</h4>
                            <br>
                            <a href="#">Web Development</a>,
                            <a href="#">IT Technology</a>,
                            <br>
                            <a href="#">artificial Intelligence</a>,
                        </div>
                    </div>

                    <div class="event-social">
                        <h4>Share this event:</h4>
                        <br>
                        <i class="fa fa-facebook-square" aria-hidden="true" style="color: #3b5998; cursor: pointer;"></i>
                        <i class="fa fa-twitter-square" aria-hidden="true" style="color: #00aced;  cursor: pointer;"></i>
                        <i class="fa fa-linkedin-square" aria-hidden="true" style="color: #0077B5;  cursor: pointer;"></i>
                        <i class="fa fa-google-plus-square" aria-hidden="true" style="color: #d34836;  cursor: pointer;"></i>
                        <i class="fa fa-tumblr-square" aria-hidden="true" style="color: #32506d;  cursor: pointer;"></i>
                    </div>
                    <!-- <div class="event-info">
                        <i class="fa fa-th-large" aria-hidden="true"></i>Categories
                    </div> -->
                </div>

                <hr>

                <div class="cd-bottom">
                    <h3>Details:</h3>

                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. Pellentesque
                        placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. Vestibulum
                        placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus,
                        ac nonummy magna odio pharetra felis. 
                        <br><br>
                        Vivamus vehicula velit non metus faucibus auctor. Nam sed augue.
                        Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices,
                        lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. Pellentesque
                        ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. Phasellus
                        tincidunt diam ut ipsum. Donec eget est.</p>
                    <div class="mapPrimary" id="mapCreate"></div>
                </div>

            </div>
        </div>

        <div class="page" id="pagePartners">
        <h3 class="page-title">Partners</h3>
        </div>

        <div class="page" id="pageCalendar">
        <h3 class="page-title">Calendar</h3>
        </div>

        <div class="page" id="pageSettings">
        <h3 class="page-title">Settings</h3>
        </div>
    </div>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="scripts/script.js"></script>
    <script src="scripts/crud.script.js"></script>
    
    <script src="vendor/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="vendor/chartjs/chart.js"></script>
    <script src="scripts/charts-data.js"></script>
    <script src="vendor/tablesorter/tablesorter.js"></script>
    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAndibcuJ2-yDr8C7gpxWZC48__TpqRoKs&callback=initMap"></script> -->


</body>

</html>