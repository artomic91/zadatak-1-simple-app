// UPDATE FORM

function popupUpdate(id){
    //set article id into hidden input field for update
    document.getElementById('update').value = id;
    //get current article data from update.php using ajax call 
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(ajax.responseText);
            var data = JSON.parse(ajax.responseText);
            renderHTML(data);
          }

    }
    ajax.open('GET', 'update.php?update='+id);
    ajax.send();

    //Print data result into form input fields
    function renderHTML(data){
      for(i = 0; i < data.length; i++) {
        document.querySelector('.heading').value = data[i].heading;
        document.querySelector('.textbody').value = data[i].body;
          
        if(document.querySelector('#updateImage')) {
           document.querySelector('#edit-img').src = "uploads/"+ data[i].articleimage;
          }else{
            document.querySelector('#edit-img').style.visibility = 'none';
          }
        }
      }

  }

// DELETE ARTICLE

function deleteAjax(id) {
    if(confirm('Are you sure you want to delete this article?')) {
        $.ajax({
            type: 'POST',
            url: 'delete.php',
            data: {delete_id:id},
            success: function(data) {
                $("#delete"+ id).remove();
                $("#message").html("<div class='alert alert-success alert-dismissible'>" + data + "<button class='close' type='button' data-dismiss='alert'><span>x</span></button></div>");
                console.log(data);
            }
        });
    }
}