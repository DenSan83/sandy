<div id="container">
  <h2>Ajouter une devinette</h2>

  <form action="<?php echo HOST;?>ajout.html" method="post">

    <input type="hidden" name="values[action]" value="create">
    <?php if($devinette->getId()): ?>
      <input type="hidden" name="values[id]" value="<?php echo $devinette->getId(); ?>">
      <input type="hidden" name="values[action]" value="edit">
    <?php endif; ?>

    Titre : <input type="text" name="values[name]" value="<?php echo $devinette->getName(); ?>"></br>
    Question : <textarea name="values[question]"><?php echo $devinette->getQuestion(); ?></textarea></br>
    Answer : <textarea name="values[answer]"><?php echo $devinette->getanswer(); ?></textarea></br>
    <input type="submit" value="ajouter" />
  </form>

</div>
