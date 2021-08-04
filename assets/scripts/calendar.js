/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!******************************************************************!*\
  !*** ../demo1/src/js/pages/features/calendar/external-events.js ***!
  \******************************************************************/

var KTCalendarExternalEvents = function() {

    var events = function(){
        $.ajax({
            type: "POST",
            url: HOST_URL + "admin/product/api",
            dataType: "json",
            encode: true,
        }).done(function (data) {
            var events = [];
            var row = data.data;
            for (var i = 0 ; i < row.length; i++){
                events.push({
                    user_name: row[i]['user_name'],
                    title: row[i]['name'],
                    start: row[i]['delivery_date'],
                    description: row[i]['content'],
                    className : 'fc-event-success'
                })
            }
            initCalendar(events);
        });
    }
    var initCalendar = function(events) {
        var todayDate = moment().startOf('day');
        var YM = todayDate.format('YYYY-MM');
        var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
        var TODAY = todayDate.format('YYYY-MM-DD');
        var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

        var calendarEl = document.getElementById('kt_calendar');
        var containerEl = document.getElementById('kt_calendar_external_events');
        
        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],

            isRTL: KTUtil.isRTL(),
            header: {
                left: false,
                center: 'title'
            },

            height: 600,
            contentHeight: 580,
            aspectRatio: 3,  // see: https://fullcalendar.io/docs/aspectRatio

            nowIndicator: true,
            now: TODAY + 'T09:25:00', // just for demo

            views: {
                dayGridMonth: { buttonText: 'month' },
                timeGridWeek: { buttonText: 'week' },
                timeGridDay: { buttonText: 'day' }
            },

            defaultView: 'dayGridMonth',
            defaultDate: TODAY,

            droppable: false, // this allows things to be dropped onto the calendar
            editable: false,
            eventLimit: true, // allow "more" link when too many events
            navLinks: true,
            events : events,
            eventClick : function (info){
                var user_name = info.event.extendedProps.user_name;
                var title = info.event.title;
                var content = info.event.extendedProps.description;
                $("div[name=detail]").css("display","block");
                $("span[name=date]").html(user_name);
                $("a[name=title]").html(title);
                $("p[name=content]").html(content);
            },
            eventRender: function(info) {
                var element = $(info.el);
                if (info.event.extendedProps && info.event.extendedProps.description) {
                    if (element.hasClass('fc-day-grid-event')) {
                        element.data('content', info.event.extendedProps.description);
                        element.data('placement', 'top');
                        KTApp.initPopover(element);
                    } else if (element.hasClass('fc-time-grid-event')) {
                        element.find('.fc-title').append('<div class="fc-description">' + info.event.extendedProps.description + '</div>');
                    } else if (element.find('.fc-list-item-title').lenght !== 0) {
                        element.find('.fc-list-item-title').append('<div class="fc-description">' + info.event.extendedProps.description + '</div>');
                    }
                }
            }
        });

        calendar.render();
    }


    return {
        init: function() {
            events();
        }
    };
}();

jQuery(document).ready(function() {
    $('input[name=date_from]').datepicker({
        rtl: KTUtil.isRTL(),
        orientation: "bottom left",
        todayHighlight: true,
        // templates: arrows,
        format: "yyyy-mm-dd"
    });
    $('input[name=date_to]').datepicker({
        rtl: KTUtil.isRTL(),
        orientation: "bottom left",
        todayHighlight: true,
        // templates: arrows,
        format: "yyyy-mm-dd"
    });
    $("#btn-search").on("click", function(){
        $("#kt_form").submit();
    });
    KTCalendarExternalEvents.init();
});

/******/ })()
;
//# sourceMappingURL=external-events.js.map