
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PokéGoTracker - Track your Pokédex progress!</title>

  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=0.8">

  <link rel="stylesheet" href="css/entry.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

<body>

  <nav class="navbar fixed-bottom navbar-light bg-light">

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-12 entry-counter">
          <div id="counter"></div>
        </div>

        <div class="col-md-6 col-12 entry-mode">
          <div class="form-check form-check-inline nav-item">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="optionRemove" value="option1">
            <label class="form-check-label" for="inlineRadio1">Remove</label>
          </div>
          <div class="form-check form-check-inline nav-item">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="optionAdd" value="option2" checked>
            <label class="form-check-label" for="inlineRadio2">Caught</label>
          </div>
          <div class="form-check form-check-inline nav-item">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="optionToDo" value="option3" disabled>
            <label class="form-check-label" for="inlineRadio3">Can Evolve</label>
          </div>
        </div>

      </div>
    </div>
  </nav>

  <div class="container">

    <h1>PokéGoTracker</h1>
    <h2>Track your Pokédex progress!</h2>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="gen-1-tab" data-toggle="tab" href="#gen-1" role="tab" aria-controls="Generation 1" aria-selected="true">Generation 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="gen-2-tab" data-toggle="tab" href="#gen-2" role="tab" aria-controls="Generation 2" aria-selected="false">Generation 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="gen-3-tab" data-toggle="tab" href="#gen-3" role="tab" aria-controls="Generation 3" aria-selected="false">Generation 3</a>
      </li>
    </ul>

    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="gen-1" role="tabpanel" aria-labelledby="gen-1-tab">
        <div class="row display-container" id="counter-items">

          <div id="001" class="entry-container col-4 col-md-3">
            <div class="blank entry">
              <img class="pokemon-pic img-fluid" src="img/pokemon_icon_001_00.png">
            </div>
            <div class="entry-option shiny">
              <img class="img-fluid" src="img/mark_shiny.png">
            </div>
          </div>

          <div id="002" class="entry-container col-4 col-md-3">
            <div class="blank entry">
              <img class="pokemon-pic img-fluid" src="img/pokemon_icon_002_00.png">
            </div>
          </div>

          <div id="003" class="entry-container col-4 col-md-3">
            <div class="blank entry">
              <img class="pokemon-pic img-fluid" src="img/pokemon_icon_003_00.png">
            </div>
          </div>

          <div id="004" class="entry-container col-4 col-md-3">
            <div class="blank entry">
              <img class="pokemon-pic img-fluid" src="img/pokemon_icon_004_00.png">
            </div>
          </div>

          <div id="005" class="entry-container col-4 col-md-3">
            <div class="blank entry">
              <img class="pokemon-pic img-fluid" src="img/pokemon_icon_005_00.png">
            </div>
          </div>

          <div id="006" class="entry-container col-4 col-md-3">
            <div class="blank entry">
              <img class="pokemon-pic img-fluid" src="img/pokemon_icon_006_00.png">
            </div>
          </div>

          <div id="007" class="entry-container col-4 col-md-3">
            <div class="blank entry">
              <img class="pokemon-pic img-fluid" src="img/pokemon_icon_007_00.png">
            </div>
          </div>

          <div id="008" class="entry-container col-4 col-md-3">
            <div class="blank entry">
              <img class="pokemon-pic img-fluid" src="img/pokemon_icon_008_00.png">
            </div>
          </div>

          <div id="009" class="entry-container col-4 col-md-3">
            <div class="blank entry">
              <img class="pokemon-pic img-fluid" src="img/pokemon_icon_009_00.png">
            </div>
          </div>

        </div>
    </div>

  </div>

</div>

</body>

<script>

$(document).ready(function(){

  var numTotal = $("#counter-items > div").length;
  var numSelect = $('.caught').length;

  $('#counter').html('<p>' + numSelect + '/' + numTotal + ' Pokémon caught</p>');

});

$(".entry").click(function() {

  // Remove Pokémon
  if (!$("input[value='option2']:checked").val()) {

       $(this).addClass("blank");

       $(this).removeClass("caught");
       $(this).removeClass("evolve");

       var numTotal = $("#counter-items > div").length;
       var numSelect = $('.caught').length;

       $('#counter').html('<p>' + numSelect + '/' + numTotal + ' Pokémon caught</p>');

  }

  // Add caught Pokémon
  else if (!$("input[value='option1']:checked").val()) {

       $(this).addClass("caught");

       $(this).removeClass("evolve");
       $(this).removeClass("blank");

       var numTotal = $("#counter-items > div").length;
       var numSelect = $('.caught').length;

       $('#counter').html('<p>' + numSelect + '/' + numTotal + ' Pokémon caught</p>');

  }

  // Add Pokémon to evolve
  else if (!$("input[value='option3']:checked").val()) {

       $(this).addClass("evolve");

       $(this).removeClass("caught");
       $(this).removeClass("blank");

       var numTotal = $("#counter-items > div").length;
       var numSelect = $('.caught').length;

       $('#counter').html('<p>' + numSelect + '/' + numTotal + ' Pokémon caught</p>');
  }

  else {
    alert("Please select a entry option!");
  }

});

</script>
