<?php


foreach($users as $item ){

    echo $item['IdUsuario'];
}
?>
<html>
    <head>CRUD - Usuarios</head>
    <title>Crud - Usuarios</title>

    <br/> <br/>
            <a class="btn btn-success" href="<?php echo base_url('index.php/Usuario_Controller/createUser') ?>"> Create New Item</a>
            <br/> <br/> <br/>


    <body>
        <table border="1">
            <thead>
                <th>IdUsuario</th>
                <th>Nombre</th>
                <th>Apellido</th>
            </thead>

            <tbody>
                <?php foreach($users as $u) 
                {
                    ?>
                <tr>
                    <td><?php echo $u['IdUsuario'] ?></td>
                    <td><?php echo $u['Nombre'] ?></td>
                    <td><?php echo $u['Apellido'] ?></td>
                    <td><a class="btn btn-primary" href="<?php echo base_url('index.php/Usuario_Controller/toEdit/'.$u['IdUsuario']) ?>"> Edit</a></td>
                    
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </body>
</html>