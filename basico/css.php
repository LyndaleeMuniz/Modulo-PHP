<div class ="titulo">Integração CSS</div>


<h1 center>
<?php 
echo 'Olá';
echo '<small>'; 
echo ' Mundo '; 
echo '</small>';
?>

</h1>

<?="<div center azul> Outra forma de me 'expressar'!</div>"?>
<br>

<div center><button dobro><?=" legal" ?></button></div>


<style>
button {
    padding: 5px <?= 2 * 10?>px;
    background-color:#FFC0CB;
    color:#363636;
    font-weight: bold;
    border-radius: 10px;
 
}

[center] {
    display: flex;
    justify-content: center;

}



<?= "[azul]" ?> {

    color: #ff69b4;
}

[dobro] {

font-size: 2rem;

}

</style>


<!--podemos colocar 20px,, porém, utilizando tag PHP é uma forma legal de brincar, 
o resultado sai direto no Browser. Referencia a Linha 27 :D -->     
