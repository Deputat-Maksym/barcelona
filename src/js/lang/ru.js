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
//     $('#first_select_2 [value="'+active_selecet_6+'"]').attr("disabled", true);
//     $('#second_select_2 [value="'+active_selecet_5+'"]').attr("disabled", true);
//
//     $('input[name="item_name"]').val(name_item($("#first_select_2 option:selected").text(), $("#second_select_2 option:selected").text()));
//
// }


function get_car_price() {

    var active_selecet_1 = $("#first_select_2 option:selected").text(); // Откуда
    var active_selecet_2 = $("#second_select_2 option:selected").text(); // Куда

    $('input[name="item_name"]').val(name_item(active_selecet_1, active_selecet_2));

    if(active_selecet_1 == "Барселона" && active_selecet_2 == "Ситжес") {

        var price_arr = ["75"+sumbol, "95"+sumbol,"115"+sumbol, "175"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Виланова") {

        var price_arr = ["85"+sumbol, "95"+sumbol, "115"+sumbol, "175"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Кунит") {

        var price_arr = ["90"+sumbol, "100"+sumbol, "120"+sumbol, "180"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Кома-Руга") {

        var price_arr = ["95"+sumbol, "110"+sumbol, "130"+sumbol, "190"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Калафель") {

        var price_arr = ["95"+sumbol, "105"+sumbol, "130"+sumbol, "190"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Торредембарра") {

        var price_arr = ["110"+sumbol, "120"+sumbol, "130"+sumbol, "190"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Салоу") {

        var price_arr = ["120"+sumbol, "150"+sumbol, "170"+sumbol, "230"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Камбрильс") {

        var price_arr = ["125"+sumbol, "150"+sumbol, "170"+sumbol, "230"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Порт Авентура") {

        var price_arr = ["125"+sumbol, "145"+sumbol, "170"+sumbol, "230"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Круизный Порт") {

        var price_arr = ["45"+sumbol, "55"+sumbol, "70"+sumbol, "135"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Бадалона") {

        var price_arr = ["40"+sumbol, "50"+sumbol, "65"+sumbol, "135"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Монкада-и-Решак") {

        var price_arr = ["45"+sumbol, "55"+sumbol, "65"+sumbol, "130"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Террасса") {

        var price_arr = ["55"+sumbol, "75"+sumbol, "85"+sumbol, "145"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Матаро") {

        var price_arr = ["60"+sumbol, "80"+sumbol, "90"+sumbol, "195"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Ла Рока Виладж") {

        var price_arr = ["60"+sumbol, "80"+sumbol, "100"+sumbol, "160"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Калелья") {

        var price_arr = ["70"+sumbol, "90"+sumbol, "110"+sumbol, "170"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Мальграт-де-Мар") {

        var price_arr = ["90"+sumbol, "110"+sumbol, "125"+sumbol, "185"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Санта-Сусанна") {

        var price_arr = ["85"+sumbol, "100"+sumbol, "120"+sumbol, "180"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Льорет-де-Мар") {

        var price_arr = ["100"+sumbol, "115"+sumbol, "135"+sumbol, "280"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Тосса-де-Мар") {

        var price_arr = ["115"+sumbol, "135"+sumbol, "150"+sumbol, "220"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Кастель-Пладжа-де-Аро") {

        var price_arr = ["115"+sumbol, "135"+sumbol, "155"+sumbol, "230"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Аэропорт Жирона") {

        var price_arr = ["100"+sumbol, "120"+sumbol, "140"+sumbol, "230"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Фигерас") {

        var price_arr = ["155"+sumbol, "170"+sumbol, "190"+sumbol, "260"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Андорра Ла-Велья") {

        var price_arr = ["205"+sumbol, "225"+sumbol, "260"+sumbol, "400"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Escaldes-Engordany") {

        var price_arr = ["215"+sumbol, "245"+sumbol, "265"+sumbol, "410"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Encamp") {

        var price_arr = ["220"+sumbol, "250"+sumbol, "270"+sumbol, "415"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "La Massana") {

        var price_arr = ["215"+sumbol, "245"+sumbol, "275"+sumbol, "420"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "La Canillo") {

        var price_arr = ["225"+sumbol, "255"+sumbol, "285"+sumbol, "430"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "La El Tarter") {

        var price_arr = ["235"+sumbol, "265"+sumbol, "285"+sumbol, "430"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Soldeu") {

        var price_arr = ["235"+sumbol, "265"+sumbol, "295"+sumbol, "440"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "GrauRoig") {

        var price_arr = ["245"+sumbol, "270"+sumbol, "295"+sumbol, "440"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "PasdelaCasa") {

        var price_arr = ["255"+sumbol, "275"+sumbol, "295"+sumbol, "440"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Arinsal") {

        var price_arr = ["225"+sumbol, "255"+sumbol, "295"+sumbol, "440"+sumbol];

    }else if(active_selecet_1 == "Ситжес" && active_selecet_2 == "Барселона") {

        var price_arr = ["74"+sumbol, "95"+sumbol, "115"+sumbol, "175"+sumbol];

    } else if(active_selecet_1 == "Виланова" && active_selecet_2 == "Барселона") {

        var price_arr = ["85"+sumbol, "95"+sumbol, "115"+sumbol, "175"+sumbol];

    } else if(active_selecet_1 == "Кунит" && active_selecet_2 == "Барселона") {

        var price_arr = ["90"+sumbol, "100"+sumbol, "120"+sumbol, "180"+sumbol];

    } else if(active_selecet_1 == "Кома-Руга" && active_selecet_2 == "Барселона") {

        var price_arr = ["95"+sumbol, "110"+sumbol, "130"+sumbol, "190"+sumbol];

    } else if(active_selecet_1 == "Калафель" && active_selecet_2 == "Барселона") {

        var price_arr = ["95"+sumbol, "105"+sumbol, "130"+sumbol, "190"+sumbol];

    } else if(active_selecet_1 == "Торредембарра" && active_selecet_2 == "Барселона") {

        var price_arr = ["110"+sumbol, "120"+sumbol, "130"+sumbol, "190"+sumbol];

    } else if(active_selecet_1 == "Салоу" && active_selecet_2 == "Барселона") {

        var price_arr = ["120"+sumbol, "150"+sumbol, "170"+sumbol, "230"+sumbol];

    } else if(active_selecet_1 == "Камбрильс" && active_selecet_2 == "Барселона") {

        var price_arr = ["125"+sumbol, "150"+sumbol, "170"+sumbol, "230"+sumbol];

    } else if(active_selecet_1 == "Порт Авентура" && active_selecet_2 == "Барселона") {

        var price_arr = ["125"+sumbol, "145"+sumbol, "170"+sumbol, "230"+sumbol];

    } else if(active_selecet_1 == "Круизный Порт" && active_selecet_2 == "Барселона") {

        var price_arr = ["45"+sumbol, "55"+sumbol, "70"+sumbol, "135"+sumbol];

    } else if(active_selecet_1 == "Бадалона" && active_selecet_2 == "Барселона") {

        var price_arr = ["40"+sumbol, "50"+sumbol, "65"+sumbol, "135"+sumbol];

    } else if(active_selecet_1 == "Монкада-и-Решак" && active_selecet_2 == "Барселона") {

        var price_arr = ["45"+sumbol, "55"+sumbol, "65"+sumbol, "130"+sumbol];

    } else if(active_selecet_1 == "Террасса" && active_selecet_2 == "Барселона") {

        var price_arr = ["55"+sumbol, "75"+sumbol, "85"+sumbol, "145"+sumbol];

    } else if(active_selecet_1 == "Матаро" && active_selecet_2 == "Барселона") {

        var price_arr = ["60"+sumbol, "80"+sumbol, "90"+sumbol, "195"+sumbol];

    } else if(active_selecet_1 == "Ла Рока Виладж" && active_selecet_2 == "Барселона") {

        var price_arr = ["60"+sumbol, "80"+sumbol, "100"+sumbol, "160"+sumbol];

    } else if(active_selecet_1 == "Калелья" && active_selecet_2 == "Барселона") {

        var price_arr = ["70"+sumbol, "90"+sumbol, "110"+sumbol, "170"+sumbol];

    } else if(active_selecet_1 == "Мальграт-де-Мар" && active_selecet_2 == "Барселона") {

        var price_arr = ["90"+sumbol, "110"+sumbol, "125"+sumbol, "185"+sumbol];

    } else if(active_selecet_1 == "Санта-Сусанна" && active_selecet_2 == "Барселона") {

        var price_arr = ["85"+sumbol, "100"+sumbol, "120"+sumbol, "180"+sumbol];

    } else if(active_selecet_1 == "Льорет-де-Мар" && active_selecet_2 == "Барселона") {

        var price_arr = ["100"+sumbol, "115"+sumbol, "135"+sumbol, "280"+sumbol];

    } else if(active_selecet_1 == "Тосса-де-Мар" && active_selecet_2 == "Барселона") {

        var price_arr = ["115"+sumbol, "135"+sumbol, "150"+sumbol, "220"+sumbol];

    } else if(active_selecet_1 == "Кастель-Пладжа-де-Аро" && active_selecet_2 == "Барселона") {

        var price_arr = ["115"+sumbol, "135"+sumbol, "155"+sumbol, "230"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Жирона" && active_selecet_2 == "Барселона") {

        var price_arr = ["100"+sumbol, "120"+sumbol, "140"+sumbol, "230"+sumbol];

    } else if(active_selecet_1 == "Фигерас" && active_selecet_2 == "Барселона") {

        var price_arr = ["155"+sumbol, "170"+sumbol, "190"+sumbol, "260"+sumbol];

    } else if(active_selecet_1 == "Андорра Ла-Велья" && active_selecet_2 == "Барселона") {

        var price_arr = ["205"+sumbol, "225"+sumbol, "260"+sumbol, "410"+sumbol];

    } else if(active_selecet_1 == "Escaldes-Engordany" && active_selecet_2 == "Барселона") {

        var price_arr = ["215"+sumbol, "245"+sumbol, "265"+sumbol, "410"+sumbol];

    } else if(active_selecet_1 == "Encamp" && active_selecet_2 == "Барселона") {

        var price_arr = ["220"+sumbol, "250"+sumbol, "270"+sumbol, "415"+sumbol];

    } else if(active_selecet_1 == "La Massana" && active_selecet_2 == "Барселона") {

        var price_arr = ["215"+sumbol, "245"+sumbol, "275"+sumbol, "420"+sumbol];

    } else if(active_selecet_1 == "La Canillo" && active_selecet_2 == "Барселона") {

        var price_arr = ["225"+sumbol, "255"+sumbol, "285"+sumbol, "430"+sumbol];

    } else if(active_selecet_1 == "La El Tarter" && active_selecet_2 == "Барселона") {

        var price_arr = ["235"+sumbol, "265"+sumbol, "285"+sumbol, "430"+sumbol];

    } else if(active_selecet_1 == "Soldeu" && active_selecet_2 == "Барселона") {

        var price_arr = ["235"+sumbol, "265"+sumbol, "295"+sumbol, "440"+sumbol];

    } else if(active_selecet_1 == "GrauRoig" && active_selecet_2 == "Барселона") {

        var price_arr = ["245"+sumbol, "270"+sumbol, "295"+sumbol, "440"+sumbol];

    } else if(active_selecet_1 == "PasdelaCasa" && active_selecet_2 == "Барселона") {

        var price_arr = ["255"+sumbol, "275"+sumbol, "295"+sumbol, "440"+sumbol];

    } else if(active_selecet_1 == "Arinsal" && active_selecet_2 == "Барселона") {

        var price_arr = ["225"+sumbol, "255"+sumbol, "295"+sumbol, "440"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Барселона") {

        var price_arr = ["45"+sumbol, "65"+sumbol, "50"+sumbol, "135"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Ситжес") {

        var price_arr = ["70"+sumbol, "110"+sumbol, "110"+sumbol, "175"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Виланова") {

        var price_arr = ["80"+sumbol, "110"+sumbol, "110"+sumbol, "175"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Кунит") {

        var price_arr = ["85"+sumbol, "115"+sumbol, "115"+sumbol, "180"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Кома-Руга") {

        var price_arr = ["90"+sumbol, "125"+sumbol, "125"+sumbol, "190"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Калафель") {

        var price_arr = ["90"+sumbol, "125"+sumbol, "125"+sumbol, "190"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Торредембарра") {

        var price_arr = ["105"+sumbol, "125"+sumbol, "125"+sumbol, "190"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Салоу") {

        var price_arr = ["115"+sumbol, "165"+sumbol, "165"+sumbol, "230"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Камбрильс") {

        var price_arr = ["120"+sumbol, "165"+sumbol, "165"+sumbol, "230"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Порт Авентура") {

        var price_arr = ["120"+sumbol, "160"+sumbol, "165"+sumbol, "230"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Круизный Порт") {

        var price_arr = ["45"+sumbol, "65"+sumbol, "50"+sumbol, "135"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Бадалона") {

        var price_arr = ["50"+sumbol, "70"+sumbol, "70"+sumbol, "135"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Монкада-и-Решак") {

        var price_arr = ["55"+sumbol, "70"+sumbol, "70"+sumbol, "130"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Террасса") {

        var price_arr = ["60"+sumbol, "90"+sumbol, "90"+sumbol, "145"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Матаро") {

        var price_arr = ["65"+sumbol, "95"+sumbol, "95"+sumbol, "195"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Ла Рока Виладж") {

        var price_arr = ["65"+sumbol, "105"+sumbol, "105"+sumbol, "160"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Калелья") {

        var price_arr = ["75"+sumbol, "115"+sumbol, "115"+sumbol, "170"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Мальграт-де-Мар") {

        var price_arr = ["95"+sumbol, "130"+sumbol, "130"+sumbol, "185"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Санта-Сусанна") {

        var price_arr = ["90"+sumbol, "125"+sumbol, "125"+sumbol, "180"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Льорет-де-Мар") {

        var price_arr = ["105"+sumbol, "140"+sumbol, "140"+sumbol, "280"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Тосса-де-Мар") {

        var price_arr = ["120"+sumbol, "155"+sumbol, "155"+sumbol, "220"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Кастель-Пладжа-де-Аро") {

        var price_arr = ["120"+sumbol, "160"+sumbol, "160"+sumbol, "230"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Аэропорт Жирона") {

        var price_arr = ["105"+sumbol, "145"+sumbol, "145"+sumbol, "230"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Фигерас") {

        var price_arr = ["160"+sumbol, "195"+sumbol, "185"+sumbol, "260"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Андорра Ла-Велья") {

        var price_arr = ["305"+sumbol, "325"+sumbol, "360"+sumbol, "400"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Escaldes-Engordany") {

        var price_arr = ["315"+sumbol, "345"+sumbol, "365"+sumbol, "410"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Encamp") {

        var price_arr = ["320"+sumbol, "350"+sumbol, "370"+sumbol, "415"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "La Massana") {

        var price_arr = ["315"+sumbol, "345"+sumbol, "375"+sumbol, "420"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "La Canillo") {

        var price_arr = ["325"+sumbol, "355"+sumbol, "385"+sumbol, "430"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "La El Tarter") {

        var price_arr = ["335"+sumbol, "365"+sumbol, "385"+sumbol, "430"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Soldeu") {

        var price_arr = ["335"+sumbol, "365"+sumbol, "395"+sumbol, "440"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "GrauRoig") {

        var price_arr = ["345"+sumbol, "370"+sumbol, "395"+sumbol, "440"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "PasdelaCasa") {

        var price_arr = ["355"+sumbol, "375"+sumbol, "395"+sumbol, "440"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Эль Прат" && active_selecet_2 == "Arinsal") {

        var price_arr = ["325"+sumbol, "355"+sumbol, "395"+sumbol, "440"+sumbol];

    } else if(active_selecet_1 == "Барселона" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["45"+sumbol, "65"+sumbol, "50"+sumbol, "135"+sumbol];

    } else if(active_selecet_1 == "Ситжес" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["70"+sumbol, "110"+sumbol, "110"+sumbol, "175"+sumbol];

    } else if(active_selecet_1 == "Виланова" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["80"+sumbol, "110"+sumbol, "110"+sumbol, "175"+sumbol];

    } else if(active_selecet_1 == "Кунит" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["85"+sumbol, "115"+sumbol, "115"+sumbol, "180"+sumbol];

    } else if(active_selecet_1 == "Кома-Руга" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["90"+sumbol, "125"+sumbol, "125"+sumbol, "190"+sumbol];

    } else if(active_selecet_1 == "Калафель" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["90"+sumbol, "125"+sumbol, "125"+sumbol, "190"+sumbol];

    } else if(active_selecet_1 == "Торредембарра" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["105"+sumbol, "125"+sumbol, "125"+sumbol, "190"+sumbol];

    } else if(active_selecet_1 == "Салоу" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["115"+sumbol, "165"+sumbol, "165"+sumbol, "230"+sumbol];

    } else if(active_selecet_1 == "Камбрильс" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["120"+sumbol, "165"+sumbol, "165"+sumbol, "230"+sumbol];

    } else if(active_selecet_1 == "Порт Авентура" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["120"+sumbol, "160"+sumbol, "165"+sumbol, "230"+sumbol];

    } else if(active_selecet_1 == "Круизный Порт" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["45"+sumbol, "65"+sumbol, "50"+sumbol, "135"+sumbol];

    } else if(active_selecet_1 == "Бадалона" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["50"+sumbol, "70"+sumbol, "70"+sumbol, "135"+sumbol];

    } else if(active_selecet_1 == "Монкада-и-Решак" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["55"+sumbol, "70"+sumbol, "70"+sumbol, "130"+sumbol];

    } else if(active_selecet_1 == "Террасса" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["60"+sumbol, "90"+sumbol, "90"+sumbol, "145"+sumbol];

    } else if(active_selecet_1 == "Матаро" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["65"+sumbol, "95"+sumbol, "95"+sumbol, "195"+sumbol];

    } else if(active_selecet_1 == "Ла Рока Виладж" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["65"+sumbol, "105"+sumbol, "105"+sumbol, "160"+sumbol];

    } else if(active_selecet_1 == "Калелья" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["75"+sumbol, "115"+sumbol, "115"+sumbol, "170"+sumbol];

    } else if(active_selecet_1 == "Мальграт-де-Мар" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["95"+sumbol, "130"+sumbol, "130"+sumbol, "185"+sumbol];

    } else if(active_selecet_1 == "Санта-Сусанна" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["90"+sumbol, "125"+sumbol, "125"+sumbol, "180"+sumbol];

    } else if(active_selecet_1 == "Льорет-де-Мар" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["105"+sumbol, "140"+sumbol, "140"+sumbol, "280"+sumbol];

    } else if(active_selecet_1 == "Тосса-де-Мар" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["120"+sumbol, "155"+sumbol, "155"+sumbol, "220"+sumbol];

    } else if(active_selecet_1 == "Кастель-Пладжа-де-Аро" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["120"+sumbol, "160"+sumbol, "160"+sumbol, "230"+sumbol];

    } else if(active_selecet_1 == "Аэропорт Жирона" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["105"+sumbol, "145"+sumbol, "145"+sumbol, "230"+sumbol];

    } else if(active_selecet_1 == "Фигерас" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["160"+sumbol, "195"+sumbol, "185"+sumbol, "260"+sumbol];

    } else if(active_selecet_1 == "Андорра Ла-Велья" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["305"+sumbol, "325"+sumbol, "360"+sumbol, "400"+sumbol];

    } else if(active_selecet_1 == "Escaldes-Engordany" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["315"+sumbol, "345"+sumbol, "365"+sumbol, "410"+sumbol];

    } else if(active_selecet_1 == "Encamp" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["320"+sumbol, "350"+sumbol, "370"+sumbol, "415"+sumbol];

    } else if(active_selecet_1 == "La Massana" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["315"+sumbol, "345"+sumbol, "375"+sumbol, "420"+sumbol];

    } else if(active_selecet_1 == "La Canillo" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["325"+sumbol, "355"+sumbol, "385"+sumbol, "430"+sumbol];

    } else if(active_selecet_1 == "La El Tarter" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["335"+sumbol, "365"+sumbol, "385"+sumbol, "430"+sumbol];

    } else if(active_selecet_1 == "Soldeu" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["335"+sumbol, "365"+sumbol, "395"+sumbol, "440"+sumbol];

    } else if(active_selecet_1 == "GrauRoig" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["345"+sumbol, "370"+sumbol, "395"+sumbol, "440"+sumbol];

    } else if(active_selecet_1 == "PasdelaCasa" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["355"+sumbol, "375"+sumbol, "395"+sumbol, "440"+sumbol];

    } else if(active_selecet_1 == "Arinsal" && active_selecet_2 == "Аэропорт Эль Прат") {

        var price_arr = ["325"+sumbol, "355"+sumbol, "395"+sumbol, "440"+sumbol];

    } else {

        var price_arr = ["цена по запросу", "цена по запросу", "цена по запросу", "цена по запросу", "цена по запросу"];
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

    // $(".one_ref").on("click", function() {

    // get_active_select_ref_1();

    // });

    // $(document).on("change", "#first_select, #second_select", function() {

    // get_active_select_fix_1();

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

                url: "/mail-ru-pay",
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

            url: "/mail-ru",
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

            url: "/mail-smpl-ru",
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
