$(function() {

    createModal();

    $("button.add").on("click", function(e) {
        //console.log(e);
        $("#modalBox").css("display", "block");
    })
    
    $("button.cancel").on("click", function(e) {
         $.ajax({
            complete: function() {
                $("#modalBox").css("display", "none");
            }
        });
    });

    $("button.save").on("click", function(e) {
        var typeId = $("#typeId").val();

        var pageData = {
            "raceId": $("#raceId").val(),
            "raceDate": $("#raceDate").val(),
            "typeId": typeId,
            "startTime": $("#startTime").val(),
            "password": $("#password").val(),
            "location": $("#location").val(),
        };

        $.ajax({
            type: "POST",
            url: "index.php",
            dataType: "json",
            contentType: "application/json",
            data: JSON.stringify(pageData),
            success: function(data, status) {
                console.log("Got data", data);
            },
            error: function(err) {
                console.log("Didn't get data", err);
            },
            complete: function() {
                // Do this last
                $("#modalBox").css("display", "none");
            }
        });
    })

    // Make a global variable
    var pagesData;

    $.ajax({
        type: "GET",
        url: "index.php",
        dataType: "json",
        success: function(data, status) {
            pagesData = data;
            console.log("Got data", pagesData);

            for (var p in pagesData) {
                var page = pagesData[p];

                $("#pages table tbody").append(
                    $("<tr>")
                    .append($("<td>")
                        .html(page.race_id))
                    .append($("<td>")
                        .html(page.race_date))
                    .append($("<td>")
                        .html(page.start_time))
                    .append($("<td>")
                        .html(page.Location))
                    .append($("<button>")
                        .append($("<img>")
                            .attr("src", "img/racing-actions-edit.png")))
                    .append($("<button>")
                        .append($("<img>")
                            .attr("src", "img/racing-actions-cancel.png")))
                    .append($("<button>")
                        .append($("<img>")
                            .attr("src", "img/racing-actions-racers.png")))                
                    )
            }
        },
        error: function(err) {
            console.log("Didn't get data", err);
        }
    });

})

function createModal() {
    // Get the modal

    // Get the button that opens the modal
    var btn = document.getElementById("openButton");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        $("#modalBox").css("display", "none");
    }

    var modal = document.getElementById('modalBox');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            $("#modalBox").css("display", "none");
        }
    }
}
