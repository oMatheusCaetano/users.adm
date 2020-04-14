$('#cpf').mask("000.000.000-00")
$('#zip').mask("00000000")
$('.phone').mask("(00) 0000-00009")

$('.phone').blur(function(event) {
    if ($(this).val().length === 15) {
        $('.phone').mask("(00) 00000-0009")
    } else {
        $('.phone').mask("(00) 0000-00009")
    }
})
