demo = {
  initDocumentationCharts: function() {
    if ($('#dailySalesChart').length != 0 && $('#websiteViewsChart').length != 0) {
      /* ----------==========     Daily Sales Chart initialization For Documentation    ==========---------- */

      dataDailySalesChart = {
        labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
        series: [
          [12, 17, 7, 17, 23, 18, 38]
        ]
      };

      optionsDailySalesChart = {
        lineSmooth: Chartist.Interpolation.cardinal({
          tension: 0
        }),
        low: 0,
        high: 50, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
        chartPadding: {
          top: 0,
          right: 0,
          bottom: 0,
          left: 0
        },
      }

      var dailySalesChart = new Chartist.Line('#dailySalesChart', dataDailySalesChart, optionsDailySalesChart);

      var animationHeaderChart = new Chartist.Line('#websiteViewsChart', dataDailySalesChart, optionsDailySalesChart);
    }
  },

  initDashboardPageCharts: function() {

    if ($('#dailySalesChart').length != 0 || $('#completedTasksChart').length != 0 || $('#websiteViewsChart').length != 0) {
      /* ----------==========     Daily Sales Chart initialization    ==========---------- */

      dataDailySalesChart = {
        labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
        series: [
          [12, 17, 7, 17, 23, 18, 38]
        ]
      };

      optionsDailySalesChart = {
        lineSmooth: Chartist.Interpolation.cardinal({
          tension: 0
        }),
        low: 0,
        high: 50, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
        chartPadding: {
          top: 0,
          right: 0,
          bottom: 0,
          left: 0
        },
      }

      var dailySalesChart = new Chartist.Line('#dailySalesChart', dataDailySalesChart, optionsDailySalesChart);

      md.startAnimationForLineChart(dailySalesChart);



      /* ----------==========     Completed Tasks Chart initialization    ==========---------- */

      dataCompletedTasksChart = {
        labels: ['12p', '3p', '6p', '9p', '12p', '3a', '6a', '9a'],
        series: [
          [230, 750, 450, 300, 280, 240, 200, 190]
        ]
      };

      optionsCompletedTasksChart = {
        lineSmooth: Chartist.Interpolation.cardinal({
          tension: 0
        }),
        low: 0,
        high: 1000, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
        chartPadding: {
          top: 0,
          right: 0,
          bottom: 0,
          left: 0
        }
      }

      var completedTasksChart = new Chartist.Line('#completedTasksChart', dataCompletedTasksChart, optionsCompletedTasksChart);

      // start animation for the Completed Tasks Chart - Line Chart
      md.startAnimationForLineChart(completedTasksChart);


      /* ----------==========     Emails Subscription Chart initialization    ==========---------- */

      var dataWebsiteViewsChart = {
        labels: ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
        series: [
          [542, 443, 320, 780, 553, 453, 326, 434, 568, 610, 756, 895]

        ]
      };
      var optionsWebsiteViewsChart = {
        axisX: {
          showGrid: false
        },
        low: 0,
        high: 1000,
        chartPadding: {
          top: 0,
          right: 5,
          bottom: 0,
          left: 0
        }
      };
      var responsiveOptions = [
        ['screen and (max-width: 640px)', {
          seriesBarDistance: 5,
          axisX: {
            labelInterpolationFnc: function(value) {
              return value[0];
            }
          }
        }]
      ];
      var websiteViewsChart = Chartist.Bar('#websiteViewsChart', dataWebsiteViewsChart, optionsWebsiteViewsChart, responsiveOptions);

      //start animation for the Emails Subscription Chart
      md.startAnimationForBarChart(websiteViewsChart);
    }
  },

  initGoogleMaps: function() {
    var myLatlng = new google.maps.LatLng(40.748817, -73.985428);
    var mapOptions = {
      zoom: 13,
      center: myLatlng,
      scrollwheel: false, //we disable de scroll over the map, it is a really annoing when you scroll through page
      styles: [{
        "featureType": "water",
        "stylers": [{
          "saturation": 43
        }, {
          "lightness": -11
        }, {
          "hue": "#0088ff"
        }]
      }, {
        "featureType": "road",
        "elementType": "geometry.fill",
        "stylers": [{
          "hue": "#ff0000"
        }, {
          "saturation": -100
        }, {
          "lightness": 99
        }]
      }, {
        "featureType": "road",
        "elementType": "geometry.stroke",
        "stylers": [{
          "color": "#808080"
        }, {
          "lightness": 54
        }]
      }, {
        "featureType": "landscape.man_made",
        "elementType": "geometry.fill",
        "stylers": [{
          "color": "#ece2d9"
        }]
      }, {
        "featureType": "poi.park",
        "elementType": "geometry.fill",
        "stylers": [{
          "color": "#ccdca1"
        }]
      }, {
        "featureType": "road",
        "elementType": "labels.text.fill",
        "stylers": [{
          "color": "#767676"
        }]
      }, {
        "featureType": "road",
        "elementType": "labels.text.stroke",
        "stylers": [{
          "color": "#ffffff"
        }]
      }, {
        "featureType": "poi",
        "stylers": [{
          "visibility": "off"
        }]
      }, {
        "featureType": "landscape.natural",
        "elementType": "geometry.fill",
        "stylers": [{
          "visibility": "on"
        }, {
          "color": "#b8cb93"
        }]
      }, {
        "featureType": "poi.park",
        "stylers": [{
          "visibility": "on"
        }]
      }, {
        "featureType": "poi.sports_complex",
        "stylers": [{
          "visibility": "on"
        }]
      }, {
        "featureType": "poi.medical",
        "stylers": [{
          "visibility": "on"
        }]
      }, {
        "featureType": "poi.business",
        "stylers": [{
          "visibility": "simplified"
        }]
      }]

    };
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);

    var marker = new google.maps.Marker({
      position: myLatlng,
      title: "Hello World!"
    });

    // To add the marker to the map, call setMap();
    marker.setMap(map);
  }

}

jQuery('.thumbitem').on('click', function()
{
   jQuery('.video-main iframe').attr({'src':jQuery(this).attr('data')});
});


jQuery('.slider-right').on('click', function()
{
    var img1 = jQuery('.mini1').attr('src');
    var data1 = jQuery('.mini1').attr('data');
    let set = jQuery('.thumbitem');
    let length = set.length;
    jQuery('.thumbitem').each(function(index){
        if(index < length -1) {
            jQuery(this).attr({'src':jQuery(this).next().attr('src')});
            jQuery(this).attr({'data':jQuery(this).next().attr('data')});
        }
    });
    jQuery('.mini' + length).attr({'src': img1});
    jQuery('.mini' + length).attr({'data': data1});
});

jQuery.fn.reverse = [].reverse;

jQuery('.slider-left').on('click', function()
{
    let set = jQuery('.thumbitem');
    let length = set.length;
    var imgn = jQuery('.mini' + length).attr('src');
    var datan = jQuery('.mini' + length).attr('data');
    jQuery('.thumbitem').reverse().each(function(index){
        if(index < length -1) {
            jQuery(this).attr({'src':jQuery(this).prev().attr('src')});
            jQuery(this).attr({'data':jQuery(this).prev().attr('data')});
        }
    });
    jQuery('.mini1').attr({'src': imgn});
    jQuery('.mini1').attr({'data': datan});
});

jQuery('.badge').on('click', function (e) {
    jQuery('.dropdown-menu').css('background-color', jQuery(this).attr('data-color'));
});

function compruebaAceptaCookies() {

    if(Cookies.get('rgpdOK') == 1){
        cajacookies.style.display = 'none';
    }
}


/* aquí guardamos la variable de que se ha
aceptado el uso de cookies así no mostraremos
el mensaje de nuevo */
function aceptarCookies() {
    Cookies.set('rgpdOK', '1', { expires: 365 });
    cajacookies.style.display = 'none';
}

$('.publicityLauncher').on('click', function (e) {
    e.preventDefault();
    openPublicity();
});

$('#restart_pomodoro i').on('click', function (e) {
    e.preventDefault();
    var ahora = new Date();
    var end = new Date();
    end.setTime(ahora.getTime() + (25 * 60 * 1000));
    var oldtimer = document.querySelector('#restart_pomodoro i').getAttribute('mark');

    clearInterval(oldtimer);
    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('countdown_pomodoro').innerHTML = '¡A descansar!';
            var audio = new Audio('img/sound.wav');
            audio.play();
            return;
        }
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        document.getElementById('countdown_pomodoro').innerHTML = minutes + ' minutos<br/><br/>';
        document.getElementById('countdown_pomodoro').innerHTML += seconds + ' segundos';
    }

    timer = setInterval(showRemaining, 1000);
    var b = document.querySelector('#restart_pomodoro i');
    b.setAttribute('mark', timer);
});

function openPublicity() {
    var videoElement;
    videoElement = document.getElementById('video-element');
    var playButton = document.getElementById('play-button');
    playButton.addEventListener('click', function(event) {
        videoElement.play();
    });
}


/* ésto se ejecuta cuando la web está cargada */
jQuery(document).ready(function () {
    console.log("pepe");
    compruebaAceptaCookies();
});

