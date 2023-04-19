<?php echo $helpers->getHeader('Editar Pregunta de Seguridad para Recuperación de Cuenta', 'Usuarios/Seguridad') ?>

<form action="<?php echo $helpers->generateUrl('user', 'editquestion') ?>" method="POST">
    <?php foreach($questions as $index => $question): ?>
        <div class="card shadow mt-3 mb-4">
            <div class="card-body">
                <div class="form-group mb-3">
                    <label class="form-label" for="question_<?php echo $index + 1 ?>">Pregunta:</label>
                    <input class="form-control"  type="text" id="question_<?php echo $index + 1 ?>" name="question_<?php echo $index + 1 ?>" value="<?php echo $question->question ?>" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="answer_<?php echo $index + 1 ?>">Respuesta:</label>
                    <input class="form-control"  type="text" id="answer_<?php echo $index + 1 ?>" name="answer_<?php echo $index + 1 ?>" value="<?php echo base64_decode($question->answer) ?>" required>
                </div>

                <input type="hidden" id="c1" name="id_question_<?php echo $index + 1 ?>" value="<?php echo $question->id ?>">
            </div>
        </div>
    <?php endforeach; ?>

    <input type="hidden" id="id" name="id" value="<?php echo $id_user ?>">

    <div class="text-center mt-4">
        <button class="btn btn-primary" type="submit">Editar Registro</button>
    </div>
</form>
