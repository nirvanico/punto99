<?php /* modal form for wetransfer */ ?>


<!-- Modal -->
<div class="modal fade" id="wt-modal" tabindex="-1" role="dialog" aria-labelledby="wt-modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- inizio del form -->

                <form id="target" action="uploader.php">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Nome" required>
                    </div>
                    <div class="form-group">
                        <label for="cognome">Cognome</label>
                        <input type="text" class="form-control" id="cognome" placeholder="Cognome" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input type="email" class="form-control" id="email" placeholder="iltuoindirizzo@mail.it" required>
                    </div>

                    <div class="custom-file form-group">
                        <input type="file" class="custom-file-input" id="customFile" required>
                        <label class="custom-file-label" for="customFile">Carica il file</label>
                    </div>


                </form>

                <!-- fine del form -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
                <input type="submit" form="target" class="btn btn-primary" id="sendbtn">
            </div>
        </div>
    </div>
</div>
