<nav class="container-fluid">
  <div class="row">
    <div class="col-sm-2 d-flex flex-column nav-left">
      <div class="nav-item" style="border-bottom: 1px solid white">
        <h3 class="text-light">Seus grupos</h3>

      </div>
      <div class="nav-item active">
        <a class="nav-link active" href="#">Grupo 1 <i class="fas fa-users ml-2 pt-1"></i></a>
      </div>
      <div class="nav-item">
        <a class="nav-link" href="#">Grupo 2 <i class="fas fa-users ml-2 pt-1"></i></a>
      </div>
      <div class="nav-item">
        <a class="nav-link" href="#">Grupo 3 <i class="fas fa-users ml-2 pt-1"></i></a>
      </div>
      <div class="btn-plus bg-success d-flex align-items-center">
        <i class="fas fa-plus text-light"></i>
      </div>
    </div>
    <div class="col-sm-8 m-0 bg-light">
      <div class="user-write">
        <form method="POST">
          <div class="form-group">
            <label for="msg">Digite sua mensagem aqui:</label>
            <textarea name="msg" id="msg" cols="80" rows="5" class="form-control"></textarea>
          </div>
          <button type="submit" class="btn btn-success">Enviar <i class="fas fa-check"></i></button>
          <button type="file" class="btn btn-secondary">Anexar arquivo  <i class="fas fa-upload"></i></button>
        </form>
      </div>
    </div>
  </div>
  
</nav>

