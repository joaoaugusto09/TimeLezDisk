<?php 
include_once './includes/_head.php';
include_once './includes/_header.php';
?> 
<main>
    <section style="width: 100%; justify-content: center;">
        <h1>Contato</h1>
        <div id="forms">
            <label for="Email">E-mail:</label><br>
            <input type="email" id="email" name="email"><br>
            <label for="Telefone">Telefone</label><br>
            <input type="number" id="telefone" name="telefone"><br>
            <label for="Mensagem">Escreva a sua mensagem:</label><br>
            <textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea><br>
            <input type="submit" value="Enviar">

        </div>
    </section>
</main>

<?php
include_once './includes/_footer.php'; 
?>