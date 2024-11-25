<?php include "inc/header.php" ?>
<div class="content">
<section>
<h2 style="font-size: 25px; text-align:center;">Plano de viagem EnerSync</h2>
</section>
<section>
<form action="">
    <label for="">De onde você quer sair?</label> <br>
    <input type="text" placeholder="Escreva o local aqui"> <br><br>
    <label for="">Para onde vamos?</label> <br>
    <input type="text" placeholder="Escreva o destino aqui">
<br>
<br>
    <label for="">Qual a marca do seu veículo?</label>
    <br>
    <input type="radio" name="marca">
    <label for="dado">Audi</label>
    <br>
    <input type="radio" name="marca">
    <label for="dado">BMW</label>
    <br>
    <input type="radio" name="marca">
    <label for="dado">BYD</label>
    <br>
    <input type="radio" name="marca">
    <label for="dado">Porsche</label>
    <br>
    <input type="radio" name="marca">
    <label for="dado">Tesla</label>
    <br>
    <br>
    <label for="">Qual o modelo?</label>
    <br>
    <select name="" id="" placeholder="">
        
        <option value="escolha">Escolha Aqui </option>
        <option value="modelo3">Dolphin</option>
        <option value="modelo4">Dolphin Mini</option>
        
        <option value="modelo7">i8</option>
        <option value="modelo8">iX</option>
        <option value="modelo6">Model Y</option>
        <option value="modelo1">Q6 E-tron</option>
        <option value="modelo2">Seal</option>
        <option value="modelo9">Taycan</option>

    </select>
    <br>
    <br>
    <label for="">Qual a porcetagem da bateria do seu veículo na hora de partir?</label>
    <br>
    <select name="" id="">
        <option value="%">Escolha Aqui</option>
        <option value="%">10%</option>
        <option value="%">20%</option>
        <option value="%">30%</option>
        <option value="%">40%</option>
        <option value="%">50%</option>
        <option value="%">60%</option>
        <option value="%">70%</option>
        <option value="%">80%</option>
        <option value="%">90%</option>
        <option value="%">100%</option>
    </select>
    <br><br><br>
    
    <button class="botaoform" type="submit"><a href="plano2.php">Ver plano de viagem</a></button>
    
</form></section>
</div>
<?php include "inc/footer.php" ?>
