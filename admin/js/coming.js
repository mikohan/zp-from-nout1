jQuery(function ($) {
        // the date of the release - for example the below will set the release date to 
        // 1st of March (month is 0-based), 2100 at noon 12:00 o'clock
        // var release_date = new Date(2100, 2, 1, 12, 0, 0);
        // format is: new Date(year, month [, day, hour, minute, second, millisecond]);
        // (note that the month is 0-based).

        // for showcase purpose, we set the release date to be 10 days from the current time
        var release_date = new Date();
        release_date.setDate(release_date.getDate() + 10);

        var release_unixtime_ms = release_date.getTime(),
            total_days = Math.floor((release_unixtime_ms - (new Date()).getTime()) / (24 * 60 * 60 * 1000)),
            update_timer = null,
            progress_days,
            progress_hours,
            progress_mins,
            progress_secs;

        // define a function to initialize the progressbars
        function init_progressbars() {
            // set the width and height of each progressbar to the width of their container
            $(".prg").each(function () {
                $(this)
                    .width($(this).parent().width())
                    .height($(this).parent().width());
            });

            // initialize the progressbar widgets
            progress_days = $("#progress_days").shieldProgressBar({
                min: 0,
                max: total_days,
                value: total_days,
                layout: "circular",
                layoutOptions: {
                    circular: {
                        borderColor: "white",
                        width: 30,
                        borderWidth: 3,
                        color: "#1E98E4",
                        backgroundColor: "white"
                    }
                },
                text: {
                    enabled: true,
                    template: '<span style="font-size:17px;color:white;">{0:n0} days</span> '
                },
                reversed: true
            }).swidget();

            progress_hours = $("#progress_hours").shieldProgressBar({
                min: 0,
                max: 24,
                value: 24,
                layout: "circular",
                layoutOptions: {
                    circular: {
                        borderColor: "white",
                        width: 23,
                        borderWidth: 3,
                        color: "#1E98E4",
                        backgroundColor: "white"
                    }
                },
                text: {
                    enabled: true,
                    template: '<span style="font-size:17px;color:white;">{0:n0} hours</span> '
                },
                reversed: true
            }).swidget();

            progress_mins = $("#progress_mins").shieldProgressBar({
                min: 0,
                max: 60,
                value: 60,
                layout: "circular",
                layoutOptions: {
                    circular: {
                        borderColor: "white",
                        width: 15,
                        borderWidth: 3,
                        color: "#1E98E4",
                        backgroundColor: "white"
                    }
                },
                text: {
                    enabled: true,
                    template: '<span style="font-size:17px;color:white;">{0:n0} min</span> '
                },
                reversed: true
            }).swidget();

            progress_secs = $("#progress_secs").shieldProgressBar({
                min: 0,
                max: 60,
                value: 60,
                layout: "circular",
                layoutOptions: {
                    circular: {
                        borderColor: "white",
                        width: 10,
                        borderWidth: 3,
                        color: "#1E98E4",
                        backgroundColor: "white"
                    }
                },
                text: {
                    enabled: true,
                    template: '<span style="font-size:17px;color:white;">{0:n0} sec</span> '
                },
                reversed: true
            }).swidget();

            // restart the update timer
            clearInterval(update_timer);
            update_timer = setInterval(update_progressbars, 300);
        }

        function update_progressbars() {
            var total_remaining_seconds = Math.floor((release_unixtime_ms - (new Date()).getTime()) / 1000),
                remaining_days = Math.floor(total_remaining_seconds / (24 * 60 * 60));

            total_remaining_seconds = total_remaining_seconds % (24 * 60 * 60);
            var remaining_hours = Math.floor(total_remaining_seconds / (60 * 60));

            total_remaining_seconds = total_remaining_seconds % (60 * 60);
            var remaining_mins = Math.floor(total_remaining_seconds / 60);
            var remaining_secs = total_remaining_seconds % 60;

            // update the progressbars if new values are different
            if (remaining_days != progress_days.value()) {
                progress_days.value(remaining_days);
            }
            if (remaining_hours != progress_hours.value()) {
                progress_hours.value(remaining_hours);
            }
            if (remaining_mins != progress_mins.value()) {
                progress_mins.value(remaining_mins);
            }
            if (remaining_secs != progress_secs.value()) {
                progress_secs.value(remaining_secs);
            }
        }

        // call this function whenever the window size changes
        $(window).on("resize", init_progressbars);

        // init the progressbars now
        init_progressbars();
    });
