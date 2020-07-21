<div>
    <h1>Nom du jeu</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam excepturi provident, tenetur nostrum mollitia veritatis perferendis vel</p>
</div>
<div>
    <a href="?action=create" class="btn btn-secondary"> Créer une partie</a>
</div>
<p><?php if(isset($_SESSION['message'])) { echo $_SESSION['message']; unset($_SESSION['message']);} ?></p>
<form class="form-inline" action="?action=join" method="post">
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" id="pin" name="pin" placeholder="PIN PARTI">
  </div>
  <button type="submit" class="btn btn-secondary mb-2">Rejoindre la parti</button>
</form>