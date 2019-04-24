function paginate() {
    var numberOfItems = $("#articles .card-item").length;
    var limitPerPage = 4;
    
    $("#articles .card-item:gt(" + (limitPerPage - 1) + ")").hide();
    
    var totalPages = Math.ceil(numberOfItems / limitPerPage);
    
    $(".pagination").append("<li class='current-page page-item active'><a class='page-link' href='javascript:void(0)'>" + 1 + "</a></li>");
    
    for (var i = 2; i <= totalPages; i++) {
        $(".pagination").append("<li class='current-page page-item'><a class='page-link' href='javascript:void(0)'>" + i + "</a></li>");
    }
    
    $(".pagination").append("<li id='next-page' class='page-item'><a class='page-link' href='javascript:void(0)'><span>&raquo;</span></a></li>");
    
    $(".pagination li.current-page").on("click", function() {
    
        if($(this).hasClass("active")) {
            return false
        } else {
            var currentPage = $(this).index();
            $(".pagination li").removeClass("active");
            $(this).addClass("active");
            $("#articles .card-item").hide();
    
            var grandTotal = limitPerPage * currentPage;
    
            for(var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                $("#articles .card-item:eq(" + i + ")").show();
            }
        }
    });
    
    $("#next-page").on("click", function () {
        var currentPage = $(".pagination li.active").index();
        if (currentPage === totalPages) {
            return false;
        } else {
            currentPage++;
            $(".pagination li").removeClass("active");
            $("#articles .card-item").hide();
    
            var grandTotal = limitPerPage * currentPage;
    
            for(var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                $("#articles .card-item:eq(" + i +")").show();
            }
            $(".pagination li.current-page:eq(" + (currentPage - 1) + ")").addClass("active");
        }
    });
    
    $("#previous-page").on("click", function () {
        var currentPage = $(".pagination li.active").index();
        if (currentPage === 1) {
            return false;
        } else {
            currentPage--;
            $(".pagination li").removeClass("active");
            $("#articles .card-item").hide();
    
            var grandTotal = limitPerPage * currentPage;
    
            for(var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                $("#articles .card-item:eq(" + i + ")").show();
            }
            $(".pagination li.current-page:eq(" + (currentPage - 1) + ")").addClass("active");
        }
    });
    
}
