<?php

/*
    PHP Basics
    ==========
*/

/*
    Echo and Print - how to view PHP output
    ---------------------------------------

    A​ ​variable​ ​can​ ​be​ ​thought​ ​of,​ ​in​ ​simple​ ​terms,​ ​as​ ​a​ ​‘box’​ ​that​ ​holds​ ​information.​ ​​ ​
    We​ ​can​ ​write​ ​code​ ​to​ ​store information​ ​in​ ​the​ ​‘box’​ ​and​ ​then​ ​retrieve​ ​it​ ​and​ ​use​ ​
    it​ ​as​ ​required​ ​later. 

    A​ ​variable​ ​in​ ​PHP​ ​always​ ​starts​ ​with​ ​a​ ​dollar​ ​sign​ ​$. 

    It​ ​must​ ​then​ ​contain​ ​a​ ​LETTER​ ​or​ ​UNDERSCORE. 

    It​ ​can​ ​then​ ​contain​ ​any​ ​of​ ​the​ ​following​ ​characters: 
        a​ ​b​ ​c​ ​d​ ​e​ ​f​ ​g​ ​h​ ​i​ ​j​ ​k​ ​l​ ​m​ ​n​ ​o​ ​p​ ​q​ ​r​ ​s​ ​t​ ​u​ ​v​ ​w​ ​x​ ​y​ ​z 
        A​ ​B​ ​C​ ​D​ ​E​ ​F​ ​G​ ​H​ ​I​ ​J​ ​K​ ​L​ ​M​ ​N​ ​O​ ​P​ ​Q​ ​R​ ​S​ ​T​ ​U​ ​V​ ​W​ ​X​ ​Y​ ​Z  
        0​ ​1​ ​2​ ​3​ ​4​ ​5​ ​6​ ​7​ ​8​ ​9  
        _ (this ​is ​an ​underscore)

    So,​ ​a​ ​variable​ ​can​ ​contain​ ​any​ ​number​ ​of​ ​letters,​ ​numbers​ ​or​ ​underscores​ ​but​ ​must​ 
    ​start​ ​with​ ​a​ ​letter​ ​or underscore

    E.g. $width this​ ​is​ ​valid​ ​​as​ ​it​ ​starts​ ​with​ ​a​ ​letter 

        $_length            this​ ​is​ ​valid​​ ​as​ ​it​ ​starts​ ​with​ ​an​ ​underscore 
        $3sisters           this​ ​is​ ​invalid​​ ​as​ ​it​ ​starts​ ​with​ ​a​ ​number 
        $_3sisters          this​ ​is​ ​valid 
        $Name               this​ ​is​ ​valid 
        $first_name         this​ ​is​ ​valid 
        $my_first_name      this​ ​is​ ​valid 
        $length&width       this​ ​is​ ​invalid​​ ​as​ ​it​ ​contains​ ​the​ ​&​ ​character 

    Note​ ​that​ ​​$this​​ ​is​ ​a​ ​special​ ​variable​ ​that​ ​cannot​ ​be​ ​assigned. 

    It​ ​is​ ​also​ ​recommended​ ​that​ ​you​ ​avoid​ ​using​ ​variables​ ​that​ ​start​ ​with​ ​underscores​ 
    ​as​ ​there​ ​are​ ​some important​ ​global​ ​variables​ ​that​ use this, ​e.g.​ ​$_POST 

    When​ ​writing​ ​code​ ​I​ ​usually​ ​use​ ​​camelCase​.​ ​​ ​This​ ​is​ ​the​ ​practice​ ​of​ ​writing​ ​
    compound​ ​words​ ​such​ ​that​ ​the first​ ​word​ ​starts​ ​with​ ​a​ ​lowercase​ ​letter​ ​and​ ​
    subsequent​ ​words​ ​begin​ ​with​ ​a​ ​capital​ ​letter.
    
    E.g. $first​N​ame 
    $camel​C​ase 
    $side​L​ength 
    $side​W​idth 
*/

$firstName = "Sipo";

// Print variable to screen
echo $firstName;

// Line break
echo "<br>";

$a = 1;

echo $a;

echo "<br>";

$b = TRUE;

// Print variable to screen
print $b;

