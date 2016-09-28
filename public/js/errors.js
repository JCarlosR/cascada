var preAlertHtml = '<div class="alert alert-danger fade in">';
preAlertHtml += '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
var postAlertHtml = '</div>';

function displayErrorAlert(errorMessage, idElementTarget) {
    var alertHtml = preAlertHtml+'<p><strong>Alerta!</strong> '+ errorMessage +'</p>'+postAlertHtml;
    $('#'+idElementTarget).prepend(alertHtml);
}
