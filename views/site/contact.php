<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1>MODELO DE DATOS</h1>

    <p>
        
1.­ Un colegio necesita un sistema para administrar sus cursos. El sistema tiene que suportar que se le ingresen varios cursos. Cada curso tendrá un profesor a cargo y una serie de alumnos inscritos. Cada profesor, así como cada alumno puede estar en más de un curso. Además cada curso tendrá una cantidad no determinada de pruebas, y el sistema debe permitir ingresar la nota para cada alumno en cada prueba. Todas las pruebas valen lo mismo.
Escriba a continuación las tablas que utilizaría para resolver este problema con los campos y llaves de éstas. Intente hacer el sistema lo más robusto posible, pero sin incluir datos adicionales a los que se plantean acá.

    </p>

    <pre>
        <code>
            
                CREATE TABLE Alumno
                (
                rut int,
                nombre varchar(255),
                apellido varchar(255),
                id_curso integer(255)
                );

                CREATE TABLE Profesor
                (
                rut int,
                nombre varchar(255),
                apellido varchar(255),
                id_curso_dicta integer(255)
                );

                CREATE TABLE Cursos
                (
                id_curso int,
                nombre varchar(255),
                id_prof integer
                );

                CREATE TABLE Notas
                (
                id_curso integer,
                id_alumno integer,
                nota integer(255),
                id_profesor integer,
                average integer,
                id_nota integer
                );

        </code>

    </pre>

    <p>
        2.­ Escriba una Query que entregue la lista de alumnos para el curso “programación”.
    </p>

    <pre>
        <code>
            SELECT  a.nombre, a.nombre, a.rut
            FROM alumnos a, cursos c where c.name=”Programacion”
            ORDER BY a.rut DESC
        </code>
    </pre>

    <p>
        3.­ Escriba una Query que calcule el promedio de notas de un alumno en un curso.
    </p>

    <pre>
        <code>
            SELECT a.nombre, a.apellido, n.average, n.average-(SELECT max(average) FROM alumnos )
            as diferencia
            FROM alumnos
            WHERE a.name ='Gabriela';
        </code>
    </pre>

    <p>
        4.­ Escriba una Query que entregue a los alumnos y el promedio que tiene en cada ramo.
    </p>

    <pre>
        <code>
            select avg(n.notas) from alumnos a, notas n, cursos c where c.cursos=c.cursos
        </code>
    </pre>
   <p>
        5.­Escriba una Query que liste a todos los alumnos con más de un ramo con promedio rojo.
    </p>
    <p>
    <pre>
        <code>
           SELECT a.nombre, n.average, average-(SELECT min(average) FROM alumnos) as diferencia
            FROM alumnos a, notas n ;
        </code>
    </pre>    
    </p>

    <p>
    6.­ Se tiene una tabla con información de jugadores de tenis: PLAYERS(Nombre, Pais, Ranking). Suponga que Ranking es un número de 1 a 100 que es distinto para cada jugador. Si la tabla en un momento dado tiene solo 20 tuplas, indique cuantas tuplas tiene la tabla que resulta de la siguiente consulta:<br/>
        <pre>
            <code>
            SELECT c1.Nombre, c2.Nombre FROM PLAYERS c1, PLAYERS c2 WHERE c1.Ranking > c2.Ranking
            </code>
        </pre><br/>    
            a) 400 <br/>
            b) 190 <br/>
            c) 20 <br/>
            d) imposible saberlo <br/>
    </p>

    <h1>Diseño</h1>
    <p>
    
        1.­ Si usted estuviera resolviendo el problema del colegio con programación orientada a objetos, defina que clases usaría, métodos y las variables de estas clases. Puede utilizar el lenguaje que más le acomode o bien pseudos código.

        <p>
            Una vez analizado el todo el proyecto, construyo la BD con sus respectivas tablas: Ej: Profesor, Cursos, Notas, Horarios, Matriculas, Asistencia. 

            Estas tablas definidas serian mis modelos en los cuales trabajaria. Y apartir de alli prodria tener determinas funciones que me calculen por ejemplo: Promedio general del curso, promedio de un alumnos. 
        </p>
    </p>    
        2.­ Diseñe un mazo de cartas (orientado a objetos) con propiedades y métodos básicos que considere para ser utilizado en distintas aplicaciones que utilicen cartas.
    </p>
</div>
