    <div id="container">
      <h2>Liste de Devinettes</h2>

      <?php foreach($devinettes as $devinette): ?>
        <div class="question">
          <h3><?php echo $devinette->getName(); ?></h3>
          <?php echo $devinette->getQuestion(); ?>
          </br>
          <button>
            <a href="<?php echo HOST; ?>modify.html/id/<?php echo $devinette->getId(); ?>">
              modifier
            </a>
          </button>
          <button class="deleteButton">
            <a href="<?php echo HOST; ?>delete/id/<?php echo $devinette->getId(); ?>">
              effacer
            </a>
          </button>
          <button class="showAnswer">
            Voir la réponse
          </button>
          <div class="divAnswer">
            <?php echo $devinette->getAnswer(); ?>
          </div>
        </div>
      <?php endforeach; ?>

    </div>

<script type="text/javascript">
  $('.showAnswer').click(function(){
    $(this).next().toggle();
  })
</script>
