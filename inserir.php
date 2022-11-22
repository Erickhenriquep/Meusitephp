<h4> Inserir Página </h4>

<form action="?pg=inserirdb" method="post">

    <label for=""> Nome da Página:</label> <input type="text" name="nomedapagina" required="" ><br><br>
    <label for=""> Link:</label> <input type="text" name="link" required="" ><br><br>
    <label for=""> Descrição</label><textarea name="descricao" id="" cols="10" rows="5" required></textarea><br><br>
    
    <button type="submit"> Enviar </button>
    <button type=" cancel"> Cancelar </button>
    <button type=" cancel"> <a href='?pg=listar'> Voltar </button>
    
</form>