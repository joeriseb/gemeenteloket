var day_of_week = new Array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
var month_of_year = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

//  variabelen
var Calendar = new Date();

var year = Calendar.getFullYear();     // jaar
var month = Calendar.getMonth();    // maand
var today = Calendar.getDate();    // datum
var weekday = Calendar.getDay();    // Rdag

var DAYS_OF_WEEK = 7;    // "constant" dagen in week
var DAYS_OF_MONTH = 31;    // "constant" nummer voor maanden
var cal;    // 

Calendar.setDate(1);    // kalender start met 1
Calendar.setMonth(month);    // kalendermaand is now




var TR_start = '<TR>';
var TR_end = '</TR>';
var highlight_start = '<TD WIDTH="30"><TABLE CELLSPACING=0 BORDER=1 BGCOLOR=DEDEFF BORDERCOLOR=CCCCCC><TR><TD WIDTH=20><B><CENTER>';
var highlight_end = '</CENTER></TD></TR></TABLE></B>';
var TD_start = '<TD WIDTH="30"><CENTER>';
var TD_end = '</CENTER></TD>';

// CODE VOOR KALENDAR


cal = '<TABLE BORDER=1 CELLSPACING=0 CELLPADDING=0 BORDERCOLOR=BBBBBB><TR><TD>';
cal += '<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=2>' + TR_start;
cal += '<TD COLSPAN="' + DAYS_OF_WEEK + '" BGCOLOR="#EFEFEF"><CENTER><B>';
cal += month_of_year[month] + '   ' + year + '</B>' + TD_end + TR_end;
cal += TR_start;


// LOOP
for (index = 0; index < DAYS_OF_WEEK; index++) {

    // dag van week
    if (weekday == index)
        cal += TD_start + '<B>' + day_of_week[index] + '</B>' + TD_end;

    //
    else
        cal += TD_start + day_of_week[index] + TD_end;
}

cal += TD_end + TR_end;
cal += TR_start;

// vandaag
for (index = 0; index < Calendar.getDay(); index++)
    cal += TD_start + '  ' + TD_end;

// LOOP
for (index = 0; index < DAYS_OF_MONTH; index++) {
    if (Calendar.getDate() > index) {

        week_day = Calendar.getDay();

        if (week_day == 0)
            cal += TR_start;

        if (week_day != DAYS_OF_WEEK) {

            var day = Calendar.getDate();

            if (today == Calendar.getDate())
                cal += highlight_start + day + highlight_end + TD_end;

            else
                cal += TD_start + day + TD_end;
        }

        if (week_day == DAYS_OF_WEEK)
            cal += TR_end;
    }

    Calendar.setDate(Calendar.getDate() + 1);


    cal += '</TD></TR></TABLE></TABLE>';

    document.write(cal);

//  Einde van kalender -->



