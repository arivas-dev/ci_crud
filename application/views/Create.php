<?php echo validation_errors(); ?>

<html>
    <body>
    <?php echo form_open('addUser'); ?>
            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre">
            <br/>

            <label for="Apellido">Apellido</label>
            <input type="text" name="Apellido">
            
            <br/>

            <input type="submit" value="Guardar"/>
            </form>
    </body>
</html>