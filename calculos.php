<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/73b3fda649.js" crossorigin="anonymous"></script>
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Simulacion Realizada</title>
    <link rel="stylesheet" type="text/css" href="calculadora12.css">
</head>

<body>
    <div class="mt-5 mb-3">
        <h1 class="text-center">Simulacion de Puntajes</h1>
        <br>
        <div class="container-calc1">
            <?php
            include '_functions.php';

            if (isset($_POST['simular'])) {
                $nem = $_POST['nem'];
                $ranking = $_POST['ranking'];
                $clectora = $_POST['clectora'];
                $cmatematica1 = $_POST['cmatematica1'];
                $chistoria = $_POST['chistoria'];
                $cciencias = $_POST['cciencias'];
                $cmatematica2 = $_POST['cmatematica2'];
                $promedio = (($cmatematica1 + $clectora) / 2);

                echo "<h2>Tus puntajes ingresados</h2>";
                echo "<br>";

                echo "<div class='data-container'>";
                echo "<div class='data-item'><h3>NEM:</h3><p>$nem</p></div>";
                echo "<div class='data-item'><h3>Ranking:</h3><p>$ranking</p></div>";
                echo "<div class='data-item'><h3>Competencia Lectora:</h3><p>$clectora</p></div>";
                echo "<div class='data-item'><h3>Competencia Matemática 1:</h3><p>$cmatematica1</p></div>";
                echo "</div>";

                echo "<div class='data-container'>";
                echo "<div class='data-item'><h3>Historia y Ciencias Sociales:</h3><p>$chistoria</p></div>";
                echo "<div class='data-item'><h3>Ciencias:</h3><p>$cciencias</p></div>";
                echo "<div class='data-item'><h3>Competencia Matemática 2:</h3><p>$cmatematica2</p></div>";
                echo "<div class='data-item cuadrado'><h3 class='text-decoration-none' tabindex='0' data-bs-toggle='popover' data-bs-trigger='hover focus' data-bs-content='Promedio entre los puntaje COMPRENSION LECTORA Y COMPRENSION MATEMATICA 1'>Puntaje Promedio<br>de Postulacion: <strong>$promedio</strong></h3></div>";
                echo "</div>";
                echo "</div>";
            } else {
                echo "<p>No se han recibido datos del formulario.</p>";
            }
            ?>
        </div>
        <br>
        <div class="container-calc">
            <table class="table_id table-larger-font text-center">
                <thead>
                    <tr class="data-container2">
                        <th>Código</th>
                        <th>Carrera</th>
                        <th>Vacantes 2025</th>
                        <th>Puntaje Último Matriculado 2024</th>
                        <th>
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="El puntaje ponderado es la suma de los porcentajes de las pruebas que cada carrera evalúa durante el proceso de acceso a la universidad. Cada universidad y carrera establece distintos porcentajes de postulación la cual se mide en una escala de 100 a 1.000.">
                                Puntaje Ponderado de Postulación
                            </span>
                        </th>
                        <th></th>
                        <th class="col-3">Observaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33066</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=77" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">AGRONOMIA</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">20</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">538.45</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="25% NEM + 40% RANKING + 10% LECTORA + 15% M1 + 10% HISTORIA O CIENCIAS">
                                <?php echo $agronomia; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 458) {
                            if ($agronomia > 458) {
                        ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></td>
                            <?php
                            } else {
                            ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 458) {
                                if ($agronomia > 458) {
                                    echo "Cumples con los requisitos de puntaje para la postulación.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            } else {
                                if ($agronomia > 458) {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> ni los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33030</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=39" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">ARQUITECTURA</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">35</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">577.80</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="35% NEM + 35% RANKING + 10% LECTORA + 10% M1 + 10% HISTORIA O CIENCIAS">
                                <?php echo $arquitectura; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 458) {
                            if ($arquitectura > 458) {
                        ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></td>
                            <?php
                            } else {
                            ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 458) {
                                if ($arquitectura > 458) {
                                    echo "Cumples con los requisitos de puntaje para la postulación.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            } else {
                                if ($arquitectura > 458) {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> ni los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33027</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=73" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">AUDITORIA</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">20</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">578.40</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="10% NEM + 60% RANKING + 10% LECTORA + 10% M1 + 10% HISTORIA O CIENCIAS">
                                <?php echo $auditoria; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 458) {
                            if ($auditoria > 458) {
                        ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></td>
                            <?php
                            } else {
                            ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 458) {
                                if ($auditoria > 458) {
                                    echo "Cumples con los requisitos de puntaje para la postulación.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            } else {
                                if ($auditoria > 458) {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> ni los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33036</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=368" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">BIOLOGÍA MARINA</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">20</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">526.30</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="20% NEM + 40% RANKING + 10% LECTORA + 15% M1 + 15% HISTORIA O CIENCIAS">
                                <?php echo $biologia_marina; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 458) {
                            if ($biologia_marina > 458) {
                        ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></td>
                            <?php
                            } else {
                            ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 458) {
                                if ($biologia_marina > 458) {
                                    echo "Cumples con los requisitos de puntaje para la postulación.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            } else {
                                if ($biologia_marina > 458) {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> ni los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33025</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=75" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">DERECHO</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">40</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">569.20</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="35% NEM + 15% RANKING + 20% LECTORA + 10% M1 + 20% HISTORIA">
                                <?php echo $derecho; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 458) {
                            if ($derecho > 458) {
                                if ($chistoria > 0) {
                        ?>
                                    <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></td>
                                <?php
                                } else {
                                ?>
                                    <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                                <?php
                                }
                            } else {
                                ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 458) {
                                if ($derecho > 458) {
                                    if ($chistoria > 0) {
                                        echo "Cumples con los requisitos para la postulación.";
                                    } else {
                                        echo "No realizaste la prueba de <strong>Historia</strong> la cual es un <strong>*Requisito obligatorio*</strong>.";
                                    }
                                } else {
                                    if ($chistoria > 0) {
                                        echo "No cumples con el <strong>puntaje ponderado</strong> obligatorio para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje ponderado</strong>, ni realizaste la prueba de <strong>Historia</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                }
                            } else {
                                if ($derecho > 458) {
                                    if ($chistoria > 0) {
                                        echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni realizaste la prueba de <strong>Historia</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                } else {
                                    if ($chistoria > 0) {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni con el <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni con el <strong>puntaje ponderado</strong>, ni realizaste la prueba de <strong>Historia</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33060</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=61" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">ENFERMERÍA</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">60</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">644.80</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="20% NEM + 25% RANKING + 15% LECTORA + 20% M1 + 20% CIENCIAS">
                                <?php echo $enfermeria; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 458) {
                            if ($enfermeria > 458) {
                                if ($cciencias > 0) {
                        ?>
                                    <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></td>
                                <?php
                                } else {
                                ?>
                                    <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                                <?php
                                }
                            } else {
                                ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 458) {
                                if ($enfermeria > 458) {
                                    if ($cciencias > 0) {
                                        echo "Cumples con los requisitos para la postulación.";
                                    } else {
                                        echo "No realizaste la prueba de <strong>Ciencias</strong> la cual es un <strong>*Requisito obligatorio*</strong>.";
                                    }
                                } else {
                                    if ($cciencias > 0) {
                                        echo "No cumples con el <strong>puntaje ponderado</strong> obligatorio para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje ponderado</strong>, ni realizaste la prueba de <strong>Ciencias</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                }
                            } else {
                                if ($enfermeria > 458) {
                                    if ($cciencias > 0) {
                                        echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni realizaste la prueba de <strong>Ciencias</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                } else {
                                    if ($cciencias > 0) {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni con el <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni con el <strong>puntaje ponderado</strong>, ni realizaste la prueba de <strong>Ciencias</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33080</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=69" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">FONOAUDIOLOGÍA</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">25</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">468.10</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="35% NEM + 35% RANKING + 10% LECTORA + 10% M1 + 10% CIENCIAS">
                                <?php echo $fonoaudiologia; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 458) {
                            if ($fonoaudiologia > 458) {
                                if ($cciencias > 0) {
                        ?>
                                    <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></td>
                                <?php
                                } else {
                                ?>
                                    <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                                <?php
                                }
                            } else {
                                ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 458) {
                                if ($fonoaudiologia > 458) {
                                    if ($cciencias > 0) {
                                        echo "Cumples con los requisitos para la postulación.";
                                    } else {
                                        echo "No realizaste la prueba de <strong>Ciencias</strong> la cual es un <strong>*Requisito obligatorio*</strong>.";
                                    }
                                } else {
                                    if ($cciencias > 0) {
                                        echo "No cumples con el <strong>puntaje ponderado</strong> obligatorio para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje ponderado</strong>, ni realizaste la prueba de <strong>Ciencias</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                }
                            } else {
                                if ($fonoaudiologia > 458) {
                                    if ($cciencias > 0) {
                                        echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni realizaste la prueba de <strong>Ciencias</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                } else {
                                    if ($cciencias > 0) {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni con el <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni con el <strong>puntaje ponderado</strong>, ni realizaste la prueba de <strong>Ciencias</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33061</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=29" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">INGENIERÍA EN ELECTRICIDAD MENCIÓN ELECTRÓNICA INDUSTRIAL</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">50</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">497.90</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="10% NEM + 50% RANKING + 10% LECTORA + 20% M1 + 10% HISTORIA O CIENCIAS">
                                <?php echo $ingenieria_plancomun; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 458) {
                            if ($ingenieria_plancomun > 458) {
                        ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></td>
                            <?php
                            } else {
                            ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 458) {
                                if ($ingenieria_plancomun > 458) {
                                    echo "Cumples con los requisitos de puntaje para la postulación.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            } else {
                                if ($ingenieria_plancomun > 458) {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> ni los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33061</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=31" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">INGENIERÍA MECÁNICA</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">50</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">497.90</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="10% NEM + 50% RANKING + 10% LECTORA + 20% M1 + 10% HISTORIA O CIENCIAS">
                                <?php echo $ingenieria_plancomun; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 458) {
                            if ($ingenieria_plancomun > 458) {
                        ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></td>
                            <?php
                            } else {
                            ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 458) {
                                if ($ingenieria_plancomun > 458) {
                                    echo "Cumples con los requisitos de puntaje para la postulación.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            } else {
                                if ($ingenieria_plancomun > 458) {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> ni los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33061</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=33" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">INGENIERÍA EN QUÍMICA Y MEDIO AMBIENTE</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">50</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">497.90</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="10% NEM + 50% RANKING + 10% LECTORA + 20% M1 + 10% HISTORIA O CIENCIAS">
                                <?php echo $ingenieria_plancomun; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 458) {
                            if ($ingenieria_plancomun > 458) {
                        ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></td>
                            <?php
                            } else {
                            ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 458) {
                                if ($ingenieria_plancomun > 458) {
                                    echo "Cumples con los requisitos de puntaje para la postulación.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            } else {
                                if ($ingenieria_plancomun > 458) {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> ni los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33061</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=35" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">INGENIERÍA EN COMPUTACIÓN E INFORMÁTICA</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">50</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">497.90</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="10% NEM + 50% RANKING + 10% LECTORA + 20% M1 + 10% HISTORIA O CIENCIAS">
                                <?php echo $ingenieria_plancomun; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 458) {
                            if ($ingenieria_plancomun > 458) {
                        ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></td>
                            <?php
                            } else {
                            ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 458) {
                                if ($ingenieria_plancomun > 458) {
                                    echo "Cumples con los requisitos de puntaje para la postulación.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            } else {
                                if ($ingenieria_plancomun > 458) {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> ni los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33005</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=20" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">INGENIERÍA CIVIL EN ELECTRICIDAD MENCIÓN ELECTRÓNICA INDUSTRIAL</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">50</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">538.35</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="10% NEM + 45% RANKING + 10% LECTORA + 20% M1 + 10% HISTORIA O CIENCIAS + 5% M2">
                                <?php echo $ingenieria_civilplancomun; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 458) {
                            if ($ingenieria_civilplancomun > 458) {
                                if ($cmatematica2 > 0) {
                        ?>
                                    <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></td>
                                <?php
                                } else {
                                ?>
                                    <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                                <?php
                                }
                            } else {
                                ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 458) {
                                if ($ingenieria_civilplancomun > 458) {
                                    if ($cmatematica2 > 0) {
                                        echo "Cumples con los requisitos para la postulación.";
                                    } else {
                                        echo "No realizaste la prueba de <strong>Matematicas M2</strong> la cual es un <strong>*Requisito obligatorio*</strong>.";
                                    }
                                } else {
                                    if ($cmatematica2 > 0) {
                                        echo "No cumples con el <strong>puntaje ponderado</strong> obligatorio para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje ponderado</strong>, ni realizaste la prueba de <strong>Matematicas M2</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                }
                            } else {
                                if ($ingenieria_civilplancomun > 458) {
                                    if ($cmatematica2 > 0) {
                                        echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni realizaste la prueba de <strong>Matematicas M2</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                } else {
                                    if ($cmatematica2 > 0) {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni con el <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni con el <strong>puntaje ponderado</strong>, ni realizaste la prueba de <strong>Matematicas M2</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33005</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=23" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">INGENIERÍA CIVIL EN MECÁNICA</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">50</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">538.35</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="10% NEM + 45% RANKING + 10% LECTORA + 20% M1 + 10% HISTORIA O CIENCIAS + 5% M2">
                                <?php echo $ingenieria_civilplancomun; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 458) {
                            if ($ingenieria_civilplancomun > 458) {
                                if ($cmatematica2 > 0) {
                        ?>
                                    <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></td>
                                <?php
                                } else {
                                ?>
                                    <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                                <?php
                                }
                            } else {
                                ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 458) {
                                if ($ingenieria_civilplancomun > 458) {
                                    if ($cmatematica2 > 0) {
                                        echo "Cumples con los requisitos para la postulación.";
                                    } else {
                                        echo "No realizaste la prueba de <strong>Matematicas M2</strong> la cual es un <strong>*Requisito obligatorio*</strong>.";
                                    }
                                } else {
                                    if ($cmatematica2 > 0) {
                                        echo "No cumples con el <strong>puntaje ponderado</strong> obligatorio para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje ponderado</strong>, ni realizaste la prueba de <strong>Matematicas M2</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                }
                            } else {
                                if ($ingenieria_civilplancomun > 458) {
                                    if ($cmatematica2 > 0) {
                                        echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni realizaste la prueba de <strong>Matematicas M2</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                } else {
                                    if ($cmatematica2 > 0) {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni con el <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni con el <strong>puntaje ponderado</strong>, ni realizaste la prueba de <strong>Matematicas M2</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33005</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=25" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">INGENIERÍA CIVIL QUÍMICA</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">50</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">538.35</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="10% NEM + 45% RANKING + 10% LECTORA + 20% M1 + 10% HISTORIA O CIENCIAS + 5% M2">
                                <?php echo $ingenieria_civilplancomun; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 458) {
                            if ($ingenieria_civilplancomun > 458) {
                                if ($cmatematica2 > 0) {
                        ?>
                                    <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></td>
                                <?php
                                } else {
                                ?>
                                    <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                                <?php
                                }
                            } else {
                                ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 458) {
                                if ($ingenieria_civilplancomun > 458) {
                                    if ($cmatematica2 > 0) {
                                        echo "Cumples con los requisitos para la postulación.";
                                    } else {
                                        echo "No realizaste la prueba de <strong>Matematicas M2</strong> la cual es un <strong>*Requisito obligatorio*</strong>.";
                                    }
                                } else {
                                    if ($cmatematica2 > 0) {
                                        echo "No cumples con el <strong>puntaje ponderado</strong> obligatorio para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje ponderado</strong>, ni realizaste la prueba de <strong>Matematicas M2</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                }
                            } else {
                                if ($ingenieria_civilplancomun > 458) {
                                    if ($cmatematica2 > 0) {
                                        echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni realizaste la prueba de <strong>Matematicas M2</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                } else {
                                    if ($cmatematica2 > 0) {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni con el <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni con el <strong>puntaje ponderado</strong>, ni realizaste la prueba de <strong>Matematicas M2</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33005</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=27" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">INGENIERÍA CIVIL EN COMPUTACIÓN E INFORMÁTICA</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">50</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">538.35</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="10% NEM + 45% RANKING + 10% LECTORA + 20% M1 + 10% HISTORIA O CIENCIAS + 5% M2">
                                <?php echo $ingenieria_civilplancomun; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 458) {
                            if ($ingenieria_civilplancomun > 458) {
                                if ($cmatematica2 > 0) {
                        ?>
                                    <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></td>
                                <?php
                                } else {
                                ?>
                                    <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                                <?php
                                }
                            } else {
                                ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 458) {
                                if ($ingenieria_civilplancomun > 458) {
                                    if ($cmatematica2 > 0) {
                                        echo "Cumples con los requisitos para la postulación.";
                                    } else {
                                        echo "No realizaste la prueba de <strong>Matematicas M2</strong> la cual es un <strong>*Requisito obligatorio*</strong>.";
                                    }
                                } else {
                                    if ($cmatematica2 > 0) {
                                        echo "No cumples con el <strong>puntaje ponderado</strong> obligatorio para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje ponderado</strong>, ni realizaste la prueba de <strong>Matematicas M2</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                }
                            } else {
                                if ($ingenieria_civilplancomun > 458) {
                                    if ($cmatematica2 > 0) {
                                        echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni realizaste la prueba de <strong>Matematicas M2</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                } else {
                                    if ($cmatematica2 > 0) {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni con el <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni con el <strong>puntaje ponderado</strong>, ni realizaste la prueba de <strong>Matematicas M2</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33009</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=71" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">INGENIERÍA COMERCIAL</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">45</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">449.10</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="10% NEM + 60% RANKING + 10% LECTORA + 10% M1 + 10% HISTORIA O CIENCIAS">
                                <?php echo $ingenieria_comercial; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 458) {
                            if ($ingenieria_comercial > 458) {
                        ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></td>
                            <?php
                            } else {
                            ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 458) {
                                if ($ingenieria_comercial > 458) {
                                    echo "Cumples con los requisitos de puntaje para la postulación.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            } else {
                                if ($ingenieria_comercial > 458) {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> ni los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33070</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=37" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">INGENIERÍA EN CONSTRUCCIÓN</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">20</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">488.95</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="15% NEM + 40% RANKING + 10% LECTORA + 20% M1 + 10% HISTORIA O CIENCIAS + 5% M2">
                                <?php echo $ingenieria_construccion; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 458) {
                            if ($ingenieria_construccion > 458) {
                                if ($cmatematica2 > 0) {
                        ?>
                                    <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></td>
                                <?php
                                } else {
                                ?>
                                    <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                                <?php
                                }
                            } else {
                                ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 458) {
                                if ($ingenieria_construccion > 458) {
                                    if ($cmatematica2 > 0) {
                                        echo "Cumples con los requisitos para la postulación.";
                                    } else {
                                        echo "No realizaste la prueba de <strong>Matematicas M2</strong> la cual es un <strong>*Requisito obligatorio*</strong>.";
                                    }
                                } else {
                                    if ($cmatematica2 > 0) {
                                        echo "No cumples con el <strong>puntaje ponderado</strong> obligatorio para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje ponderado</strong>, ni realizaste la prueba de <strong>Matematicas M2</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                }
                            } else {
                                if ($ingenieria_construccion > 458) {
                                    if ($cmatematica2 > 0) {
                                        echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni realizaste la prueba de <strong>Matematicas M2</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                } else {
                                    if ($cmatematica2 > 0) {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni con el <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni con el <strong>puntaje ponderado</strong>, ni realizaste la prueba de <strong>Matematicas M2</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33023</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=63" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">KINESIOLOGÍA</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">35</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">609.70</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="30% NEM + 40% RANKING + 10% LECTORA + 10% M1 + 10% CIENCIAS">
                                <?php echo $kinesiologia; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 458) {
                            if ($kinesiologia > 458) {
                                if ($cciencias > 0) {
                        ?>
                                    <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></td>
                                <?php
                                } else {
                                ?>
                                    <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                                <?php
                                }
                            } else {
                                ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 458) {
                                if ($kinesiologia > 458) {
                                    if ($cciencias > 0) {
                                        echo "Cumples con los requisitos para la postulación.";
                                    } else {
                                        echo "No realizaste la prueba de <strong>Ciencias</strong> la cual es un <strong>*Requisito obligatorio*</strong>.";
                                    }
                                } else {
                                    if ($cciencias > 0) {
                                        echo "No cumples con el <strong>puntaje ponderado</strong> obligatorio para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje ponderado</strong>, ni realizaste la prueba de <strong>Ciencias</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                }
                            } else {
                                if ($kinesiologia > 458) {
                                    if ($cciencias > 0) {
                                        echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni realizaste la prueba de <strong>Ciencias</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                } else {
                                    if ($cciencias > 0) {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni con el <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni con el <strong>puntaje ponderado</strong>, ni realizaste la prueba de <strong>Ciencias</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33053</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=79" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">MEDICINA</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">50</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">870.80</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="20% NEM + 25% RANKING + 15% LECTORA + 25% M1 + 15% HISTORIA O CIENCIAS">
                                <?php echo $medicina; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 600) {
                            if ($medicina > 650) {
                        ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></td>
                            <?php
                            } else {
                            ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 600) {
                                if ($medicina > 650) {
                                    echo "Cumples con los requisitos de puntaje para la postulación.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            } else {
                                if ($medicina > 650) {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> ni los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33072</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=67" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">NUTRICIÓN Y DIETÉTICA</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">35</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">474.80</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="35% NEM + 35% RANKING + 10% LECTORA + 10% M1 + 10% CIENCIAS">
                                <?php echo $nutricion_dietetica; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 458) {
                            if ($nutricion_dietetica > 458) {
                                if ($cciencias > 0) {
                        ?>
                                    <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></td>
                                <?php
                                } else {
                                ?>
                                    <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                                <?php
                                }
                            } else {
                                ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 458) {
                                if ($nutricion_dietetica > 458) {
                                    if ($cciencias > 0) {
                                        echo "Cumples con los requisitos para la postulación.";
                                    } else {
                                        echo "No realizaste la prueba de <strong>Ciencias</strong> la cual es un <strong>*Requisito obligatorio*</strong>.";
                                    }
                                } else {
                                    if ($cciencias > 0) {
                                        echo "No cumples con el <strong>puntaje ponderado</strong> obligatorio para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje ponderado</strong>, ni realizaste la prueba de <strong>Ciencias</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                }
                            } else {
                                if ($nutricion_dietetica > 458) {
                                    if ($cciencias > 0) {
                                        echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni realizaste la prueba de <strong>Ciencias</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                } else {
                                    if ($cciencias > 0) {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni con el <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni con el <strong>puntaje ponderado</strong>, ni realizaste la prueba de <strong>Ciencias</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33082</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=49" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">PEDAGOGÍA EN CASTELLANO Y COMUNICACIÓN, PARA ENSEÑANZA MEDIA</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">15</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">567.10</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="35% NEM + 35% RANKING + 10% LECTORA + 10% M1 + 10% HISTORIA O CIENCIAS">
                                <?php echo $pedagogia_castellano; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 502) {
                            if ($pedagogia_castellano > 502) {
                        ?>
                                <td class="fa2">
                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Cumples con uno de los cinco requisitos para postular a Pedagogia, Pincha para mas Info..">
                                        <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></a>
                                    </span>
                                </td>
                                <td class="normal">
                                    <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Cumples con uno de los cinco requisitos para postular a Pedagogia, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </td>
                            <?php
                            } else {
                            ?>
                                <td class="fa2">
                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Revisa si cumples con otros requisitos para esta carrera.">
                                        <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                    </span>
                                </td>
                                <td class="normal">
                                    <a class="cambio" href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Revisa si cumples con otros requisitos para postular, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2">
                                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Revisa si cumples con otros requisitos para esta carrera.">
                                    <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </span>
                            </td>
                            <td class="normal">
                                <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Revisa si cumples con otros requisitos para postular, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                            </td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 502) {
                                if ($pedagogia_castellano > 502) {
                                    echo "Cumples con los requisitos de puntaje para la postulación.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            } else {
                                if ($pedagogia_castellano > 502) {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> ni los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33033</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=43" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">PEDAGOGÍA EN EDUCACIÓN BÁSICA, CON MENCIÓN EN LENGUAJE Y MATEMÁTICA</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">15</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">487.50</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="35% NEM + 35% RANKING + 10% LECTORA + 10% M1 + 10% HISTORIA O CIENCIAS">
                                <?php echo $pedagogia_basica; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 502) {
                            if ($pedagogia_basica > 502) {
                        ?>
                                <td class="fa2">
                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Cumples con uno de los cinco requisitos para postular a Pedagogia, Pincha para mas Info..">
                                        <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></a>
                                    </span>
                                </td>
                                <td class="normal">
                                    <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Cumples con uno de los cinco requisitos para postular a Pedagogia, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </td>
                            <?php
                            } else {
                            ?>
                                <td class="fa2">
                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Revisa si cumples con otros requisitos para esta carrera.">
                                        <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                    </span>
                                </td>
                                <td class="normal">
                                    <a class="cambio" href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Revisa si cumples con otros requisitos para postular, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2">
                                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Revisa si cumples con otros requisitos para esta carrera.">
                                    <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </span>
                            </td>
                            <td class="normal">
                                <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Revisa si cumples con otros requisitos para postular, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                            </td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 502) {
                                if ($pedagogia_basica > 502) {
                                    echo "Cumples con los requisitos de puntaje para la postulación.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            } else {
                                if ($pedagogia_basica > 502) {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> ni los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33412</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=55" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">PEDAGOGÍA EN EDUCACIÓN DIFERENCIAL</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">15</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">448.80</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="35% NEM + 35% RANKING + 10% LECTORA + 10% M1 + 10% HISTORIA O CIENCIAS">
                                <?php echo $pedagogia_diferencial; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 502) {
                            if ($pedagogia_diferencial > 502) {
                        ?>
                                <td class="fa2">
                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Cumples con uno de los cinco requisitos para postular a Pedagogia, Pincha para mas Info..">
                                        <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></a>
                                    </span>
                                </td>
                                <td class="normal">
                                    <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Cumples con uno de los cinco requisitos para postular a Pedagogia, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </td>
                            <?php
                            } else {
                            ?>
                                <td class="fa2">
                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Revisa si cumples con otros requisitos para esta carrera.">
                                        <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                    </span>
                                </td>
                                <td class="normal">
                                    <a class="cambio" href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Revisa si cumples con otros requisitos para postular, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2">
                                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Revisa si cumples con otros requisitos para esta carrera.">
                                    <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </span>
                            </td>
                            <td class="normal">
                                <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Revisa si cumples con otros requisitos para postular, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                            </td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 502) {
                                if ($pedagogia_diferencial > 502) {
                                    echo "Cumples con los requisitos de puntaje para la postulación.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            } else {
                                if ($pedagogia_diferencial > 502) {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> ni los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33079</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=45" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">PEDAGOGÍA EN EDUCACIÓN FÍSICA, PARA ENSEÑANZA BÁSICA Y MEDIA</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">15</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">417.70</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="35% NEM + 35% RANKING + 10% LECTORA + 10% M1 + 10% HISTORIA O CIENCIAS">
                                <?php echo $pedagogia_fisica; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 502) {
                            if ($pedagogia_fisica > 502) {
                        ?>
                                <td class="fa2">
                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Cumples con uno de los cinco requisitos para postular a Pedagogia, Pincha para mas Info..">
                                        <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></a>
                                    </span>
                                </td>
                                <td class="normal">
                                    <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Cumples con uno de los cinco requisitos para postular a Pedagogia, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </td>
                            <?php
                            } else {
                            ?>
                                <td class="fa2">
                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Revisa si cumples con otros requisitos para esta carrera.">
                                        <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                    </span>
                                </td>
                                <td class="normal">
                                    <a class="cambio" href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Revisa si cumples con otros requisitos para postular, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2">
                                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Revisa si cumples con otros requisitos para esta carrera.">
                                    <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </span>
                            </td>
                            <td class="normal">
                                <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Revisa si cumples con otros requisitos para postular, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                            </td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 502) {
                                if ($pedagogia_fisica > 502) {
                                    echo "Cumples con los requisitos de puntaje para la postulación.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            } else {
                                if ($pedagogia_fisica > 502) {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> ni los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33032</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=41" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">PEDAGOGÍA EN EDUCACIÓN PARVULARIA</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">15</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">479.60</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="35% NEM + 35% RANKING + 10% LECTORA + 10% M1 + 10% HISTORIA O CIENCIAS">
                                <?php echo $pedagogia_parvularia; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 502) {
                            if ($pedagogia_parvularia > 502) {
                        ?>
                                <td class="fa2">
                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Cumples con uno de los cinco requisitos para postular a Pedagogia, Pincha para mas Info..">
                                        <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></a>
                                    </span>
                                </td>
                                <td class="normal">
                                    <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Cumples con uno de los cinco requisitos para postular a Pedagogia, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </td>
                            <?php
                            } else {
                            ?>
                                <td class="fa2">
                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Revisa si cumples con otros requisitos para esta carrera.">
                                        <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                    </span>
                                </td>
                                <td class="normal">
                                    <a class="cambio" href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Revisa si cumples con otros requisitos para postular, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2">
                                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Revisa si cumples con otros requisitos para esta carrera.">
                                    <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </span>
                            </td>
                            <td class="normal">
                                <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Revisa si cumples con otros requisitos para postular, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                            </td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 502) {
                                if ($pedagogia_parvularia > 502) {
                                    echo "Cumples con los requisitos de puntaje para la postulación.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            } else {
                                if ($pedagogia_parvularia > 502) {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> ni los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33083</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=51" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">PEDAGOGÍA EN HISTORIA Y CIENCIAS SOCIALES PARA ENSEÑANZA MEDIA</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">15</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">640.60</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="35% NEM + 35% RANKING + 10% LECTORA + 10% M1 + 10% HISTORIA O CIENCIAS">
                                <?php echo $pedagogia_historia; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 502) {
                            if ($pedagogia_historia > 502) {
                        ?>
                                <td class="fa2">
                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Cumples con uno de los cinco requisitos para postular a Pedagogia, Pincha para mas Info..">
                                        <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></a>
                                    </span>
                                </td>
                                <td class="normal">
                                    <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Cumples con uno de los cinco requisitos para postular a Pedagogia, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </td>
                            <?php
                            } else {
                            ?>
                                <td class="fa2">
                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Revisa si cumples con otros requisitos para esta carrera.">
                                        <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                    </span>
                                </td>
                                <td class="normal">
                                    <a class="cambio" href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Revisa si cumples con otros requisitos para postular, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2">
                                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Revisa si cumples con otros requisitos para esta carrera.">
                                    <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </span>
                            </td>
                            <td class="normal">
                                <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Revisa si cumples con otros requisitos para postular, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                            </td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 502) {
                                if ($pedagogia_historia > 502) {
                                    echo "Cumples con los requisitos de puntaje para la postulación.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            } else {
                                if ($pedagogia_historia > 502) {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> ni los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33081</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=47" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">PEDAGOGÍA EN INGLÉS PARA ENSEÑANZA BÁSICA Y MEDIA</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">15</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">553.30</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="35% NEM + 35% RANKING + 10% LECTORA + 10% M1 + 10% HISTORIA O CIENCIAS">
                                <?php echo $pedagogia_ingles; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 502) {
                            if ($pedagogia_ingles > 502) {
                        ?>
                                <td class="fa2">
                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Cumples con uno de los cinco requisitos para postular a Pedagogia, Pincha para mas Info..">
                                        <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></a>
                                    </span>
                                </td>
                                <td class="normal">
                                    <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Cumples con uno de los cinco requisitos para postular a Pedagogia, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </td>
                            <?php
                            } else {
                            ?>
                                <td class="fa2">
                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Revisa si cumples con otros requisitos para esta carrera.">
                                        <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                    </span>
                                </td>
                                <td class="normal">
                                    <a class="cambio" href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Revisa si cumples con otros requisitos para postular, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2">
                                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Revisa si cumples con otros requisitos para esta carrera.">
                                    <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </span>
                            </td>
                            <td class="normal">
                                <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Revisa si cumples con otros requisitos para postular, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                            </td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 502) {
                                if ($pedagogia_ingles > 502) {
                                    echo "Cumples con los requisitos de puntaje para la postulación.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            } else {
                                if ($pedagogia_ingles > 502) {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> ni los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33418</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="http://umag.cl/facultades/educacionycienciassociales/deh/?page_id=30" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">PEDAGOGÍA EN MÚSICA PARA EDUCACIÓN INICIAL, BÁSICA Y MEDIA</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">15</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">CARRERA NUEVA</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="35% NEM + 35% RANKING + 10% LECTORA + 10% M1 + 10% HISTORIA O CIENCIAS">
                                <?php echo $pedagogia_musica; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 502) {
                            if ($pedagogia_musica > 502) {
                        ?>
                                <td class="fa2">
                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Cumples con uno de los cinco requisitos para postular a Pedagogia, Pincha para mas Info..">
                                        <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></a>
                                    </span>
                                </td>
                                <td class="normal">
                                    <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Cumples con uno de los cinco requisitos para postular a Pedagogia, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </td>
                            <?php
                            } else {
                            ?>
                                <td class="fa2">
                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Revisa si cumples con otros requisitos para esta carrera.">
                                        <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                    </span>
                                </td>
                                <td class="normal">
                                    <a class="cambio" href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Revisa si cumples con otros requisitos para postular, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2">
                                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Revisa si cumples con otros requisitos para esta carrera.">
                                    <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </span>
                            </td>
                            <td class="normal">
                                <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Revisa si cumples con otros requisitos para postular, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                            </td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 502) {
                                if ($pedagogia_musica > 502) {
                                    echo "Cumples con los requisitos de puntaje para la postulación.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            } else {
                                if ($pedagogia_musica > 502) {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> ni los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33031</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=53" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">PEDAGOGÍA EN MATEMÁTICA PARA ENSEÑANZA MEDIA</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">15</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">666.70</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="30% NEM + 35% RANKING + 10% LECTORA + 10% M1 + 10% HISTORIA O CIENCIAS + 5% M2">
                                <?php echo $pedagogia_matematicas; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 502) {
                            if ($pedagogia_matematicas > 502) {
                                if ($cmatematica2 > 0) {
                        ?>
                                    <td class="fa2">
                                        <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Cumples con uno de los cinco requisitos para postular a Pedagogia, Pincha para mas Info..">
                                            <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></a>
                                        </span>
                                    </td>
                                    <td class="normal">
                                        <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Cumples con uno de los cinco requisitos para postular a Pedagogia, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                    </td>
                                <?php
                                } else {
                                ?>
                                    <td class="fa2">
                                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Revisa si cumples con otros requisitos para esta carrera.">
                                    <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </span>
                            </td>
                            <td class="normal">
                                <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Revisa si cumples con otros requisitos para postular, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                            </td>
                                <?php
                                }
                            } else {
                                ?>
                                <td class="fa2">
                                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Revisa si cumples con otros requisitos para esta carrera.">
                                    <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </span>
                            </td>
                            <td class="normal">
                                <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Revisa si cumples con otros requisitos para postular, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                            </td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2">
                                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Revisa si cumples con otros requisitos para esta carrera.">
                                    <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                                </span>
                            </td>
                            <td class="normal">
                                <a href="https://demre.cl/postulacion/como-postulo-a-una-universidad-p2025/requisitos-postulacion-pedagogia" style="color: black; text-decoration: none;">Revisa si cumples con otros requisitos para postular, Pincha para mas Info..<i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></a>
                            </td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 502) {
                                if ($pedagogia_matematicas > 502) {
                                    if ($cmatematica2 > 0) {
                                        echo "Cumples con los requisitos para la postulación.";
                                    } else {
                                        echo "No realizaste la prueba de <strong>Matematicas M2</strong> la cual es un <strong>*Requisito obligatorio*</strong>.";
                                    }
                                } else {
                                    if ($cmatematica2 > 0) {
                                        echo "No cumples con el <strong>puntaje ponderado</strong> obligatorio para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje ponderado</strong>, ni realizaste la prueba de <strong>Matematicas M2</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                }
                            } else {
                                if ($pedagogia_matematicas > 502) {
                                    if ($cmatematica2 > 0) {
                                        echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni realizaste la prueba de <strong>Matematicas M2</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                } else {
                                    if ($cmatematica2 > 0) {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni con el <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni con el <strong>puntaje ponderado</strong>, ni realizaste la prueba de <strong>Matematicas M2</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33078</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=57" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">PSICOLOGÍA</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">35</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">746.20</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="35% NEM + 35% RANKING + 10% LECTORA + 10% M1 + 10% HISTORIA O CIENCIAS">
                                <?php echo $psicologia; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 458) {
                            if ($psicologia > 458) {
                        ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></td>
                            <?php
                            } else {
                            ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 458) {
                                if ($psicologia > 458) {
                                    echo "Cumples con los requisitos de puntaje para la postulación.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            } else {
                                if ($psicologia > 458) {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                } else {
                                    echo "No cumples con los requisitos de <strong>puntaje promedio</strong> ni los requisitos de <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33024</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=65" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">TERAPIA OCUPACIONAL</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">30</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">420.40</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="40% NEM + 30% RANKING + 10% LECTORA + 10% M1 + 10% CIENCIAS">
                                <?php echo $terapia_ocupacional; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 458) {
                            if ($terapia_ocupacional > 458) {
                                if ($cciencias > 0) {
                        ?>
                                    <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></td>
                                <?php
                                } else {
                                ?>
                                    <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                                <?php
                                }
                            } else {
                                ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 458) {
                                if ($terapia_ocupacional > 458) {
                                    if ($cciencias > 0) {
                                        echo "Cumples con los requisitos para la postulación.";
                                    } else {
                                        echo "No realizaste la prueba de <strong>Ciencias</strong> la cual es un <strong>*Requisito obligatorio*</strong>.";
                                    }
                                } else {
                                    if ($cciencias > 0) {
                                        echo "No cumples con el <strong>puntaje ponderado</strong> obligatorio para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje ponderado</strong>, ni realizaste la prueba de <strong>Ciencias</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                }
                            } else {
                                if ($terapia_ocupacional > 458) {
                                    if ($cciencias > 0) {
                                        echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni realizaste la prueba de <strong>Ciencias</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                } else {
                                    if ($cciencias > 0) {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni con el <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni con el <strong>puntaje ponderado</strong>, ni realizaste la prueba de <strong>Ciencias</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="data-row2 data-container2">
                        <td data-label="Código" class="text-end data-item2">33035</td>
                        <td data-label="Carrera" class="text-start data-item2">
                            <a href="https://admision.umag.cl/?page_id=59" style="display: block; width: 100%; height: 100%; text-decoration: none; color: inherit;">TRABAJO SOCIAL</a>
                        </td>
                        <td data-label="Vacantes 2025" class="data-item2">20</td>
                        <td data-label="Puntaje Último Matriculado 2024" class="data-item2">469.50</td>
                        <td data-label="Puntaje Ponderado de Postulación" class="data-item2">
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="35% NEM + 35% RANKING + 10% LECTORA + 10% M1 + 10% HISTORIA">
                                <?php echo $trabajo_social; ?>
                            </span>
                        </td>
                        <?php
                        if ((($cmatematica1 + $clectora) / 2) > 458) {
                            if ($trabajo_social > 458) {
                                if ($chistoria > 0) {
                        ?>
                                    <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #2ee22b;"></i></td>
                                <?php
                                } else {
                                ?>
                                    <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                                <?php
                                }
                            } else {
                                ?>
                                <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                            <?php
                            }
                        } else {
                            ?>
                            <td class="fa2"><i class="fa-solid fa-circle fa-xl" style="color: #ff0000;"></i></td>
                        <?php
                        }
                        ?>
                        <td class="texto-justificado">
                            <?php
                            if ((($cmatematica1 + $clectora) / 2) > 458) {
                                if ($trabajo_social > 458) {
                                    if ($chistoria > 0) {
                                        echo "Cumples con los requisitos para la postulación.";
                                    } else {
                                        echo "No realizaste la prueba de <strong>Historia</strong> la cual es un <strong>*Requisito obligatorio*</strong>.";
                                    }
                                } else {
                                    if ($chistoria > 0) {
                                        echo "No cumples con el <strong>puntaje ponderado</strong> obligatorio para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje ponderado</strong>, ni realizaste la prueba de <strong>Historia</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                }
                            } else {
                                if ($trabajo_social > 458) {
                                    if ($chistoria > 0) {
                                        echo "No cumples con los requisitos de <strong>puntaje promedio</strong> obligatorios para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni realizaste la prueba de <strong>Historia</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                } else {
                                    if ($chistoria > 0) {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni con el <strong>puntaje ponderado</strong> obligatorios para postular a esta carrera.";
                                    } else {
                                        echo "No cumples con el <strong>puntaje promedio</strong>, ni con el <strong>puntaje ponderado</strong>, ni realizaste la prueba de <strong>Historia</strong> los cuales son <strong>*Requisitos obligatorios*</strong>.";
                                    }
                                }
                            }
                            ?>
                        </td>
                    </tr>
            </table>
        </div>
        <br>
        <div class="text-center m-3">
            <a class="btn bg-light text-black" href="perfil.php">Realizar otra simulacion</a>
        </div>
        <br>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <footer>

        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
                var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
                    return new bootstrap.Popover(popoverTriggerEl)
                })
            });
        </script>
</body>

</html>