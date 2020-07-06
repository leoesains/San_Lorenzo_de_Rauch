{include 'header.admin.tpl'}
    
    <form  class="centrar" action="guardar_publicidad" method="POST" enctype="multipart/form-data">
        <h1>DATOS DE LA NUEVA PUBLICIDAD</h1>
        <label>Ingrese Máximo 3 imágenes</label>
        <input type="file" class="input-file" name="fotos[]" multiple max-uploads="3">
        <input class="input-publi-contacto" type="text" placeholder="INGRESE NOMBRE DE CONTACTO" name="contacto">
        <input class="input-publi-valor" type="text" placeholder="INGRESE EL VALOR" name="valor">
        <button type="submit" class="btn btn-danger"><b>Enviar</b></button>
        <div class="contenedor-msg">
            {if {$error}}
                <MARQUEE loop="2">{$error}</MARQUEE>
            {/if}
        </div>      

    </form>  
  
  
  
  
  
  
  
  
  {*  <form id="form_add_jugador" action="guardar_publicidad" method="POST" enctype="multipart/form-data">
        <h1>DATOS DE LA NUEVA PUBLICIDAD</h1>
        <input type="file" class="input-file" name="foto">
        <input type="text" placeholder="INGRESE NOMBRE DE CONTACTO" name="contacto">
        <input type="text" placeholder="INGRESE EL VALOR" name="valor">
        <button type="submit" class="btn btn-danger"><b>Enviar</b></button>
        <div class="contenedor-msg">
            {if {$error}}
                <MARQUEE loop="2">{$error}</MARQUEE>
            {/if}
        </div>      

    </form> *}
{include 'templates/footer.tpl'}