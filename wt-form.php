<?php include "check_if_post.php" ?>
<div class="container p-2">

    <form class="w-50">
        <div class="form-group" id="wt-form">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="comment">Aggiungi un messaggio</label>
            <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        <button type="submit" id="sendbtn" class="btn btn-primary mt-2">Invia</button>
    </form>

</div>
