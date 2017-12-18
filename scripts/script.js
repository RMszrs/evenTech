/// Variables

var aBtnShowPages = document.getElementsByClassName("button");


hidePages();

document.addEventListener('click', function (event) {
    var clickedElement = event.target.tagName == 'I' ? event.target.parentElement : event.target;
    //console.log(clickedElement);

    if (clickedElement.classList.contains("button")) {
        if (clickedElement.classList.contains("btn-hamburger")) {
            console.log("hamburger");
            $('.bottom-nav').slideToggle(400);
        } else if (clickedElement.classList.contains("btn-nav-main")) {

            var sPageId = clickedElement.getAttribute("data-showThisPage");
            switchPages(sPageId);
        } else if (clickedElement.id == "btnCreateEvent") {
            console.log(clickedElement.getAttribute("data-showThisPage"));

            var sPageId = clickedElement.getAttribute("data-showThisPage");
            switchPages(sPageId);
        } else if (clickedElement.classList.contains("btn-open")) {
            console.log(clickedElement.getAttribute("data-showThisPage"));

            var sPageId = clickedElement.getAttribute("data-showThisPage");
            switchPages(sPageId);
        } else if (clickedElement.classList.contains("btn-delete")) {
            var sEvent = clickedElement.getAttribute("data-deleteEvent");
            console.log(sEvent);
            deleteEvent(sEvent);
        }
    } else if (clickedElement.classList.contains("column-sort")) {
        $("#table-events").tablesorter();
    } else if (clickedElement.classList.contains("table-event-row")) {
        console.log("table");
        // var sPageId = clickedElement.getAttribute("data-showThisPage");
        // switchPages(sPageId);
    }
});


function hidePages() {
    var aPages = document.getElementsByClassName("page");
    for (var i = 1; i < aPages.length; i++) {
        aPages[i].style.display = "none";
    }
}

/// Page navigation
function switchPages(sPageId) {
    var sThisPageId;
    for (var i = 0; i < aBtnShowPages.length; i++) {
        sThisPageId = aBtnShowPages[i].getAttribute("data-showThisPage");
        if (sPageId == sThisPageId) {
            aBtnShowPages[i].classList.add("selected");

            var aPages = document.getElementsByClassName("page");

            for (var j = 0; j < aPages.length; j++) {
                aPages[j].style.display = "none";
            }

            var sDataAttibute = sPageId;
            document.getElementById(sDataAttibute).style.display = "flex";

        } else {
            aBtnShowPages[i].classList.remove("selected");
        }
    }
}


function deleteEvent(delEvent) {
    
        console.log(delEvent);
        var el = document.getElementById(delEvent);
        el.parentNode.removeChild(el);
    
        if (confirm("Are you sure you want to delete this event ?")) {
            console.log(delEvent);
            var el = document.getElementById(delEvent);
            el.parentNode.removeChild(el);
        }
    }

function initMap() {
    var jCopenhagen = { lat: 55.676221, lng: 12.561543 };
    var options = {
        zoom: 9,
        center: jCopenhagen
    };

    var mapCreate = new google.maps.Map(document.getElementById('mapCreate'), options);

    google.maps.event.addListener(mapCreate, 'click', function (event) {
        setLocation(mapCreate, event.latLng);
    });
}

var marker;

function setLocation(map, location) {
    if (marker) {
        marker.setPosition(location);
    } else {
        marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }

    var sLatitude = location.lat();
    var sLongitude = location.lng();

    //frmRegisterUser.elements["txtUserLatitude"].value = sLatitude;
    //frmRegisterUser.elements["txtUserLongitude"].value = sLongitude;
    console.log("Latitude: " + sLatitude + ", Longitude: " + sLongitude);
}


// for (var i = 0; i < aBtnShowPages.length; i++) {
//     //aBtnShowPages = aBtnShowPages[i].this.getAttribute("data-showThisPage");

//     aBtnShowPages[i].addEventListener("click", function () {
//         var aPages = document.getElementsByClassName("page");
//         for (var j = 0; j < aPages.length; j++) {
//             aPages[j].style.display = "none";
//         }
//         var sDataAttibute = this.getAttribute("data-showThisPage");
//         //console.log(sDataAttibute);

//         document.getElementById(sDataAttibute).style.display = "flex";
//     });
// }


