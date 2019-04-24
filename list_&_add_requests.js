// LIST ALL ARTICLES

getData();

function getData() {
    
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url = "listdata.php";
    var asynchronous = true;

    ajax.open (method, url, asynchronous);
    ajax.send();

    //receiving response from listdata.php

    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var articleRows = JSON.parse(this.responseText);
            var html = "";

            for (var i = 0; i < articleRows.length; i++) {

                var username = articleRows[i].username;
                var articledate = articleRows[i].articledate;
                var articleimage = articleRows[i].articleimage;
                var heading = articleRows[i].heading;
                var body = articleRows[i].body;
                var articleID = articleRows[i].id;
                var articleUID = articleRows[i].uid;
                var userID = articleRows[i].userID;

                //APPENDING AT HTML

                html += "<div class='col-md-3 card-item' id='delete"+ articleID + "'><div class='card my-3'>";
                html += "<a href='displayArticle.php?id=" + articleID + "' class='card-clickable'  data-toggle='tooltip' data-placement='top' title='Read more'><img class='card-img-top img-fluid articleImg' src='uploads/" + articleimage + "' alt='article image'></a>";
                html += " <div class='card-body'>";
                html += "<div class='card-text pre-heading mb-3'>";
                html += "<a href='profile.php?username=" + username + "&id=" + articleUID + "' class='text-dark' data-toggle='tooltip' data-placement='top' title='See " + username + "`s articles'><span><i class='fas fa-user'></i>" + username + "</span></a>";
                html += "<small class='text-muted'>" + articledate + "</small></div>";
                html += "<a href='displayArticle.php?id=" + articleID + "' class='card-clickable' data-toggle='tooltip' data-placement='top' title='Read more'>";
                html += "<h4 class='card-title'>" + heading + "</h4>";
                html += "<div class='articletext'>" + body + "</div></a></div></div></div>";

                document.getElementById("articles").innerHTML = html;   
                
            }
        }
    }
}


// ADD NEW ARTICLE
$(document).ready(function() {
   
    $("#my-form").submit(function(e) {
        e.preventDefault();
        var formData = new FormData($(this)[0]);
        $.ajax({
            url: "addArticle.php",
            method: "post",
            async: false,
            data: formData,
            success: function(data) {
                $("#my-form")[0].reset();
                $("#addArticleModal").modal('hide');
                $("#articles").hide();
                $("#message").css({'margin-top':'25vh', 'margin-bottom':'25vh'});
                $("#message").html("<div class='alert alert-success mx-auto my-5 p-5'>" + data + "<a href='dashboard.php' class='btn btn-outline-success ml-3'>X</a></div>");
                
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });
});



