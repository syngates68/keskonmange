$(document).on('keyup', '.formulaire_cherche_aliment #search_aliment', function()
{
    $.post(baseurl + 'inc/liste_aliments.php',
    {
        recherche: $(this).val()
    },
    function(data)
    {
        $('.liste_aliments').html(data);
    });
});

$(document).on('change', '.niveau', function()
{
    var id = $(this).attr('id');
    var id_aliment = id.replace('niveau_', '');

    $(this).closest('.aliment').attr('class', 'row aliment');


    if ($(this).val() == '2' || $(this).val() == '3')
        $(this).closest('.aliment').addClass('niveau' + $(this).val());

    $.post(baseurl + 'inc/niveau.php',
    {
        id_aliment: id_aliment,
        niveau: $(this).val()
    });
});