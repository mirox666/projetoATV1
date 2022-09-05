<?php
include_once ("../includes/cabecalho.php")
?>
    
    <h1 class="text-center fw-bold mt-5">Cadastre um novo Email</h1>
    <hr>
    <main class="container-fluid mt-5">
        <form action="" method="POST" class="mt-5">
            <section class="container col-md-6">
                <div class="row mb-3">
                    <label for="nomeEmail" class="form-label fw-bold">
                    Email <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="nomeEmail" id="nomeEmail" class="form-control">
                </div>

                <div class="row mb-3">
                    <label for="senha" class="form-label fw-bold">
                    Senha <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="senha" id="senha" class="form-control">
                </div>
            </section>
        </form>
    </main>