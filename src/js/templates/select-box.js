$(document).ready(function () {
    $("#first_select, #second_select, #first_select_2, #second_select_2").select2();

    $("#first_select, #second_select").on('select2:select', function (e) {
        var selectedId = e.params.data.id;

        if(e.target.getAttribute('id') === 'first_select') {
            $("#first_select_2").val(selectedId).trigger('change');
            $("#second_select option, #second_select_2 option").attr("disabled", false);
            $('#second_select_2 [value="' + selectedId + '"]').attr("disabled", true);
            $('#second_select [value="' + selectedId + '"]').attr("disabled", true);
        } else {
            $("#second_select_2").val(selectedId).trigger('change');
            $("#first_select option, #first_select_2 option").attr("disabled", false);
            $('#first_select_2 [value="' + selectedId + '"]').attr("disabled", true);
            $('#first_select [value="' + selectedId + '"]').attr("disabled", true);
        }
    });

    $("#first_select_2, #second_select_2").on('select2:select', function (e) {
        var selectedId = e.params.data.id;

        if(e.target.getAttribute('id') === 'first_select_2') {
            $("#first_select").val(selectedId).trigger('change');
            $("#second_select option, #second_select_2 option").attr("disabled", false);
            $('#second_select_2 [value="' + selectedId + '"]').attr("disabled", true);
            $('#second_select [value="' + selectedId + '"]').attr("disabled", true);
        } else {
            $("#second_select").val(selectedId).trigger('change');
            $("#first_select option, #first_select_2 option").attr("disabled", false);
            $('#first_select_2 [value="' + selectedId + '"]').attr("disabled", true);
            $('#first_select [value="' + selectedId + '"]').attr("disabled", true);
        }
    });

    $(".one_ref").on("click", function() {
        var active_selecet_1 = $("#first_select option:selected").val();
        var active_selecet_2 = $("#second_select option:selected").val();

        $("#first_select option, #second_select option, #first_select_2 option, #second_select_2 option").attr("disabled", false);

        $("#second_select, #second_select_2").val(active_selecet_1).trigger('change');
        $('#second_select [value="' + active_selecet_2 + '"], #second_select_2 [value="' + active_selecet_2 + '"]').attr("disabled", true);

        $("#first_select, #first_select_2").val(active_selecet_2).trigger('change');
        $('#first_select [value="' + active_selecet_1 + '"], #first_select_2 [value="' + active_selecet_1 + '"]').attr("disabled", true);
    });

    // Prevent search input autofocus. select2.js file
    // self.$search.trigger('focus');
    //
    // window.setTimeout(function () {
    //   self.$search.trigger('focus');
    // }, 0);

});
