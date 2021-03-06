<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Plataforma de monitoreo de MQTT</title>
    <!-- Librería del MQTT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js" type="text/javascript"></script>

    <!-- Librerías para el gauge -->
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../../../css/gauge.css">
    <link rel="stylesheet" href="../../../css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-image: linear-gradient(to right, #0055A0,#00B0EE); background: rgba('', '', '', 0.6);">
        <div class="container-fluid">
            <a class="navbar-brand img-fluid" href="../../index.html"><img src="../../../jpg/datco_logo_bacan2.png" alt="Grupo Datco Logo" style="width:120px; margin: 0; padding: 0;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Temperatura
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="temp_chile.php">Chile</a></li>
                            <li><a class="dropdown-item" href="../argentina/temp_argentina.php">Argentina</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Relé
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../../rele/chile/rele_chile.html">Chile</a></li>
                            <li><a class="dropdown-item" href="../../rele/argentina/rele_arg.html">Argentina</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="http://190.110.108.59:18083/#/login">Admin Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="https://www.grupodatco.com/">Grupo Datco</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="todo">
        <div>
            <h1>Temperatura en Chile</h1>
        </div>

        <!-- Oficina 1 -->
        <div>
            <div>
                <h4 style="margin-top: 5px; margin-bottom: 5px;">Oficina 1</h4>
            </div>

            <div style="padding: 0; margin: 0;">
                <div style="display: inline-block; margin: 0;">
                    <p style="margin-top: 5px; margin-bottom: 5px; display: inline-block;">Temperatura: </p>
                    <p id="CH_OF1_T" style="margin: 0; display: inline-block;">0</p>
                    <p style="margin-top: 5px; margin-bottom: 5px; display: inline-block;"> ºC</p>
                </div>

                <div id="chartdiv1" style="padding: 0; margin:0;"></div>
            </div>
        </div>

        <div>
            <h5 style="margin-top: 20px;">Obtener gráfico diario</h5>
        </div>

        <form action="oficina_1.php" method="POST">
            <p style="margin: 0;">Seleccione una fecha:</p>
            <input type="date" name="fecha"> <br>
            <input type="submit" name="enviar" value="Graficar">
        </form>

        <!-- Oficina 2 -->
        <div>
            <div style="margin-top: 20px;">
                <h4 style="margin-top: 5px; margin-bottom: 5px;">Oficina 2</h4>
            </div>

            <div style="padding: 0; margin: 0;">
                <div style="display: inline-block; margin: 0;">
                    <p style="margin-top: 5px; margin-bottom: 5px; display: inline-block;">Temperatura: </p>
                    <p id="CH_OF2_T" style="margin: 0; display: inline-block;">0</p>
                    <p style="margin-top: 5px; margin-bottom: 5px; display: inline-block;"> ºC</p>
                </div>

                <div id="chartdiv2" style="padding: 0; margin:0;"></div>
            </div>
        </div>

        <div>
            <h5 style="margin-top: 20px;">Obtener gráfico diario</h5>
        </div>

        <form action="oficina_2.php" method="POST">
            <p style="margin: 0;">Seleccione una fecha:</p>
            <input type="date" name="fecha"> <br>
            <input type="submit" name="enviar" value="Graficar">
        </form>

        <!-- Oficina 3 -->
        <div style="margin-bottom: 20px;">
            <div style="margin-top: 20px; ">
                <h4 style="margin-top: 5px; margin-bottom: 5px;">Oficina 3</h4>
            </div>

            <div style="padding: 0; margin: 0;">
                <div style="display: inline-block; margin: 0;">
                    <p style="margin-top: 5px; margin-bottom: 5px; display: inline-block;">Temperatura: </p>
                    <p id="CH_OF3_T" style="margin: 0; display: inline-block;">0</p>
                    <p style="margin-top: 5px; margin-bottom: 5px; display: inline-block;"> ºC</p>
                </div>

                <div id="chartdiv3" style="padding: 0; margin:0;"></div>
            </div>
        </div>

        <div>
            <h5 style="margin-top: 20px;">Obtener gráfico diario</h5>
        </div>

        <form action="oficina_3.php" method="POST">
            <p style="margin: 0;">Seleccione una fecha:</p>
            <input type="date" name="fecha"> <br>
            <input type="submit" name="enviar" value="Graficar">
        </form>

    </div>

    <script src="../../../js/gauge.js"></script>
    <script src="../../../js/iot-mqtt.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>