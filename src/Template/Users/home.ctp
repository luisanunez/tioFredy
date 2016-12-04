<?= $this->Html->css('custom.min.css') ?>
<?= $this->Html->css('animate.min.css') ?>
<?= $this->Html->css('bootstrap.min.css') ?>
<?= $this->Html->css('bootstrap.css') ?>
<?= $this->Html->css('font-awesome.min.css') ?>
<?= $this->Html->css('font-awesome.css') ?>
<?= $this->Html->css('nprogress.css') ?>
<?= $this->Html->css('green.css') ?>
<?= $this->Html->css('bootstrap-progressbar-3.3.4.min.css') ?>
<?= $this->Html->css('jqvmap.min.css') ?>

<?= $this->Html->script('jquery.js') ?>
<?= $this->Html->script('bootstrap.min.js') ?>
<?= $this->Html->script('custom.min.js') ?>
<?= $this->Html->script('custom.js') ?>
<?= $this->Html->script('fastclick.js') ?>
<?= $this->Html->script('nprogress.js') ?>
<?= $this->Html->script('Chart.min.js') ?>
<?= $this->Html->script('gauge.min.js') ?>
<?= $this->Html->script('bootstrap-progressbar.min.js') ?>
<?= $this->Html->script('icheck.min.js') ?>
<?= $this->Html->script('skycons.js') ?>
<?= $this->Html->script('Flot/jquery.flot.js') ?>
<?= $this->Html->script('Flot/jquery.flot.pie.js') ?>
<?= $this->Html->script('Flot/jquery.flot.time.js') ?>
<?= $this->Html->script('Flot/jquery.flot.stack.js') ?>
<?= $this->Html->script('Flot/jquery.flot.resize.js') ?>
<?= $this->Html->script('flot.orderbars/js/jquery.flot.orderBars.js') ?>
<?= $this->Html->script('flot-spline/js/jquery.flot.spline.min.js') ?>
<?= $this->Html->script('flot.curvedlines/curvedLines.js') ?>
<?= $this->Html->script('DateJS/build/date.js') ?>
<!--<?= $this->Html->script('jqvmap/dist/jquery.vmap.js') ?>
<!--  <?= $this->Html->script('jqvmap/dist/maps/jquery.vmap.world.js') ?>
<!--  <?= $this->Html->script('jqvmap/examples/js/jquery.vmap.sampledata.js') ?>
-->
<?= $this->Html->script('moment/moment.min.js') ?>
<?= $this->Html->script('bootstrap-daterangepicker/daterangepicker.js') ?>
<?= $this->Html->script('smartresize.js') ?>


</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="home" class="site_title"><i class="fa fa-bookmark"></i> <span>Hospedaje</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile">            
            <div class="profile_pic">
               <span class="fa fa-user fa-4x pull-right" style="color:white" ></span>
            </div>
            <div class="profile_info">              
                <span>Bienvenido</span>
                <h2><?=$current_user['first_name'] . ' ' . $current_user['last_name']?></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br/>

          <!-- /sidebar menu -->

          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="home">Contactos</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>


          <!-- /menu footer buttons--> 
          <div class="sidebar-footer hidden-small">

<!--
            <a data-toggle="tooltip" data-placement="top" title="Logout">
              <?= $this->Html->tag('spam', ' Cerrar Sesion ' , ['controller' => 'Users', 'action' => 'logout', 'class' => 'glyphicon glyphicon-off', 'aria-hidden' => 'true']) ?>
                <!--<span class="glyphicon glyphicon-off" aria-hidden="true"></span>-->
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <?=$current_user['first_name'] . ' ' . $current_user['last_name']?>
                    <span class="fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="logout"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesion</a></li>
                </ul>
              </li>          
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>General Elements</h3>
            </div>

            <div class="title_right">
              
            </div>
          </div>

          <div class="clearfix"></div>


          <?php foreach ($contacts as $contact): ?>
          <div class="x_content">
            <ul class="list-unstyled timeline">
              <li>
                <div class="block">
                  <div class="tags">
                    <a href="" class="tag">
                      <span>Contacto</span>
                    </a>
                  </div>
                  <div class="block_content">
                    <h2 class="title"><a><?= $contact->email ?></a></h2>
                    <div class="byline">
                      <span><?= $contact->created->nice() ?></span>  by <?= $contact->first_name . ' ' . $contact->last_name?>
                    </div>
                    <p class="excerpt"><?= $contact->message ?> 
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <?php endforeach ?>
          <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< Anterior') ?>
                <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
                <?= $this->Paginator->next('Siguiente >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
          
          
          
          
        </div>
      </div>
  </div>
      <script>
        $(document).ready(function() {
          var data1 = [
            [gd(2012, 1, 1), 17],
            [gd(2012, 1, 2), 74],
            [gd(2012, 1, 3), 6],
            [gd(2012, 1, 4), 39],
            [gd(2012, 1, 5), 20],
            [gd(2012, 1, 6), 85],
            [gd(2012, 1, 7), 7]
          ];

          var data2 = [
            [gd(2012, 1, 1), 82],
            [gd(2012, 1, 2), 23],
            [gd(2012, 1, 3), 66],
            [gd(2012, 1, 4), 9],
            [gd(2012, 1, 5), 119],
            [gd(2012, 1, 6), 6],
            [gd(2012, 1, 7), 9]
          ];
          $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
            data1, data2
          ], {
            series: {
              lines: {
                show: false,
                fill: true
              },
              splines: {
                show: true,
                tension: 0.4,
                lineWidth: 1,
                fill: 0.4
              },
              points: {
                radius: 0,
                show: true
              },
              shadowSize: 2
            },
            grid: {
              verticalLines: true,
              hoverable: true,
              clickable: true,
              tickColor: "#d5d5d5",
              borderWidth: 1,
              color: '#fff'
            },
            colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
            xaxis: {
              tickColor: "rgba(51, 51, 51, 0.06)",
              mode: "time",
              tickSize: [1, "day"],
              //tickLength: 10,
              axisLabel: "Date",
              axisLabelUseCanvas: true,
              axisLabelFontSizePixels: 12,
              axisLabelFontFamily: 'Verdana, Arial',
              axisLabelPadding: 10
            },
            yaxis: {
              ticks: 8,
              tickColor: "rgba(51, 51, 51, 0.06)",
            },
            tooltip: false
          });

          function gd(year, month, day) {
            return new Date(year, month - 1, day).getTime();
          }
        });
      </script>
      <!-- /Flot -->

      <!-- JQVMap -->
      <script>
        $(document).ready(function() {
          $('#world-map-gdp').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#E6F2F0', '#149B7E'],
            normalizeFunction: 'polynomial'
          });
        });
      </script>
      <!-- /JQVMap -->

      <!-- Skycons -->
      <script>
        $(document).ready(function() {
          var icons = new Skycons({
              "color": "#73879C"
            }),
            list = [
              "clear-day", "clear-night", "partly-cloudy-day",
              "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
              "fog"
            ],
            i;

          for (i = list.length; i--;)
            icons.set(list[i], list[i]);

          icons.play();
        });
      </script>
      <!-- /Skycons -->

      <!-- Doughnut Chart -->
      <script>
        $(document).ready(function() {
          var options = {
            legend: false,
            responsive: false
          };

          new Chart(document.getElementById("canvas1"), {
            type: 'doughnut',
            tooltipFillColor: "rgba(51, 51, 51, 0.55)",
            data: {
              labels: [
                "Symbian",
                "Blackberry",
                "Other",
                "Android",
                "IOS"
              ],
              datasets: [{
                data: [15, 20, 30, 10, 30],
                backgroundColor: [
                  "#BDC3C7",
                  "#9B59B6",
                  "#E74C3C",
                  "#26B99A",
                  "#3498DB"
                ],
                hoverBackgroundColor: [
                  "#CFD4D8",
                  "#B370CF",
                  "#E95E4F",
                  "#36CAAB",
                  "#49A9EA"
                ]
              }]
            },
            options: options
          });
        });
      </script>
      <!-- /Doughnut Chart -->

      <!-- bootstrap-daterangepicker -->
      <script>
        $(document).ready(function() {

          var cb = function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
          };

          var optionSet1 = {
            startDate: moment().subtract(29, 'days'),
            endDate: moment(),
            minDate: '01/01/2012',
            maxDate: '12/31/2015',
            dateLimit: {
              days: 60
            },
            showDropdowns: true,
            showWeekNumbers: true,
            timePicker: false,
            timePickerIncrement: 1,
            timePicker12Hour: true,
            ranges: {
              'Today': [moment(), moment()],
              'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
              'Last 7 Days': [moment().subtract(6, 'days'), moment()],
              'Last 30 Days': [moment().subtract(29, 'days'), moment()],
              'This Month': [moment().startOf('month'), moment().endOf('month')],
              'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            opens: 'left',
            buttonClasses: ['btn btn-default'],
            applyClass: 'btn-small btn-primary',
            cancelClass: 'btn-small',
            format: 'MM/DD/YYYY',
            separator: ' to ',
            locale: {
              applyLabel: 'Submit',
              cancelLabel: 'Clear',
              fromLabel: 'From',
              toLabel: 'To',
              customRangeLabel: 'Custom',
              daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
              monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
              firstDay: 1
            }
          };
          $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
          $('#reportrange').daterangepicker(optionSet1, cb);
          $('#reportrange').on('show.daterangepicker', function() {
            console.log("show event fired");
          });
          $('#reportrange').on('hide.daterangepicker', function() {
            console.log("hide event fired");
          });
          $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
            console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
          });
          $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
            console.log("cancel event fired");
          });
          $('#options1').click(function() {
            $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
          });
          $('#options2').click(function() {
            $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
          });
          $('#destroy').click(function() {
            $('#reportrange').data('daterangepicker').remove();
          });
        });
      </script>
      <!-- /bootstrap-daterangepicker -->

      <!-- gauge.js -->
      <script>
        var opts = {
          lines: 12,
          angle: 0,
          lineWidth: 0.4,
          pointer: {
            length: 0.75,
            strokeWidth: 0.042,
            color: '#1D212A'
          },
          limitMax: 'false',
          colorStart: '#1ABC9C',
          colorStop: '#1ABC9C',
          strokeColor: '#F0F3F3',
          generateGradient: true
        };
        var target = document.getElementById('foo'),
          gauge = new Gauge(target).setOptions(opts);

        gauge.maxValue = 6000;
        gauge.animationSpeed = 32;
        gauge.set(3200);
        gauge.setTextField(document.getElementById("gauge-text"));
      </script>

</body>