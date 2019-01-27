<nav class="container-fluid">
  <div class="row">
    <div class="col-sm-2 d-flex flex-column nav-left">
      <div class="nav-item" style="border-bottom: 1px solid white">
        <h3 class="text-light">Seus grupos</h3>

      </div>
      <?php foreach($groups as $g): ?>
      <div class="nav-item">
        <a class="nav-link" href="#" onclick="pushText(<?=$g['id_group']?>)"><?=$g['name_group']?><i class="fas fa-users ml-2 pt-1"></i></a>
      </div>
      <?php endforeach; ?>
      <div class="btn-plus bg-success d-flex align-items-center">
        <i class="fas fa-plus text-light"></i>
      </div>
    </div>
    <div class="col-sm-8 m-0 p-0 bg-light d-flex">
      <div class="area-msg">
          <div class="group-text">
            <?php //foreach($msgs as $m): ?>
            <h4 class="text-primary pl-2 mb-2"></h4>
            <p class="name-user"><strong>Carlos</strong></p>
            <p class="user-text"><i>ola amigos tudo bem</i></p>
            <p class="data-text">27/01/2019 07:08am</p>
            <?php //endforeach; ?>
          </div>
      </div>

      <div class="btn-acoes ml-auto">
        <a href="<?=URL."home/sair"?>" class="btn btn-danger">Sign out</a>
      </div>

      <div class="user-write">
        <form method="POST">
          <div class="form-group">
            <label class="text-dark" for="msg">Digite sua mensagem aqui:</label>
            <textarea name="msg" id="msg" cols="80" rows="5" class="form-control"></textarea>
          </div>
          <button type="submit" class="btn btn-success">Enviar <i class="fas fa-check"></i></button>
          <button type="file" class="btn btn-secondary">Anexar arquivo  <i class="fas fa-upload"></i></button>
        </form>
      </div>
    </div>
    <div class="col-sm-2 bg-dark">
      <h3 class="text-light text-center pt-2">Seus Amigos</h3>
    </div>
  </div>
  
</nav>

