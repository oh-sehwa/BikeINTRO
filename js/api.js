$(document).ready(function () {
    $('#search').click(function () {
        var make = $("#make").val();
        var model = $("#model").val();
        var url = "newpage.html?make=" + make + "&model=" + model;
        window.open(url, '_blank');
        $.ajax({
            method: 'GET',
            url: `https://api.api-ninjas.com/v1/motorcycles?make=${make}&model=${model}`,
            headers: { 'X-Api-Key': api_key },
            contentType: 'application/json',
            success: function (result) {
                console.log(result);

                // Clear the table before appending new data
                $("#searchtable > tbody").empty();

                $.each(result, function (index, value) {
                    var row = "<tr>" +
                        "<td>" + value.model + "</td>" +
                        "<td>" + value.year + "</td>" +
                        "<td>" + value.engine + "</td>" +
                        "<td>" + value.displacement + "</td>" +
                        "<td>" + value.seat_height + "</td>" +
                        "</tr>";
                    $("#searchtable > tbody").append(row);
                });
            },
            error: function ajaxError(jqXHR) {
                console.error('Error: ', jqXHR.responseText);
            }
        });

    });
});
