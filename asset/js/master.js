$(function () {

  $(".nav-a").click(function (){
    hide();
    $(this).addClass("selection");
    var bloc = $(this).attr("id");
    var blockId = $(bloc);
    console.log(blockId);
    console.log($(".competences"));
    blockId.removeClass("hidden");

  })



  function hide() {
    $(".nav-a").removeClass("selection");
    $(".test").addClass("hidden");
  }
})
