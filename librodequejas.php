
      <?php
      //agrego el menu con toda su logica
        include('header.php');
      ?>


    <div class="contenedor">
      <form class="formulariogrande" action="index.php" method="post">
        <div class="form-header">
          <h2 class "form-title">S<span>ugerencias</span> </h2>
        </div>
          <label class="form-label" for="sugerencia">Deje su comentario o sugerencia</label>
          <!-- El textarea es un campo de texto más grande y baja de linea al llegar al fin -->
          <textarea id="sugerencia" class="form-textarea" placeholder="Escriba aquí..."></textarea>

          <br>
          <input type="submit" class="btn-submit" name="" value="Enviar">

          <div class="noTengo">
            <p>Intentaremos responder lo antes posible. Gracias por su colaboración. </p>
          </div>
      </form>
      <br>
    </div>

    <?php
      include('footer.php');
    ?>

  
