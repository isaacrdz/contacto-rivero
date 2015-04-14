<form action="mail.php" method="post">
  <div class="row">
    <div class="large-12 columns">
      <label>Nombre
        <input type="text" placeholder="Nombre" name="namex" required />
      </label>
    </div>
  </div>
  <div class="row">
      <div class="medium-4 large-4 columns">
        <label>Correo
        <input type="email" placeholder="@" name="emailx" required/>
        </label>
      </div>
      <div class="medium-4 large-4 columns">
        <label>Teléfono
          <input type="tel" placeholder="10 dígitos" name="telefonox"  required />
        </label>
      </div>
      <div class="medium-4 large-4 columns">
        <label>Auto
          <select name="selectx">
            <option class="disabled" value="Opción">-Escoge una opción-</option>        
            <option value="Aveo">Aveo</option>
            <option value="Matiz">Matiz</option>
            <option value="Cruze">Cruze</option>
          </select>
        </label>
      </div>
  </div>
  <div class="row">
      <div class="large-12 columns">
        <label>Mensaje
          <textarea placeholder="Mensaje" name="txtareax"></textarea>
        </label>
       <button type="submit" class="pull-left">Enviar</button>
      </div>
  </div>
</form>