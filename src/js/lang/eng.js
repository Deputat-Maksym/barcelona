        var sumbol = "€";

        function name_item(starn, finish) {

            return "Заказ трансфера: "+starn+" - "+finish;

        }

        function getCookie(name) {

            var matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));

            return matches ? decodeURIComponent(matches[1]) : "";

        }

        // function get_active_select_ref_1() {
        //
        //     var active_selecet_1 = $("#first_select option:selected").val();
        //     var active_selecet_2 = $("#second_select option:selected").val();
        //
        //     $("#first_select option, #second_select option, #first_select_2 option, #second_select_2 option").attr("selected", false).attr("disabled", false);
        //
        //     $("#first_select_2, #first_select").val(active_selecet_2);
        //     $("#second_select_2, #second_select").val(active_selecet_1);
        //
        //     $('#first_select [value="'+active_selecet_1+'"]').prop("disabled", true);
        //     $('#second_select [value="'+active_selecet_2+'"]').prop("disabled", true);
        //
        //     $('input[name="item_name"]').val(name_item($("#second_select option:selected").text(), $("#first_select option:selected").text()));
        //
        // }
        //

        // function get_active_select_1() {
        //
        //     var active_selecet_1 = $("#first_select option:selected").val();
        //     var active_selecet_2 = $("#second_select option:selected").val();
        //
        //     $("#first_select_2 option, #second_select_2 option").attr("selected", false).attr("disabled", false);
        //
        //     $('#first_select_2').val(active_selecet_1);
        //     $('#second_select_2').val(active_selecet_2);
        //
        //     $('#first_select [value="'+active_selecet_2+'"]').attr("disabled", true);
        //     $('#second_select [value="'+active_selecet_1+'"]').attr("disabled", true);
        //
        //     $('input[name="item_name"]').val(name_item($("#first_select option:selected").text(), $("#second_select_2 option:selected").text()));
        //
        // }
        //
        // function get_active_select_fix_1() {
        //
        //     var active_selecet_1 = $("#first_select option:selected").val();
        //     var active_selecet_2 = $("#second_select option:selected").val();
        //
        //     $("#first_select option, #second_select option, #first_select_2 option, #second_select_2 option").attr("selected", false).attr("disabled", false);
        //
        //     $('#first_select_2').val(active_selecet_1);
        //     $('#second_select_2').val(active_selecet_2);
        //
        //     $('#first_select [value="'+active_selecet_2+'"]').attr("disabled", true);
        //     $('#second_select [value="'+active_selecet_1+'"]').attr("disabled", true);
        //
        //     $('input[name="item_name"]').val(name_item($("#first_select option:selected").text(), $("#second_select_2 option:selected").text()));
        //
        // }
        //
        // function get_active_select_3() {
        //
        //     var active_selecet_5 = $("#first_select_2 option:selected").val();
        //     var active_selecet_6 = $("#second_select_2 option:selected").val();
        //
        //     $("#first_select option, #second_select option, #first_select_2 option, #second_select_2 option").attr("selected", false).attr("disabled", false);
        //
        //     $('#first_select').val(active_selecet_5);
        //     $('#second_select').val(active_selecet_6);
        //
        //     $("#first_select option, #second_select option, #first_select_2 option, #second_select_2 option").attr("selected", false).attr("disabled", false);
        //
        //     $('#first_select_2 [value="'+active_selecet_6+'"]').prop("disabled", true);
        //     $('#second_select_2 [value="'+active_selecet_5+'"]').prop("disabled", true);
        //
        //     $('input[name="item_name"]').val(name_item($("#first_select_2 option:selected").text(), $("#second_select_2 option:selected").text()));
        //
        // }


        function get_car_price() {

            var active_selecet_1 = $("#first_select_2 option:selected").text(); // From
            var active_selecet_2 = $("#second_select_2 option:selected").text(); // To

            if(active_selecet_1 == "Barcelona" && active_selecet_2 == "Sitges") {

                var price_arr = ["85"+sumbol, "105"+sumbol,"125"+sumbol];

            } else if(active_selecet_1 == "Barcelona" && active_selecet_2 == "Vilanova") {

                var price_arr = ["90"+sumbol, "100"+sumbol, "120"+sumbol];

            } else if(active_selecet_1 == "Barcelona" && active_selecet_2 == "Cunit") {

                var price_arr = ["95"+sumbol, "105"+sumbol, "125"+sumbol];

            } else if(active_selecet_1 == "Barcelona" && active_selecet_2 == "Comarruga") {

                var price_arr = ["100"+sumbol, "120"+sumbol, "140"+sumbol];

            } else if(active_selecet_1 == "Barcelona" && active_selecet_2 == "Calafell") {

                var price_arr = ["100"+sumbol, "120"+sumbol, "140"+sumbol];

            } else if(active_selecet_1 == "Barcelona" && active_selecet_2 == "Torredembarra") {

                var price_arr = ["120"+sumbol, "130"+sumbol, "150"+sumbol];

            } else if(active_selecet_1 == "Barcelona" && active_selecet_2 == "Salou") {

                var price_arr = ["140"+sumbol, "160"+sumbol, "180"+sumbol];

            } else if(active_selecet_1 == "Barcelona" && active_selecet_2 == "Cambrils") {

                var price_arr = ["140"+sumbol, "160"+sumbol, "180"+sumbol];

            } else if(active_selecet_1 == "Barcelona" && active_selecet_2 == "Port Aventura") {

                var price_arr = ["140"+sumbol, "160"+sumbol, "180"+sumbol];

            } else if(active_selecet_1 == "Barcelona" && active_selecet_2 == "Cruise Port") {

                var price_arr = ["50"+sumbol, "65"+sumbol, "80"+sumbol];

            } else if(active_selecet_1 == "Barcelona" && active_selecet_2 == "Badalona") {

                var price_arr = ["45"+sumbol, "55"+sumbol, "65"+sumbol];

            } else if(active_selecet_1 == "Barcelona" && active_selecet_2 == "Montcada i Reixac") {

                var price_arr = ["45"+sumbol, "55"+sumbol, "65"+sumbol];

            } else if(active_selecet_1 == "Barcelona" && active_selecet_2 == "Terrassa") {

                var price_arr = ["55"+sumbol, "75"+sumbol, "85"+sumbol];

            } else if(active_selecet_1 == "Barcelona" && active_selecet_2 == "Mataró") {

                var price_arr = ["60"+sumbol, "80"+sumbol, "90"+sumbol];

            } else if(active_selecet_1 == "Barcelona" && active_selecet_2 == "La Roca Village") {

                var price_arr = ["60"+sumbol, "80"+sumbol, "100"+sumbol];

            } else if(active_selecet_1 == "Barcelona" && active_selecet_2 == "Calella") {

                var price_arr = ["85"+sumbol, "95"+sumbol, "115"+sumbol];

            } else if(active_selecet_1 == "Barcelona" && active_selecet_2 == "Malgrat de Mar") {

                var price_arr = ["95"+sumbol, "115"+sumbol, "135"+sumbol];

            } else if(active_selecet_1 == "Barcelona" && active_selecet_2 == "Santa Susanna") {

                var price_arr = ["85"+sumbol, "105"+sumbol, "125"+sumbol];

            } else if(active_selecet_1 == "Barcelona" && active_selecet_2 == "Lloret de Mar") {

                var price_arr = ["105"+sumbol, "125"+sumbol, "145"+sumbol];

            } else if(active_selecet_1 == "Barcelona" && active_selecet_2 == "Tossa de Mar") {

                var price_arr = ["120"+sumbol, "140"+sumbol, "160"+sumbol];

            } else if(active_selecet_1 == "Barcelona" && active_selecet_2 == "Castell-Platja d'Aro") {

                var price_arr = ["125"+sumbol, "145"+sumbol, "165"+sumbol];

            } else if(active_selecet_1 == "Barcelona" && active_selecet_2 == "Girona Airport") {

                var price_arr = ["100"+sumbol, "120"+sumbol, "140"+sumbol];

            } else if(active_selecet_1 == "Barcelona" && active_selecet_2 == "Figueres") {

                var price_arr = ["160"+sumbol, "180"+sumbol, "200"+sumbol];

            }else if(active_selecet_1 == "Sitges" && active_selecet_2 == "Barcelona") {

                var price_arr = ["85"+sumbol, "105"+sumbol, "125"+sumbol];

            } else if(active_selecet_1 == "Vilanova" && active_selecet_2 == "Barcelona") {

                var price_arr = ["90"+sumbol, "100"+sumbol, "120"+sumbol];

            } else if(active_selecet_1 == "Cunit" && active_selecet_2 == "Barcelona") {

                var price_arr = ["95"+sumbol, "105"+sumbol, "125"+sumbol];

            } else if(active_selecet_1 == "Comarruga" && active_selecet_2 == "Barcelona") {

                var price_arr = ["100"+sumbol, "120"+sumbol, "140"+sumbol];

            } else if(active_selecet_1 == "Calafell" && active_selecet_2 == "Barcelona") {

                var price_arr = ["100"+sumbol, "120"+sumbol, "140"+sumbol];

            } else if(active_selecet_1 == "Torredembarra" && active_selecet_2 == "Barcelona") {

                var price_arr = ["120"+sumbol, "130"+sumbol, "150"+sumbol];

            } else if(active_selecet_1 == "Salou" && active_selecet_2 == "Barcelona") {

                var price_arr = ["140"+sumbol, "160"+sumbol, "180"+sumbol];

            } else if(active_selecet_1 == "Cambrils" && active_selecet_2 == "Barcelona") {

                var price_arr = ["140"+sumbol, "160"+sumbol, "180"+sumbol];

            } else if(active_selecet_1 == "Port Aventura" && active_selecet_2 == "Barcelona") {

                var price_arr = ["140"+sumbol, "160"+sumbol, "180"+sumbol];

            } else if(active_selecet_1 == "Cruise Port" && active_selecet_2 == "Barcelona") {

                var price_arr = ["50"+sumbol, "65"+sumbol, "80"+sumbol];

            } else if(active_selecet_1 == "Badalona" && active_selecet_2 == "Barcelona") {

                var price_arr = ["45"+sumbol, "55"+sumbol, "65"+sumbol];

            } else if(active_selecet_1 == "Montcada i Reixac" && active_selecet_2 == "Barcelona") {

                var price_arr = ["45"+sumbol, "55"+sumbol, "65"+sumbol];

            } else if(active_selecet_1 == "Terrassa" && active_selecet_2 == "Barcelona") {

                var price_arr = ["55"+sumbol, "75"+sumbol, "85"+sumbol];

            } else if(active_selecet_1 == "Mataró" && active_selecet_2 == "Barcelona") {

                var price_arr = ["50"+sumbol, "80"+sumbol, "90"+sumbol];

            } else if(active_selecet_1 == "La Roca Village" && active_selecet_2 == "Barcelona") {

                var price_arr = ["60"+sumbol, "80"+sumbol, "100"+sumbol];

            } else if(active_selecet_1 == "Calella" && active_selecet_2 == "Barcelona") {

                var price_arr = ["75"+sumbol, "95"+sumbol, "115"+sumbol];

            } else if(active_selecet_1 == "Malgrat de Mar" && active_selecet_2 == "Barcelona") {

                var price_arr = ["95"+sumbol, "115"+sumbol, "135"+sumbol];

            } else if(active_selecet_1 == "Santa Susanna" && active_selecet_2 == "Barcelona") {

                var price_arr = ["85"+sumbol, "105"+sumbol, "125"+sumbol];

            } else if(active_selecet_1 == "Lloret de Mar" && active_selecet_2 == "Barcelona") {

                var price_arr = ["105"+sumbol, "125"+sumbol, "145"+sumbol];

            } else if(active_selecet_1 == "Tossa de Mar" && active_selecet_2 == "Barcelona") {

                var price_arr = ["120"+sumbol, "140"+sumbol, "160"+sumbol];

            } else if(active_selecet_1 == "Castell-Platja d'Aro" && active_selecet_2 == "Barcelona") {

                var price_arr = ["125"+sumbol, "145"+sumbol, "165"+sumbol];

            } else if(active_selecet_1 == "Girona Airport" && active_selecet_2 == "Barcelona") {

                var price_arr = ["100"+sumbol, "120"+sumbol, "140"+sumbol];

            } else if(active_selecet_1 == "Figueres" && active_selecet_2 == "Barcelona") {

                var price_arr = ["160"+sumbol, "180"+sumbol, "200"+sumbol];

            } else if(active_selecet_1 == "El Prat Airport" && active_selecet_2 == "Barcelona") {

                var price_arr = ["40"+sumbol, "55"+sumbol, "70"+sumbol];

            } else if(active_selecet_1 == "El Prat Airport" && active_selecet_2 == "Sitges") {

                var price_arr = ["75"+sumbol, "95"+sumbol, "115"+sumbol];

            } else if(active_selecet_1 == "El Prat Airport" && active_selecet_2 == "Vilanova") {

                var price_arr = ["80"+sumbol, "90"+sumbol, "110"+sumbol];

            } else if(active_selecet_1 == "El Prat Airport" && active_selecet_2 == "Cunit") {

                var price_arr = ["85"+sumbol, "95"+sumbol, "115"+sumbol];

            } else if(active_selecet_1 == "El Prat Airport" && active_selecet_2 == "Comarruga") {

                var price_arr = ["90"+sumbol, "110"+sumbol, "130"+sumbol];

            } else if(active_selecet_1 == "El Prat Airport" && active_selecet_2 == "Calafell") {

                var price_arr = ["90"+sumbol, "110"+sumbol, "130"+sumbol];

            } else if(active_selecet_1 == "El Prat Airport" && active_selecet_2 == "Torredembarra") {

                var price_arr = ["110"+sumbol, "120"+sumbol, "140"+sumbol];

            } else if(active_selecet_1 == "El Prat Airport" && active_selecet_2 == "Salou") {

                var price_arr = ["130"+sumbol, "150"+sumbol, "170"+sumbol];

            } else if(active_selecet_1 == "El Prat Airport" && active_selecet_2 == "Cambrils") {

                var price_arr = ["130"+sumbol, "150"+sumbol, "170"+sumbol];

            } else if(active_selecet_1 == "El Prat Airport" && active_selecet_2 == "Port Aventura") {

                var price_arr = ["130"+sumbol, "150"+sumbol, "170"+sumbol];

            } else if(active_selecet_1 == "El Prat Airport" && active_selecet_2 == "Cruise Port") {

                var price_arr = ["40"+sumbol, "55"+sumbol, "70"+sumbol];

            } else if(active_selecet_1 == "El Prat Airport" && active_selecet_2 == "Badalona") {

                var price_arr = ["50"+sumbol, "60"+sumbol, "70"+sumbol];

            } else if(active_selecet_1 == "El Prat Airport" && active_selecet_2 == "Montcada i Reixac") {

                var price_arr = ["50"+sumbol, "60"+sumbol, "70"+sumbol];

            } else if(active_selecet_1 == "El Prat Airport" && active_selecet_2 == "Terrassa") {

                var price_arr = ["60"+sumbol, "80"+sumbol, "90"+sumbol];

            } else if(active_selecet_1 == "El Prat Airport" && active_selecet_2 == "Mataró") {

                var price_arr = ["65"+sumbol, "85"+sumbol, "95"+sumbol];

            } else if(active_selecet_1 == "El Prat Airport" && active_selecet_2 == "La Roca Village") {

                var price_arr = ["65"+sumbol, "85"+sumbol, "105"+sumbol];

            } else if(active_selecet_1 == "El Prat Airport" && active_selecet_2 == "Calella") {

                var price_arr = ["80"+sumbol, "100"+sumbol, "120"+sumbol];

            } else if(active_selecet_1 == "El Prat Airport" && active_selecet_2 == "Malgrat de Mar") {

                var price_arr = ["100"+sumbol, "120"+sumbol, "140"+sumbol];

            } else if(active_selecet_1 == "El Prat Airport" && active_selecet_2 == "Santa Susanna") {

                var price_arr = ["90"+sumbol, "110"+sumbol, "130"+sumbol];

            } else if(active_selecet_1 == "El Prat Airport" && active_selecet_2 == "Lloret de Mar") {

                var price_arr = ["110"+sumbol, "130"+sumbol, "150"+sumbol];

            } else if(active_selecet_1 == "El Prat Airport" && active_selecet_2 == "Tossa de Mar") {

                var price_arr = ["125"+sumbol, "145"+sumbol, "165"+sumbol];

            } else if(active_selecet_1 == "El Prat Airport" && active_selecet_2 == "Castell-Platja d'Aro") {

                var price_arr = ["130"+sumbol, "150"+sumbol, "170"+sumbol];

            } else if(active_selecet_1 == "El Prat Airport" && active_selecet_2 == "Girona Airport") {

                var price_arr = ["105"+sumbol, "125"+sumbol, "145"+sumbol];

            } else if(active_selecet_1 == "El Prat Airport" && active_selecet_2 == "Figueres") {

                var price_arr = ["165"+sumbol, "185"+sumbol, "205"+sumbol];

            } else if(active_selecet_1 == "Barcelona" && active_selecet_2 == "El Prat Airport") {

                var price_arr = ["40"+sumbol, "55"+sumbol, "70"+sumbol];

            } else if(active_selecet_1 == "Sitges" && active_selecet_2 == "El Prat Airport") {

                var price_arr = ["75"+sumbol, "95"+sumbol, "115"+sumbol];

            } else if(active_selecet_1 == "Vilanova" && active_selecet_2 == "El Prat Airport") {

                var price_arr = ["80"+sumbol, "90"+sumbol, "110"+sumbol];

            } else if(active_selecet_1 == "Cunit" && active_selecet_2 == "El Prat Airport") {

                var price_arr = ["85"+sumbol, "95"+sumbol, "115"+sumbol];

            } else if(active_selecet_1 == "Comarruga" && active_selecet_2 == "El Prat Airport") {

                var price_arr = ["90"+sumbol, "110"+sumbol, "130"+sumbol];

            } else if(active_selecet_1 == "Calafell" && active_selecet_2 == "El Prat Airport") {

                var price_arr = ["90"+sumbol, "110"+sumbol, "130"+sumbol];

            } else if(active_selecet_1 == "Torredembarra" && active_selecet_2 == "El Prat Airport") {

                var price_arr = ["110"+sumbol, "120"+sumbol, "140"+sumbol];

            } else if(active_selecet_1 == "Salou" && active_selecet_2 == "El Prat Airport") {

                var price_arr = ["130"+sumbol, "150"+sumbol, "170"+sumbol];

            } else if(active_selecet_1 == "Cambrils" && active_selecet_2 == "El Prat Airport") {

                var price_arr = ["130"+sumbol, "150"+sumbol, "170"+sumbol];

            } else if(active_selecet_1 == "Port Aventura" && active_selecet_2 == "El Prat Airport") {

                var price_arr = ["130"+sumbol, "150"+sumbol, "170"+sumbol];

            } else if(active_selecet_1 == "Cruise Port" && active_selecet_2 == "El Prat Airport") {

                var price_arr = ["40"+sumbol, "55"+sumbol, "70"+sumbol];

            } else if(active_selecet_1 == "Badalona" && active_selecet_2 == "El Prat Airport") {

                var price_arr = ["50"+sumbol, "60"+sumbol, "70"+sumbol];

            } else if(active_selecet_1 == "Montcada i Reixac" && active_selecet_2 == "El Prat Airport") {

                var price_arr = ["50"+sumbol, "60"+sumbol, "70"+sumbol];

            } else if(active_selecet_1 == "Terrassa" && active_selecet_2 == "El Prat Airport") {

                var price_arr = ["60"+sumbol, "80"+sumbol, "90"+sumbol];

            } else if(active_selecet_1 == "Mataró" && active_selecet_2 == "El Prat Airport") {

                var price_arr = ["65"+sumbol, "85"+sumbol, "95"+sumbol];

            } else if(active_selecet_1 == "La Roca Village" && active_selecet_2 == "El Prat Airport") {

                var price_arr = ["65"+sumbol, "85"+sumbol, "105"+sumbol];

            } else if(active_selecet_1 == "Calella" && active_selecet_2 == "El Prat Airport") {

                var price_arr = ["80"+sumbol, "100"+sumbol, "120"+sumbol];

            } else if(active_selecet_1 == "Malgrat de Mar" && active_selecet_2 == "El Prat Airport") {

                var price_arr = ["100"+sumbol, "120"+sumbol, "140"+sumbol];

            } else if(active_selecet_1 == "Santa Susanna" && active_selecet_2 == "El Prat Airport") {

                var price_arr = ["90"+sumbol, "110"+sumbol, "130"+sumbol];

            } else if(active_selecet_1 == "Lloret de Mar" && active_selecet_2 == "El Prat Airport") {

                var price_arr = ["110"+sumbol, "130"+sumbol, "150"+sumbol];

            } else if(active_selecet_1 == "Tossa de Mar" && active_selecet_2 == "El Prat Airport") {

                var price_arr = ["125"+sumbol, "145"+sumbol, "165"+sumbol];

            } else if(active_selecet_1 == "Castell-Platja d'Aro" && active_selecet_2 == "El Prat Airport") {

                var price_arr = ["130"+sumbol, "150"+sumbol, "170"+sumbol];

            } else if(active_selecet_1 == "Girona Airport" && active_selecet_2 == "El Prat Airport") {

                var price_arr = ["105"+sumbol, "125"+sumbol, "145"+sumbol];

            } else if(active_selecet_1 == "Figueres" && active_selecet_2 == "El Prat Airport") {

                var price_arr = ["165"+sumbol, "185"+sumbol, "205"+sumbol];

            } else {

                var price_arr = ["Price on request", "Price on request", "Price on request", "Price on request", "Price on request"];
                $(".trans-price").css('display', 'none');

                $(".put_price_car .fl:nth-of-type(1) label .no-price").html(price_arr[0]).css('display', 'flex');
                $(".put_price_car .fl:nth-of-type(2) label .no-price").html(price_arr[1]).css('display', 'flex');
                $(".put_price_car .fl:nth-of-type(3) label .no-price").html(price_arr[2]).css('display', 'flex');
                $(".put_price_car .fl:nth-of-type(4) label .no-price").html(price_arr[3]).css('display', 'flex');
                $(".put_price_car .fl:nth-of-type(5) label .no-price").html(price_arr[4]).css('display', 'flex');

                return false;
            }

            $(".no-price").css('display', 'none');

            $(".put_price_car .fl:nth-of-type(1) label .trans-price").html(price_arr[0]).css('display', 'block');
            $(".put_price_car .fl:nth-of-type(2) label .trans-price").html(price_arr[1]).css('display', 'block');
            $(".put_price_car .fl:nth-of-type(3) label .trans-price").html(price_arr[2]).css('display', 'block');
            $(".put_price_car .fl:nth-of-type(4) label .trans-price").html(price_arr[3]).css('display', 'block');
            $(".put_price_car .fl:nth-of-type(5) label .trans-price").html(price_arr[4]).css('display', 'block');

        }

        function back_transf() {

            if($(".checkbox2").prop("checked")) {

                var price_f = $('input[name="book-transfer"]:checked').parent(".fl").find(".trans-price").text();

                $('input[type=text].sitebg2').val(price_f);

                $(".info_for_back_transf").show();

            } else {

                $('input[type=text].sitebg2').val('0€');

                $(".info_for_back_transf").hide();

            }

        }

        $(document).ready(function() {

            // get_active_select_1();
            //
            // $(".one_ref").on("click", function() {
            //
            //     get_active_select_ref_1();
            //
            // });
            //
            // $(document).on("change", "#first_select, #second_select", function() {
            //
            //     get_active_select_fix_1();
            //
            // });

            // $(document).on("click", ".run_price", function() {
            //
            //     get_active_select_fix_1();
            //
            // });

            $(document).on("change", "#first_select_2, #second_select_2", function() {

                // get_active_select_3();

                get_car_price();

                back_transf();

            });

            $(document).on("click", ".bron_trnf, .order, .run_price", function() {

                // get_active_select_3();

                get_car_price();

                back_transf();

            });

            $(document).on("click", ".first_step", function() {

                if($('input[name="book-transfer"]:checked').length == 0) {

                    $(".erro_trnsf").show();

                    setTimeout(function() {

                        $(".erro_trnsf").hide();

                    }, 4000);

                } else {

                    $(this).hide();
                    $(".form_hide").show();

                    setTimeout(function() {

                       $("#myModal2 .modal-dialog").animate({scrollTop: $(".transfer-option").position().top + 20}, 500);

                    }, 500);

                }

            });

            $(document).on("click", 'input[name="book-transfer"]', function() {

                $(".erro_trnsf").hide();

                back_transf();

            });

            $(document).on("click change", '#first_select_2, #second_select_2, .first_step, .checkbox2, .checkbox, #nump_priv, input[name="book-transfer"], .run_price', function() {

                var dop_clock = $(".sitebg").val().replace(/[^0-9]/gim, "");
                var back_transf = $(".sitebg2").val().replace(/[^0-9]/gim, "");
                var numb_priv = $("#nump_priv option:selected").text() * 10;
                var price_transf = $('input[name="book-transfer"]:checked').parent(".fl").find(".trans-price").text().replace(/[^0-9]/gim, "");

                var itog = Number(dop_clock) + Number(back_transf) + Number(numb_priv) + Number(price_transf);


                if(back_transf == "" || price_transf == "") {

                  var tran = " трансфер";

                } else {

                  var tran = "";

                }

                if(price_transf == "") {

                    price_transf = " + цена за прямой";

                } else {

                    price_transf = "";

                }

                if(back_transf == "") {

                    back_transf = " <br>и обратный";

                } else {

                    back_transf = "";

                }

                $(".unitCount").html(itog+sumbol+price_transf+back_transf+tran);

                if(itog != 0 && price_transf == "" && back_transf == "" && tran == "") {

                    $('input[name="amount"]').val(itog);

                } else {

                    $('input[name="amount"]').val("");

                }

            });

            $(document).on("click", '.final_order_pay', function() {

                if($('input[name="amount"]').val() == "") {

                    $(".result").html('<div style="font-size: 20px;color: red">К сожалению, из-за неточной цены Вам доступно оформление заказа<br>только с оплатой на месте.</div>');

                    setTimeout(function() {

                        $(".result").html("");

                    }, 4000);


                } else if(getCookie("dle_hash") == "") {

                    $(".result").html('<div style="font-size: 20px;color: red">Произошла ошибка оформления заказа. Пожалуйста, повторите попытку позже, смените тип оплаты или свяжитесь к нашей техническо поддержкой.</div>');

                    setTimeout(function() {

                        $(".result").html("");

                    }, 4000);


                } else {

                    var number_text = $(".number_text").val();
                    var data_text_1 = $(".data_text_1").val();
                    var time_text_1 = $(".time_text_1").val();
                    var sitebg = $(".sitebg").val().replace(/[^0-9]/gim, ""); // Доп час
                    var place_text_1 = $(".place_text_1").val();
                    var passanger = $(".passanger").val().replace(/[^0-9]/gim, ""); // Пасажиров
                    var stuff = $(".stuff").val().replace(/[^0-9]/gim, ""); // Багаж
                    var nump_priv = $("#nump_priv option:selected").text(); // Остановки
                    var sitebg2 = $(".sitebg2").val().replace(/[^0-9]/gim, ""); // Обратный трансфер
                    var carSeats = $(".car-seats").val().replace(/[^0-9]/gim, "");
                    var booster = $(".booster").val().replace(/[^0-9]/gim, "");
                    var place_text_2 = $(".place_text_2").val();
                    var data_text_2 = $(".data_text_2").val();
                    var time_text_2 = $(".time_text_2").val();
                    var name_text = $(".name_text").val();
                    var lastname_text = $(".lastname_text").val();
                    var phone_text = $(".phone_text").val();
                    var email_text = $(".email_text").val();
                    var st = $("#first_select_2 option:selected").text();
                    var en = $("#second_select_2 option:selected").text();
                    var price_transf = $('input[name="book-transfer"]:checked').parent(".fl").find(".trans-price").text();
                    var car_name = $('input[name="book-transfer"]:checked').parent(".fl").find(".person-val").text();
                    var itog = $(".unitCount").text();

                    $.ajax({

                        url: "/mail-eng-pay",
                        type: "post",

                        data: {
                            "number_text": number_text,
                            "data_text_1": data_text_1,
                            "time_text_1": time_text_1,
                            "sitebg": sitebg,
                            "place_text_1": place_text_1,
                            "passanger": passanger,
                            "stuff": stuff,
                            "nump_priv": nump_priv,
                            "sitebg2": sitebg2,
                            "car_seats": carSeats,
                            "booster": booster,
                            "place_text_2": place_text_2,
                            "data_text_2": data_text_2,
                            "time_text_2": time_text_2,
                            "name_text": name_text,
                            "lastname_text": lastname_text,
                            "phone_text": phone_text,
                            "email_text": email_text,
                            "dle_hash": getCookie("dle_hash"),
                            "st": st,
                            "en": en,
                            "price_transf": price_transf,
                            "car_name": car_name,
                            "itog": itog
                        },

                        success: function(data) {

                            $(".result").html(data);

                        }

                    });


                }

            });


            $(".final_order_nopay").on("click", function() {

                var number_text = $(".number_text").val();
                var data_text_1 = $(".data_text_1").val();
                var time_text_1 = $(".time_text_1").val();
                var sitebg = $(".sitebg").val().replace(/[^0-9]/gim, ""); // Доп час
                var place_text_1 = $(".place_text_1").val();
                var passanger = $(".passanger").val().replace(/[^0-9]/gim, ""); // Пасажиров
                var stuff = $(".stuff").val().replace(/[^0-9]/gim, ""); // Багаж
                var nump_priv = $("#nump_priv option:selected").text(); // Остановки
                var sitebg2 = $(".sitebg2").val().replace(/[^0-9]/gim, ""); // Обратный трансфер
                var carSeats = $(".car-seats").val().replace(/[^0-9]/gim, "");
                var booster = $(".booster").val().replace(/[^0-9]/gim, "");
                var place_text_2 = $(".place_text_2").val();
                var data_text_2 = $(".data_text_2").val();
                var time_text_2 = $(".time_text_2").val();
                var name_text = $(".name_text").val();
                var lastname_text = $(".lastname_text").val();
                var phone_text = $(".phone_text").val();
                var email_text = $(".email_text").val();
                var st = $("#first_select_2 option:selected").text();
                var en = $("#second_select_2 option:selected").text();
                var price_transf = $('input[name="book-transfer"]:checked').parent(".fl").find(".trans-price").text();
                var car_name = $('input[name="book-transfer"]:checked').parent(".fl").find(".person-val").text();
                var itog = $(".unitCount").text();

                $.ajax({

                    url: "/mail-eng",
                    type: "post",

                    data: {
                        "number_text": number_text,
                        "data_text_1": data_text_1,
                        "time_text_1": time_text_1,
                        "sitebg": sitebg,
                        "place_text_1": place_text_1,
                        "passanger": passanger,
                        "stuff": stuff,
                        "nump_priv": nump_priv,
                        "sitebg2": sitebg2,
                        "car_seats": carSeats,
                        "booster": booster,
                        "place_text_2": place_text_2,
                        "data_text_2": data_text_2,
                        "time_text_2": time_text_2,
                        "name_text": name_text,
                        "lastname_text": lastname_text,
                        "phone_text": phone_text,
                        "email_text": email_text,
                        "st": st,
                        "en": en,
                        "price_transf": price_transf,
                        "car_name": car_name,
                        "itog": itog
                    },

                    success: function(data) {

                        $(".result").html(data);

                    }

                });

            });

            $(".smpl-order").on("click", function() {

                var inputsField = $(this).parents('form'),
                    nameClient = inputsField.find('.name_client').val(),
                    phoneNumber = inputsField.find('.phone_number').val(),
                    commentsText = inputsField.find('.comments_text').val(),
                    orderType = $(this).parents('.simple-form').find('.send-title').text(),
                    formName = inputsField.attr('name');

                $.ajax({

                    url: "/mail-smpl-eng",
                    type: "post",

                    data: {
                        "name_client": nameClient,
                        "phone_number": phoneNumber,
                        "comments_text": commentsText,
                        "order_type": orderType,
                        "form_name": formName
                    },

                    success: function(data) {

                        $(".result").html(data);

                    }

                });

            });

            $("body").append('<form action="https://www.paypal.com/cgi-bin/webscr" method="post"><input type="hidden" name="cmd" value="_xclick" /><input type="hidden" name="charset" value="utf-8" /><input type="hidden" name="business" value="igorkapabarcelona@gmail.com" /><input type="hidden" name="return" value="https://barcelonadriver.com/?pay=success" /><input type="hidden" name="currency_code" value="EUR" /><input type="hidden" name="cancel_return" value="https://barcelonadriver.com/?pay=fail" /><input type="hidden" name="notify_url" value="https://barcelonadriver.com/paypal_result.php" /><input type="hidden" name="undefined_quantity" value="1" /><input type="hidden" name="custom" value="'+getCookie("dle_hash")+'||ru" /><input type="hidden" name="rm" value="POST" /><input type="hidden" name="no_note" value="1" /><input type="hidden" name="no_shipping" value="1" /><input type="hidden" name="lc" value="RU"><input type="hidden" name="item_name" value="" /><input type="hidden" name="amount" value="" /></form>');

            var pattern = /success/;
            var exists = pattern.test(window.location.search);

            if(exists) {

                $(".myModal_succes").addClass("modal-open");
                $('html').addClass('hidden');
                window.history.replaceState({}, document.title, window.location.pathname);

            }

            var pattern_1 = /fail/;
            var exists_1 = pattern_1.test(window.location.search);

            if(exists_1) {

                $(".myModal_fail").addClass("modal-open");
                $('html').addClass('hidden');
                window.history.replaceState({}, document.title, window.location.pathname);

            }

        });
