@extends('layouts.app')

@section('title') Events :: @parent @endsection

@section('meta')
<meta property="og:title"              content="Calendar :: Manchester Students' Union Events">
<meta property="og:description"        content="">
<meta property="og:image"              content="{{ asset('img/logo.jpg') }}">
<meta property="og:type"               content="website">
@endsection

@section('styles')
<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('lib/bootstrap-image-gallery/css/bootstrap-image-gallery.min.css') }}">
<style type="text/css">
.event-header {
  text-align: center;
}
.event-header h2 {
  font-size: 80px;
  font-family: 'solano_bold';
}
.calendar-wrapper {
  height: 46px;
  overflow: hidden;
}
.month-controls {
  margin-top: 3px;
}
#month-select {
  width: 150px;
}
#month-select option {
  text-align: center;
}

ul.calendar {
  margin: 0;
  padding: 0;
  overflow-x: scroll;
  white-space: nowrap;
  border-left: 1px solid rgba(113, 6, 113, 0.3);
  border-right: 1px solid rgba(113, 6, 113, 0.3);
}
ul.calendar li {
  text-decoration: none;
  list-style: none;
  list-style-type: none;
  display: inline-block;
}
ul.calendar li a {
  padding: 10px 16px;
  color: #41535D;
  font-family: arial black;
  font-size: 16px;
  border-radius: 30px;
  padding: 11px 12px;
  display: block;
  width: 45px;
  text-align: center;
  border: 1px solid transparent;
}
ul.calendar li:hover a {
  border: 1px solid #000;
}
ul.calendar li.active a {
  background: #41535D;
  border: 1px solid #000;
  color: #fefefe;
}
.days-scroll {
  position: absolute;
  top: 0;
  padding: 8px 10px;
  font-size: 20px;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
}
a.days-scroll:hover {
  background-color: rgba(65,83,93,0.6);
  color: rgb(243, 243, 5);
}
#days-left {
  left: -20px;
}
#days-right {
  right: -20px;
}
#no-events-msg {
  color: #41535D;
}
@media(max-width: 768px) {
  #calendar-controls-section .inside-bar {
    margin: 0 -15px;
    padding-left: 0;
    padding-right: 0;
  }
  #events-calendar-section {
    padding-top: 10px;
  }
  .event-header {
    border-bottom: 0;
    padding-bottom: 0;
  }
  .event-header h2 {
    font-size: 45px;
  }
}
</style>
@endsection

@section('content')
<section id="title-section" class="content-section">
  <div class="container">
    <div class="row">
      <div class="page-header event-header">
        <h2 id="page-header"><?=date('l')?> Events</h2>
      </div>
    </div>
  </div>
</section>
<section id="calendar-controls-section" class="content-section">
  <div class="container-fluid">
    <div class="row inside-bar">
      <div class="col-sm-8 col-sm-offset-2">
        <div class="col-sm-4 text-center">
          <div class="month-controls">
            <!-- <a class="btn btn-primary month-prev"><i class="fa fa-chevron-left"></i></a> -->
            <select class="btn btn-primary" id="month-select">
              <option <?=date('M')=='Jan'?'selected="selected"':''?> value="Jan-<?=date('Y')?>">Jan&nbsp;<?=date('Y')?></option>
              <option <?=date('M')=='Feb'?'selected="selected"':''?> value="Feb-<?=date('Y')?>">Feb&nbsp;<?=date('Y')?></option>
              <option <?=date('M')=='Mar'?'selected="selected"':''?> value="Mar-<?=date('Y')?>">Mar&nbsp;<?=date('Y')?></option>
              <option <?=date('M')=='Apr'?'selected="selected"':''?> value="Apr-<?=date('Y')?>">Apr&nbsp;<?=date('Y')?></option>
              <option <?=date('M')=='May'?'selected="selected"':''?> value="May-<?=date('Y')?>">May&nbsp;<?=date('Y')?></option>
              <option <?=date('M')=='Jun'?'selected="selected"':''?> value="Jun-<?=date('Y')?>">Jun&nbsp;<?=date('Y')?></option>
              <option value="Jul-<?=date('Y')?>">Jul&nbsp;<?=date('Y')?></option>
              <option value="Aug-<?=date('Y')?>">Aug&nbsp;<?=date('Y')?></option>
              <option <?=in_array(date('M'),['Jul', 'Aug', 'Sep'])?'selected="selected"':''?> value="Sep-<?=date('Y')?>">Sep&nbsp;<?=date('Y')?></option>
              <option <?=date('M')=='Oct'?'selected="selected"':''?> value="Oct-<?=date('Y')?>">Oct&nbsp;<?=date('Y')?></option>
              <option <?=date('M')=='Nov'?'selected="selected"':''?> value="Nov-<?=date('Y')?>">Nov&nbsp;<?=date('Y')?></option>
              <option <?=date('M')=='Dec'?'selected="selected"':''?> value="Dec-<?=date('Y')?>">Dec&nbsp;<?=date('Y')?></option>
              <option value="Jan-<?=date('Y')+1?>">Jan&nbsp;<?=date('Y')+1?></option>
              <option value="Feb-<?=date('Y')+1?>">Feb&nbsp;<?=date('Y')+1?></option>
              <option value="Mar-<?=date('Y')+1?>">Mar&nbsp;<?=date('Y')+1?></option>
              <option value="Apr-<?=date('Y')+1?>">Apr&nbsp;<?=date('Y')+1?></option>
              <option value="May-<?=date('Y')+1?>">May&nbsp;<?=date('Y')+1?></option>
              <option value="Jun-<?=date('Y')+1?>">Jun&nbsp;<?=date('Y')+1?></option>
              <option value="Jul-<?=date('Y')+1?>">Jul&nbsp;<?=date('Y')+1?></option>
              <option value="Aug-<?=date('Y')+1?>">Aug&nbsp;<?=date('Y')+1?></option>
            </select>
            <!-- <a class="btn btn-primary month-prev"><i class="fa fa-chevron-right"></i></a> -->
          </div>
        </div>
        <div class="col-sm-8">
          <a class="text-primary days-scroll" id="days-left"><i class="fa fa-chevron-left"></i></a>
          <div class="calendar-wrapper">
            <ul class="calendar" id="calendar" title="Drag me!">
              <div id="calendar-Jan-<?=date('Y')?>">
                @for($i=1; $i<=cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y')); $i++)
                  <li <?=$i==date('d')?'class="active"':''?>><a><?=$i?></a></li>
                @endfor
              </div>
            </ul>
          </div>
          <a class="text-primary days-scroll" id="days-right"><i class="fa fa-chevron-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="events-calendar-section" class="content-section container-fluid">
  <div class="row" id="events">
    <div class="span-12 events-container">
      @foreach($events as $event)
        <div class="col-xl-2 col-lg-3 col-sm-4 col-xs-12 event-wrapper 
              mix date-<?=date('d', strtotime($event->date_start)).'-'.date('M', strtotime($event->date_start)).'-'.date('Y', strtotime($event->date_start))?>"
             data-date="<?=strtotime($event->date_start . ' ' . $event->time_start)?>" 
             data-title="<?=$event->title?>">
          <div class="card has-cover event-card <?=$event->cover?'flip':''?>">
            @if($event->cover)
            <div class="front">
              <div class="card-cover" style="background-image:url('{{ asset('img/'.$event->cover) }}');"></div>
              @if(false)
              <h2 class="card-title"><a href="{{ url('events/' . $event->slug) }}"><?=$event->title?></a></h2>
              @endif
              <h2 class="card-date"><a href="#"><?=date('l, j F Y', strtotime($event->date_start))?></a></h2>
            </div>
            @endif
            <div class="back">
              <div class="card-content">
                <div class="card-body">
                  <h2 class="card-title"><a href="{{ url('events/' . $event->slug) }}"><?=$event->title?></a></h2>
                  <h4 class="card-date"><?=date('l, j F Y', strtotime($event->date_start))?></h4>
                  <h4 class="card-time"><?=$event->time_start?> - <?=$event->time_end?></h4>
                  <p class="card-description">
                    @if(false)
                    @if(strlen($event->description) > 100)
                      <?=substr($event->description, 0, 100)?>... <a href="{{ url('events/' . $event->slug) }}">More</a>
                    @else
                      <?=$event->description?>
                    @endif
                    @endif
                  </p>
                  <p class="card-details">
                    <?=$event->time_start?> - <?=$event->time_end?>, @if(false)<?=$event->price?>, @endif<?=$event->location_name?>
                  </p>
                </div>
                <hr>
                <div class="card-footer">
                  @if($event->getOriginal('price') || $event->price != "Free")
                    <a class="card-action" href="<?=$event->tickets_link?>">Wristband&nbsp;<i class="fa fa-ticket" aria-hidden="true"></i></a>
                  @endif
                  <a class="card-action" target="_blank" href="{{ url('events/' . $event->slug) }}">Directions&nbsp;<i class="fa fa-location-arrow" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
      <p id="no-events-msg" class="text-info text-center" style="display:none;">
        There are no scheduled events for this day.
      </p>
    </div>
  </div>
</section>
@endsection

@section('scripts')
<script src="{{ asset('js/dragscroll.js') }}"></script>
<script>
$(document).ready(function() {
  var calendar = $("#calendar"),
    intervalId,
    scrollLeft = function() {
      var left = calendar.scrollLeft();
      calendar.scrollLeft(left - 5);
    },
    scrollRight = function() {
      var left = calendar.scrollLeft();
      calendar.scrollLeft(left + 5);
    };
  
  calendar.dragScroll({});

  // Initialise calendar
  var day = $($("#calendar li.active")[0]).find("a").html(),
      month = $("#month-select").val();
  $("#events .events-container").mixItUp({
    load: {
      filter: '.date-' + day + '-' + month
    }    
  });
  // $("#events .events-container").mixItUp('filter', '.date-' + day + '-' + month);
  $("#events .events-container").mixItUp('sort', 'date:asc');
  $("#events .events-container").on("mixStart", function(e, state) {
    $("#no-events-msg").hide();
  });
  $("#events .events-container").on("mixEnd", function(e, state) {
    if(!state.totalShow) {
      $("#no-events-msg").show();
    } else {
      $("#no-events-msg").hide();
    }
  });
  // Flip for events with cover
  $("#events .card.flip").flip();

  // Scroll on hover
  // Initialise scroll so that you can see the date
  calendar.scrollLeft(calendar.scrollLeft() + 45*parseInt($($("#calendar li.active")[0]).find("a").html()));
  $('#days-left').hover(function () {
    var intervalDelay = 20;
    intervalId = setInterval(scrollLeft, intervalDelay);
  }, function () {
    clearInterval(intervalId);
  });
  $('#days-right').hover(function () {
    var intervalDelay = 20;
    intervalId = setInterval(scrollRight, intervalDelay);
  }, function () {
    clearInterval(intervalId);
  });

  // Month controlls
  $("#month-select").change(function(e) {
    var vall = $(this).val(),
        days = $("#calendar li"),
        day = $($("#calendar li.active")[0]).find("a").html(),
        date = new Date(vall.split("-")[0] + ' ' + day + ', ' + vall.split("-")[1]);

    $("#events .events-container").mixItUp('filter', '.date-' + day + '-' + vall);
    $("#page-header").html(["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"][date.getDay()] + ' Events');

    if(vall.split("-")[0] == "Sep" || vall.split("-")[0] == "Nov" || vall.split("-")[0] == "Jun" || vall.split("-")[0] == "Apr") {
      $(days[30]).css("display", "none");
    } else if(vall == "Feb") {
      $(days[29]).css("display", "none");
      $(days[30]).css("display", "none");
    }
    else {
      $(days[29]).css("display", "inline-block");
      $(days[30]).css("display", "inline-block");
    }
  });

  // Day controlls
  $("#calendar li").click(function(e) {
    var li = $(this),
        day = li.find("a").html(),
        month = $("#month-select").val(),
        date = new Date(month.split("-")[0] + ' ' + day + ', ' + month.split("-")[1]);

    $("#calendar li.active").removeClass("active");
    li.addClass("active");
    $("#events .events-container").mixItUp('filter', '.date-' + day + '-' + month);
    $("#page-header").html(["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"][date.getDay()] + ' Events');
  });
});
</script>
@endsection
