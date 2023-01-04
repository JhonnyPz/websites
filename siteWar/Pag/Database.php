<?php
 $conectar = mysqli_connect("127.0.0.1","root","123","jugadores");

 if (!$conectar) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>War</title>
    <!-- CSS link -->
    <link rel="stylesheet" href="../style.css">
    <!-- Boxicons CDN link -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

    <!------Barra Lateral--------->

    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <i class='bx bxl-html5'></i>
                <div class="logo_name">CodingPag</div>
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
                <a href="../index.html">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="tanks.html">
                    <i class='bx bxs-car'></i>
                    <span class="link_name">Tanks</span>
                </a>
                <span class="tooltip">Tanks</span>
            </li>
            <li>
                <a href="planes.html">
                    <i class='bx bxs-plane-alt'></i>
                    <span class="link_name">Planes</span>
                </a>
                <span class="tooltip">Planes</span>
            </li>
            <li>
                <a href="Form.html">
                    <i class='bx bxs-food-menu'></i>
                    <span class="link_name">Form</span>
                </a>
                <span class="tooltip">Form</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-data'></i>
                    <span class="link_name">Data Base</span>
                </a>
                <span class="tooltip">Data Base</span>
            </li>
        </ul>
        <div class="profile_content">
            <div class="profile">
                <div class="profile_detail">
                    <img src="img/Perfil.jpg" alt="">
                    <div class="name_job">
                        <div class="name">Jhonny Pz</div>
                        <div class="job">Web Designer</div>
                    </div>
                </div>
                <i class='bx bx-log-out' id="log_out"></i>
            </div>
        </div>
    </div>

    <!------Contenedor Principal--------->

    <div class="home_content">

        <!------tabla--------->
        <div class="contenedor-table">
            <div class="tabla-box">
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Email</th>
                        <th>Celular</th>
                    </tr>

                    <?php
                    $consulta = "SELECT * FROM usuarios";
                    $resultados = mysqli_query($conectar, $consulta);
                    if ($resultados){
                        while($row = $resultados->fetch_array()){
                            $Cid = $row['id'];
                            $Cnombre = $row['Nombre'];
                            $Capeliidos = $row['Apellidos'];
                            $Cemail = $row['Email'];
                            $Ccelular = $row['Celular'];
                            ?>
                            <tr>
                                <td><?php echo $Cid; ?></td>
                                <td><?php echo $Cnombre; ?></td>
                                <td><?php echo $Capeliidos; ?></td>
                                <td><?php echo $Cemail; ?></td>
                                <td><?php echo $Ccelular; ?></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </table>
            </div>
        </div>

    </div>

    <!------Script Js Basic--------->

    <script>
        let btn = document.querySelector("#btn");
        let cont = document.querySelector(".home_content");
        let sidebar = document.querySelector(".sidebar");

        btn.onclick = function() {
            sidebar.classList.toggle("active")
        }
        cont.onclick = function() {
            sidebar.classList.remove("active")
        }
    </script>

</body>