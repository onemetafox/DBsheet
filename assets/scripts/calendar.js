/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!******************************************************************!*\
  !*** ../demo1/src/js/pages/features/calendar/external-events.js ***!
  \******************************************************************/

var KTCalendarExternalEvents = function() {

    var initExternalEvents = function() {
        $('#kt_calendar_external_events .fc-draggable-handle').each(function() {
            // store data so the calendar knows to render an event upon drop
            $(this).data('event', {
                title: $.trim($(this).text()), // use the element's text as the event title
                stick: true, // maintain when user navigates (see docs on the renderEvent method)
                classNames: [$(this).data('color')],
                description: 'Lorem ipsum dolor eius mod tempor labore'
            });
        });
    }
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
                    title: row[i]['name'],
                    start: row[i]['date'],
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

        // var Draggable = FullCalendarInteraction.Draggable;

        // new Draggable(containerEl, {
        //     itemSelector: '.fc-draggable-handle',
        //     eventData: function(eventEl) {
        //         return $(eventEl).data('event');
        //     }
        // });
        $("#kt_calendar_external_events").on('click',function(){
            aler();
        })

        

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],

            isRTL: KTUtil.isRTL(),
            header: {
                // left: 'prev,next 今日',

                // center: 'title'
                // ,
                right: 'today'
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

            droppable: true, // this allows things to be dropped onto the calendar
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            navLinks: true,
            events : events,

            drop: function(arg) {
                // is the "remove after drop" checkbox checked?
                if ($('#kt_calendar_external_events_remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(arg.draggedEl).remove();
                }
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
        //main function to initiate the module
        init: function() {
            initExternalEvents();
            events();
            // initCalendar();
        }
    };
}();

jQuery(document).ready(function() {
    KTCalendarExternalEvents.init();
});

/******/ })()
;
//# sourceMappingURL=external-events.js.map