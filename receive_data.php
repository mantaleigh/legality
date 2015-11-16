<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
<script type = "text/javascript">

var currentData;
var map, heatmap;
    
//http://ec2-52-34-3-197.us-west-2.compute.amazonaws.com/
$.ajax({
   url: 'get_data.php',
   data: {
      format: 'json'
   },
   error: function(e) {
	   console.log(e);
      $('#info').html('<p>An error has occurred</p>');
   },
    dataType: 'json',
    success: function(data) {
    console.log('The data received is ' + data);
    console.log(data[0]);
    currentData = data;

    loadEntriesView(data);
    $('#map-button').click(loadMapView);
    $('#entries-button').click(function(){
        $('#map_page').css('display', 'none');
        $('#entries_page').css('display', 'block');
        $('#map-button').removeClass('active');
        $("#entries-button").addClass('active');  
    });

    },
    type: 'GET'
});
    
   
function loadEntriesView(data) {
    $('#map_page').css('display', 'none');
    $('#entries_page').css('display', 'block');
    $('#map-button').removeClass('active');
    $("#entries-button").addClass('active');    
    $('#entries_page').load('entries.html', function(){
        $(document).on('click', ".table-content", function() {
            var data = {
                'img_path': $(this).find('img').attr('src'),
                'time': $(':nth-child(2)', this).text(),
                'address': $(':nth-child(3)', this).text(), 
                'no_of_reports': $(':nth-child(4)', this).text(), 
                'type': $(':nth-child(5)', this).text(),
                'id': $(':nth-child(6)', this).text(),
                'description': $(':nth-child(7)', this).text()
            };
            console.log(data);
            displayRawData(data); 
        });  
    populateTable(data);  
    });
}

function displayRawData(data) { 
    $('body').append('<div id="overlay"></div>');
    $('body').append('<div id="overlay-content"></div>');
    
    $('#overlay-content').append('<div id="raw_image_content"><span class="glyphicon glyphicon-chevron-left raw-data-clickable"></span><img src="' + data.img_path + '"></img>' + '<span class="glyphicon glyphicon-chevron-right raw-data-clickable"></span></div><span class="glyphicon glyphicon-remove-circle raw-data-clickable"></span><div id="raw_data_info"><table><tr><th>Time</th><th>Address</th><th>No. of Reports</th><th>Type of Offence</th><th>ID</th><th>Description</th></tr></table></div>');
    
    var str = '<tr><td>' + data.time + '</td><td>' + data.address + '</td><td>' + data.no_of_reports + '</td><td>' + data.type + '</td><td>' + data.id + '</td><td>' + data.description + '</td></tr>';
    
    $('#raw_data_info table tr:last').after(str);

    $(document).on('click', ".glyphicon-remove-circle", function() {
        $('#overlay').remove();
        $("#overlay-content").remove();
    });

}
 
/* only works called as it is - no other calls allowed (I know, it's gross) */
function getAddress(lat, long) { 
    var address; 
    var req = 'http://maps.googleapis.com/maps/api/geocode/json?latlng=' + lat + '%2C' + long + '&sensor=false';
    $.ajax({
       async: false, 
       url: req,
       data: {
          format: 'json'
       },
       error: function(e) {
           console.log(e);
          $('#info').html('<p>An error has occurred</p>');
       },
        dataType: 'json',
        success: function(data) {
           console.log(data.results);
            address = data.results[0].formatted_address;
        },
        type: 'GET'
    });
    
    return address;
}


function loadMapView() {
    $('#entries_page').css('display', 'none');
    $('#map_page').css('display', 'block');
    $('#entries-button').removeClass('active');
    $("#map-button").addClass('active');
    $('#map_page').load('map.html', initMap);
}

function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: {lat: 42.3744, lng: -71.1169},
    mapTypeId: google.maps.MapTypeId.SATELLITE
  });

  heatmap = new google.maps.visualization.HeatmapLayer({
    data: getPoints(),
    map: map
  });
    
heatmap.set('radius', heatmap.get('radius') ? null : 20);
}

function changeGradient() {
  var gradient = [
    'rgba(0, 255, 255, 0)',
    'rgba(0, 255, 255, 1)',
    'rgba(0, 191, 255, 1)',
    'rgba(0, 127, 255, 1)',
    'rgba(0, 63, 255, 1)',
    'rgba(0, 0, 255, 1)',
    'rgba(0, 0, 223, 1)',
    'rgba(0, 0, 191, 1)',
    'rgba(0, 0, 159, 1)',
    'rgba(0, 0, 127, 1)',
    'rgba(63, 0, 91, 1)',
    'rgba(127, 0, 63, 1)',
    'rgba(191, 0, 31, 1)',
    'rgba(255, 0, 0, 1)'
  ]
  heatmap.set('gradient', heatmap.get('gradient') ? null : gradient);
}

function changeRadius() {
  heatmap.set('radius', heatmap.get('radius') ? null : 20);
}

function changeOpacity() {
  heatmap.set('opacity', heatmap.get('opacity') ? null : 0.2);
}

// Heatmap data -- extra data to make the map more interesting
function getPoints() {
    var arr = [
        new google.maps.LatLng(42.3754, -71.1163), 
        new google.maps.LatLng(42.3771, -71.1163), 
        new google.maps.LatLng(42.3762, -71.1264), 
        new google.maps.LatLng(42.3761, -71.1262), 
        new google.maps.LatLng(42.3762, -71.1275), 
        new google.maps.LatLng(42.3761, -71.1239), 
        new google.maps.LatLng(42.3751, -71.1169), 
        new google.maps.LatLng(42.3754, -71.1199), 
        new google.maps.LatLng(42.3754, -71.1179), 
        new google.maps.LatLng(42.3764, -71.1169), 
        new google.maps.LatLng(42.3744, -71.1099), 
        new google.maps.LatLng(42.3654, -71.1099), 
        new google.maps.LatLng(42.3645, -71.1098), 
        new google.maps.LatLng(42.3655, -71.1097), 
        new google.maps.LatLng(42.3677, -71.1099), 
        new google.maps.LatLng(42.3644, -71.1089), 
        new google.maps.LatLng(42.3777, -71.1169), 
        new google.maps.LatLng(42.3748, -71.1169), 
        new google.maps.LatLng(42.3744, -71.1022), 
        new google.maps.LatLng(42.3744, -71.1022), 
        new google.maps.LatLng(42.3744, -71.1022), 
        new google.maps.LatLng(42.3746, -71.1022), 
        new google.maps.LatLng(42.3746, -71.1022), 
        new google.maps.LatLng(42.3745, -71.1022), 
        new google.maps.LatLng(42.3745, -71.1022), 
        new google.maps.LatLng(42.3744, -71.1022), 
        new google.maps.LatLng(42.3744, -71.1022), 
        new google.maps.LatLng(42.3744, -71.1169), 
        new google.maps.LatLng(42.3744, -71.1169), 
        new google.maps.LatLng(42.3744, -71.1169), 
        new google.maps.LatLng(42.3744, -71.1169), 
        new google.maps.LatLng(42.3744, -71.1169), 
        new google.maps.LatLng(42.3744, -71.1169), 
        new google.maps.LatLng(42.3744, -71.1169), 
        new google.maps.LatLng(42.3744, -71.1169), 
        new google.maps.LatLng(42.3744, -71.1169), 
        new google.maps.LatLng(42.3744, -71.1169), 
        new google.maps.LatLng(42.3744, -71.1169), 
        new google.maps.LatLng(42.3744, -71.1169), 
        new google.maps.LatLng(42.3744, -71.1169)
    ]; 
    var i = 0; 
    while(currentData[i] != undefined) {
         arr.push(new google.maps.LatLng(currentData[i].latitude, currentData[i].longitude));
        i++;
    }
  return arr;
}
       
    
function populateTable(data) { 
    var i = 100;
    var count = 0; 
    while (i >= 0)
    { 
        if (data[i] != undefined) {
            count++;
            var img = '<img src="http://ec2-52-34-3-197.us-west-2.compute.amazonaws.com/' + data[i]['image_path'] + '"></img>';
            var str = '<tr class="table-content">' + '<td>' + img + '</td>' + '<td>' + data[i].date_of_event + '</td>' + '<td>' + getAddress(data[i].latitude, data[i].longitude) + '</td>' + '<td>' + 1 + '</td>' + '<td>' + data[i].crime_type + '</td>' + '<td>' + data[i].ID + '</td>' + '<td>' + data[i].description + '</td>' + '</tr>';
            $('.table tr:last').after(str);
        }
        i--;
    }
    $('#num-results p').text(count + " results");

}


</script>

</head>

<body>
</body>
</html>