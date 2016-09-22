$(function () {
    $('[data-align]').on('click', showModalAlign);
    $(document).on('click', '[data-perform]', requestAlign);
});

var objective_selected;

function showModalAlign() {
    var dimension = $(this).data('align');
    objective_selected = $(this).data('id');

    $.getJSON('./corporate/'+dimension+'/'+objective_selected, function (data) {
        // Corporate goals
        var html = '';
        $(data.goals).each(function (i, e) {
            html += '<tr>';
            html += '<td>' + e.id + '</td>';
            html += '<td>' + e.description + '</td>';
            html += '<td class="text-center">';
            html += '<input type="checkbox" data-perform="' + e.id + '" '+ (e.associated?"checked":"") +'>';
            html += '</td>';
            html += '</tr>';

            $('#corporate_list').html(html);
        });

        // Aligned description
        $('#aligned_description').val(data.description);
        $('#aligned_id').val(objective_selected);

        $('#modalAlign').modal('show');
    });

}

function requestAlign() {
    var state = $(this).is(':checked');
    var corporate_goal_id = $(this).data('perform');

    var params = {
        'objective_id': objective_selected,
        'corporate_goal_id': corporate_goal_id,
        'state': state,
        '_token': $('meta[name=csrf-token]').attr('content')
    };

    var $checkbox = $(this);
    $.post('./align/objective/corporate', params, function (data) {
        if (! data.success)
            $checkbox.prop('checked', !state);
    });
}