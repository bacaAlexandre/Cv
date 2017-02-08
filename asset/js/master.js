$(function () {

  $(".nav-a").click(function (){
    hide();
    $(this).addClass("selection");
    var bloc = $(this).attr("id");

    if (bloc === 'accueil'){
      $(".conteneur").removeClass("hidden");
      $(".experiences").removeClass("hidden");
      $(".formations").removeClass("hidden");
      $(".competences").removeClass("hidden");
    }if (bloc === 'experiences'){
      $(".conteneur").removeClass("hidden");
      $(".experiences").removeClass("hidden");
      $(".conteneur").addClass("zoom");
      $(".experiences").addClass("zoom");

    }if (bloc === 'formations'){
      $(".conteneur").removeClass("hidden");
      $(".formations").removeClass("hidden");
      $(".conteneur").addClass("zoom");
      $(".formations").addClass("zoom");
    }if (bloc === 'competences'){
      $(".competences").removeClass("hidden");
      $(".competences").addClass("zoom");
    }if (bloc === 'contact'){
        $(".formulaire").removeClass("hidden");
    }
  })

  function hide() {
    $(".nav-a").removeClass("selection");
    $(".test").removeClass("affichage");
    $(".test").removeClass("zoom");
    $(".test").addClass("hidden");
    $(".infoTel").addClass("hidden");
    $(".infoMail").addClass("hidden");
  }

  $("#email").click(function(){
    $(".infoMail").toggleClass("hidden");
    $(".infoTel").addClass("hidden");
  })

  $("#telephone").click(function(){
    $(".infoTel").toggleClass("hidden");
    $(".infoMail").addClass("hidden");
  })

  $(".formulaire").on('submit', function(e){
    e.preventDefault();

    var datas = $(this).serializeArray();

    email(datas);
  })


  var email = function(credentials){
    $.ajax({
      method: "POST",
      url : "mail.php",
      data : credentials,
      success : function(response){
        if (response.success){
          $('#retour').children().remove();
          $('#retour').append(
            '<p id="valide">Message envoyer</p>');
        }else{
          $('#retour').children().remove();
          $('#retour').append(
            '<p id="erreur">'+response.erreur+'</p>');
        }
      }
    })
  }
})
