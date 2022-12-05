
<div class="container">
 <h4 class="text-center"> Inserir Página </h4>
    <form action="?pg=inserirdb" method="post">
        <div class="mb-2">
            <label for="" class="form-label">Nome da Página</label>
            <input type="text" name="nomedapagina" class="form-control" id="" aria-describedby="emailHelp">         
        </div>
        <div class="mb-2">
            <label for="" class="form-label">Link:</label>
            <input type="text" name="link" class="form-control" id="">
        </div>
        <div class="mb-2">
            <label class="form-check-label" for="">Descrição</label>
            <textarea name="descricao" id="" cols="163" rows="1" ></textarea><br><br>
        </div>
        
        <button type="submit"class="btn btn-light"> Enviar </button>
        <button type="cancel"class="btn btn-light"><a href='?pg=listar'> Cancelar </button>     
        
    </form>

</div>
