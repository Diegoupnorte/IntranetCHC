<!DOCTYPE html>
<html lang="es">
    <head> 
        <style>
            th{ background-color: #c37719; color: #FFFFFF;}
        </style>
    </head>
    <body>        
        <table border="0" cellspacing="0" cellpadding="1" style="width: 100%;">
            <tr>
                <td colspan="2"><img src="<?php echo URL_PUBLIC_IMG; ?>logo.jpg"></td>
                <td colspan="2"><h2><?php echo $titulo; ?></h2></td>
                <td colspan="2"></td>
            </tr>
            <tr><td colspan="6"></td></tr>
            <tr>
                <td><b>Entidad:</b></td><td><?php echo $info_obra[0]->Empresa ?></td>
                <td><b>RUC:</b></td><td>Lorem Ipsum Dolor Chavez</td>
                <td><b>Domicilio:</b></td><td>Lorem Ipsum Dolor Chavez</td>
            </tr>
            <tr>
                <td><b>Obra:</b></td><td colspan="5"><?php echo $info_obra[0]->Nombre ?></td>
            </tr>
            <tr>
                <td><b>Proceso:</b></td><td colspan="5"><?php echo $info_obra[0]->proceso ?></td>
            </tr>
            <tr>
                <td><b>Monto:</b></td><td><?php echo number_format((float) $info_obra[0]->Monto_Inicial, 2, '.', ''); ?></td>
                <td><b>Fecha:</b></td><td><?php echo $info_obra[0]->fechacontrato ?></td>
                <td colspan="2">&nbsp;</td>
            </tr>
        </table>
        <br/>
        <?php
//        print_r($cartafianza);
        ?>
        <table border="1" cellspacing="3" cellpadding="4" style="width: 100%;">
            <tr>
                <th>CF</th>
                <th align="center">Fiel Cumplimiento</th>
                <th align="center"># Carta Fianza</th>
                <th align="center">Gasto</th>
                <th align="center">Monto</th>
                <th align="center">Fecha de emisión</th>
                <th align="center">Fecha de venc. y/o renov.</th>
            </tr>
            <?php
            foreach ($cartafianza as $key => $fila) {
                $index = ($key + 1) % 2;
                echo (($index == 0) ? '<tr bgcolor="#fff0da">' : '<tr bgcolor="#ffdba4">');
                echo '<td></td>';
                echo '<td>' . $fila->FielCumplimiento . '</td>';
                echo '<td>' . $fila->numero . '</td>';
                echo '<td>' . number_format((float) $fila->gastofinac, 2, '.', '') . '</td>';
                echo '<td>' . number_format((float) $fila->montorenov, 2, '.', '') . '</td>';
                echo '<td>' . $fila->fechaemisionini . '</td>';
                echo '<td>' . $fila->fechavencren . '</td>';
                echo '</tr>';
            }
            ?>
        </table>
    </body>
</html>
