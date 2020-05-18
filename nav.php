<nav class="">
  <ul class="">

    <li class="">
      <p href="#" class="">Software Público</p>
    </li>
    <li class="nav-sep"> <span>|</span></li>
  <?php 
  if (isset($_SESSION['autenticado'])){
  ?>
  <li class="">
      <a href="logout.php" class="">Desconectar</a>
    </li>
    
  <?php } else {  ?>
    <li class="">
      <a href="login/response" class="">Iniciar sesión</a>
    </li>
  <?php } ?>

<a style="height: 100%;
    line-height: 100%;
    vertical-align: middle;"><li></li>
</a>
  </ul>
</nav>