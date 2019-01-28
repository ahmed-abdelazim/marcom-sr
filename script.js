// Listners
document.getElementById("list").onchange = function listQ(){getSummary(this.value,'summary','type.php' );};
document.getElementById("list1").onchange = function listQ(){getSummary(this.value,'type','models.php' );};
document.getElementById("list2").onchange = showSn;

// perform AJAX request to the data source, id is added in GET request, divID is the id of the div we want to write the data to.
    function getSummary(id,divId,myUrl)
    {
        $( ".hello" ).empty();
       $.ajax({

         type: "GET",
         url: myUrl,
         data: "id=" + id, // appears as $_GET['id'] @ backend side
         success: function(data) {
               // data is ur summary
              $('#'+divId).html(data);
         }
    
       });
    
    }
// to show the serial field and submit button
    function showSn() {
            var x = document.getElementById("showSn");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "block";
            }
    } 