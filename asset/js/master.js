$(function () {

  $(".nav-a").click(function (){
    hide();
    $(this).addClass("selection");
    var bloc = $(this).attr("id");

    console.log(bloc);

    if (bloc === 'accueil'){
      $(".conteneur").removeClass("hidden");
      $(".experiences").removeClass("hidden");
      $(".formations").removeClass("hidden");
      $(".competences").removeClass("hidden");
    }if (bloc === 'experiences'){
      $(".conteneur").removeClass("hidden");
      $(".experiences").removeClass("hidden");

    }if (bloc === 'formations'){
      $(".conteneur").removeClass("hidden");
      $(".formations").removeClass("hidden");

    }if (bloc === 'competences'){
      $(".competences").removeClass("hidden");

    }if (bloc === 'contact'){
        $(".contact").removeClass("hidden");
    }
  })



  function hide() {
    $(".nav-a").removeClass("selection");
    $(".test").removeClass("affichage");
    $(".test").addClass("hidden");
  }
})
