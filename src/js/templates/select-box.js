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

        // get_active_select_ref_1();

    });
});
