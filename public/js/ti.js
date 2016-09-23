$(function () {
    $('[data-align]').on('click', showModalAlign);
    $(document).on('click', '[data-perform]', requestAlign);
});

var objective_selected;

function showModalAlign() {
    objective_selected = $(this).data('align');

    $.getJSON('./ti/'+objective_selected, function (objectives) {
        // Ti goals (grouped by corporate-objectives)
        // console.log(objectives);
        var html = '';
        if (objectives.length > 0)
            $(objectives).each(function (i, e) {
                var corporate_id = e.id;
                html += '<em>Asociadas a la meta corporativa ' + corporate_id + '</em>';
                html += '<p><strong>' + e.description + '</strong></p>';
                html += '<table class="table table-bordered">';
                html += '<thead>';
                html += '<tr>';
                html += '<th>N</th>';
                html += '<th>Metas TI</th>';
                html += '<th class="text-center">¿Se asocia?</th>';
                html += '</tr>';
                html += '</thead>';
                html += '<tbody>';
                $(e.ti_goals).each(function (i,e) {
                    html += '<tr>';
                    html += '<td>' + e.id + '</td>';
                    html += '<td>' + e.description + '</td>';
                    html += '<td class="text-center">';
                    html += '<input type="checkbox" data-perform="'+e.id+'" data-corporate="'+corporate_id+'" '+ (e.associated?"checked":"") +'>';
                    html += '</td>';
                    html += '</tr>';
                });
                html += '</tbody>';
                html += '</table>';
            });
        else html+='<div class="alert alert-danger"><strong>Importante: </strong>No ha alineado este objetivo estratégico con ninguna meta corporativa.</div>';
        $('#grouped_ti_goals').html(html);

        $('#modalAlign').modal('show');
    });

}

function requestAlign() {
    var state = $(this).is(':checked');
    var ti_goal_id = $(this).data('perform');
    var corporate_goal_id = $(this).data('corporate');

    var params = {
        'ti_goal_id': ti_goal_id,
        'corporate_goal_id': corporate_goal_id,
        'objective_id': objective_selected,
        'state': state,
        '_token': $('meta[name=csrf-token]').attr('content')
    };

    var $checkbox = $(this);
    $.post('./align/objective-corporate/ti', params, function (data) {
        if (! data.success)
            $checkbox.prop('checked', !state);
    });
}