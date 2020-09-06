function getData(){

  $.ajax({

    url: 'data.php',
    method: "GET",
    success: function (data, state) {

      var albums = data["response"];
      console.log(albums);

      getAlbumsHtml(albums);
    },
    error: function (error) {
      console.log("errore", error);
    }
    });
    }

    function getAlbumsHtml(albums) {

    var template = $("#template").html();
    var templateHandlebars = Handlebars.compile(template);

    var target = $(".cds-container");
    for (var i = 0; i < albums.length; i++) {

    var album = albums[i];
    var albumHTML = templateHandlebars(album);

    target.append(albumHTML);
    }
    }




function init(){
console.log('Hello world');

getData();

}
$(document).ready(init);
