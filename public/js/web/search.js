$('#search').autocomplete({
    minLength: 3,
    source: function(request, response) {
        $.ajax({
            url: "../search/service",
            dataType: "json",
            data: {
                term: request.term
            },
            success: function(data) {
                response(data)
            }
        });
    },
    select: function(event, ui) {
        doSearch(ui.item.slug);
    }
});

function doSearch(slug) {
    window.location.href = '../servicios/' + slug;
}