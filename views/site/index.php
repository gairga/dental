<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>HealthAtom Test!</h1>

        <p class="lead">
Las preguntas detalladas a continuación pueden ser contestadas en el lenguaje de programación que el postulante prefiera.</p>

        <p><a class="btn btn-lg btn-success" href="#">Programación</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div>
                <h2>1.­ Escriba una función/método que determine la cantidad de 0’s a la derecha de n! (factorial) </h2>

               
                <pre><code>   
                    /* BC FACTORIAL
                    * n! = n * (n-1) * (n-2) .. 1 [eg. 5! = 5 * 4 * 3 * 2 * 1 = 120]
                    */
                    function bcfact($n){
                        $factorial=$n;
                        while (--$n>1) $factorial=bcmul($factorial,$n);
                        return $factorial;
                    }
                    print bcfact(7); 
                    print "<br/>"; 
                    print bcfact(70); 
                </pre></code>

                 <p><code>
                     <?php
                        /* BC FACTORIAL
                        * n! = n * (n-1) * (n-2) .. 1 [eg. 5! = 5 * 4 * 3 * 2 * 1 = 120]
                        */
                        function bcfact($n){
                            $factorial=$n;
                            while (--$n>1) $factorial=bcmul($factorial,$n);
                            return $factorial;
                        }
                        print bcfact(5); 
                        print "<br/>"; 
                        print bcfact(50); 
                    ?>  
            </code></p>
                <p><a class="btn btn-default" href="https://github.com/gairga/dental">GitHub &raquo;</a></p>
            </div>
       
           
        </div>

    </div>
</div>
