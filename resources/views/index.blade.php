@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/resources/css/index.css" media="screen">
    <title> Portafolio</title>
</head>
<body>
    <div>
        <form action="NuevoRegistro" method="POST">
            @csrf
            <table>
                <tr>
                    <td>
                        <p> Primer Nombre</p>
                    </td>
                    <td>
                        <input type="text" class="form-control form-control-sm" name="Nombre">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p> Segundo Nombre</p>
                    </td>
                    <td>
                        <input type="text" class="form-control form-control-sm" name="SNombre">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p> Primer Apellido</p>
                    </td>
                    <td>
                        <input type="text" class="form-control form-control-sm" name="Apellido">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p> Segundo Apellido</p>
                    </td>
                    <td>
                        <input type="text" class="form-control form-control-sm" name="SApellido">
                    </td>
                </tr>

                <tr>
                    <td>
                        <P> Fecha de Nacimiento</P>
                    </td>
                    <td>
                        <input type="date" class="form-control form-control-sm" name="FechaNacimiento">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p> Correo</p>
                    </td>
                    <td>
                        <input type="email" class="form-control form-control-sm" name="Correo">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p> Tipo de Documento</p>
                    </td>
                    <td>
                        <select class="form-select form-select-sm" name="Documento">
                            <option value="CEDULA CIUDADANIA"> CEDULA CIUDADANIA</option>
                            <option value="CEDULA EXTRANJERIA"> CEDULA EXTRANJERA</option>
                            <option value="TARJETA DE IDENTIDAD"> TARJETA DE IDENTIDAD</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p> Documento</p>
                    </td>
                    <td>
                        <input type="text" placeholder="Sin Caracteres Especiales" class="form-control form-control-sm" name="IdDocumento">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p> Contraseña</p>
                    </td>
                    <td>
                        <input type="password" class="form-control form-control-sm" name="Contrasena">
                    </td>
                </tr>
            </table>
            <input type="submit" value="Enviar">
        </form>


        <a href="./authentic.blade.php">¿Ya estas registrado? Ingresa Aquí</a>
    </div>
</body>
</html>
