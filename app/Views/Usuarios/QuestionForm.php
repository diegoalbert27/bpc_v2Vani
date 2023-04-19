<?php echo $helpers->getHeader('Pregunta de Seguridad para Recuperación de Cuenta', 'Usuarios/Seguridad') ?>

<form action="<?php echo $helpers->generateUrl('user', 'createquestion') ?>" method="POST">
    <div class="card shadow mt-3 mb-4">
        <div class="card-body">
            <div class="form-group mb-3">
                <label class="form-label" for="question_1">Pregunta:</label>
                <input class="form-control"  type="text" id="question_1" name="question_1" required>
            </div>
            <div class="form-group">
                <label class="form-label" for="answer_1">Respuesta:</label>
                <input class="form-control"  type="text" id="answer_1" name="answer_1" required>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="form-group mb-3">
                <label class="form-label" for="question_2">Pregunta:</label>
                <input class="form-control"  type="text" id="question_2" name="question_2" required>
            </div>
            <div class="form-group">
                <label class="form-label" for="answer_2">Respuesta:</label>
                <input class="form-control"  type="text" id="answer_2" name="answer_2" required>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="form-group mb-3">
                <label class="form-label" for="question_3">Pregunta:</label>
                <input class="form-control"  type="text" id="question_3" name="question_3" required>
            </div>
            <div class="form-group">
                <label class="form-label" for="answer_1">Respuesta:</label>
                <input class="form-control"  type="text" id="answer_3" name="answer_3" required>
            </div>

            <input type="hidden" id="id" name="id" value="<?php echo $id_user ?>">
        </div>
    </div>

    <div class="text-center mt-4">
        <button class="btn btn-primary" type="submit">Agregar Registro</button>
    </div>
</form>
