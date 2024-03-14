(function ($) {
    "use strict";
    var mainApp = {

        main_fun: function () {


            // PRETTYPHOTO FUNCTION 

            $("a.preview").prettyPhoto({
                social_tools: false
            });


        },

        initialization: function () {
            mainApp.main_fun();

        }

    }


    $(document).ready(function () {
        mainApp.main_fun();
    });

}(jQuery));
