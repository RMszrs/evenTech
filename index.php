<?php 
session_start();
//if already logged in
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
                <!-- <img class="img-avatar" src="img/avatar.jpg" alt="Avatar">
                <p class="name-avatar">Eva Eventmanager</p>
                <i class="fa fa-caret-down" aria-hidden="true"></i> -->
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
                    <li>
                         <!-- TEMPORARY LOGOUT BUTTON -->
                         <a href="APIs/logout.api.php">Logout</a>
            
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-main">
        <div class="page" id="pageDashboard">
            <h3 class="page-title">Dashboard</h3>
            <div class="page-topbar">
                <div class="filter-group">
                    Filters
                </div>
                <div class="btn-group">
                    <button class="button btn-page-secondary">
                        <i class="fa fa-share" aria-hidden="true"></i>Export
                    </button>

                    <button class="button btn-page-secondary">
                        <i class="fa fa-print" aria-hidden="true"></i>Print
                    </button>
                </div>
            </div>
        </div>

        <div class="page" id="pageEvents">
            <h3 class="page-title">My events</h3>
            <div class="page-topbar">
                <div class="filter-group">
                    <form>
                        <select name="">
                          <option value="value1">value 1</option>
                          <option value="value2">value 2</option>
                          <option value="value3">value 3</option>
                          <option value="value4">value 4</option>
                        </select>
                        <input type="submit" value="Submit">
                    </form>
                </div>
                <div class="btn-group">
                    <button class="button btn-page-primary" id="btnCreateEvent" data-showThisPage="pageCreateEvent">
                        <i class="fa fa-plus" aria-hidden="true"></i>Create event
                    </button>
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
                        <input id="txtEventDate" type="date" name="txtEventDate">
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

                        <input id="btnAddEvent" name="submit" type="button" style="background-color: green; color: white; width: 50px; height: 30px;"
                        value="Add Event">
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
                    <div class="event-bg-img" style="background-image: url(event.jpg);"></div>
                </div>

                <div class="cd-left">
                    Hello
                </div>

                <div class="cd-right">
                    bello
                </div>
            </div>
        </div>

        <div class="page" id="pagePartners">
            Partners
        </div>

        <div class="page" id="pageCalendar">
            Calendar
        </div>

        <div class="page" id="pageSettings">
            Settings
        </div>
    </div>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="scripts/script.js"></script>
    <script src="scripts/crud.script.js"></script>
    <script src="scripts/charts-data.js"></script>
    <script src="vendor/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="vendor/chartjs/chart.js"></script>
    <script src="vendor/tablesorter/tablesorter.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAndibcuJ2-yDr8C7gpxWZC48__TpqRoKs&callback=initMap"></script>


</body>

</html>