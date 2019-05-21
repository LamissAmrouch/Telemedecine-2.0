<h1> test </h1>
<?php foreach ($doctors as $doctor) : ?>
<h3> <?= $doctor->Nom?>  <?= $doctor->Prenom?> </h3>
<a href="/med/<?= $doctor->Specialite_id; ?> "> <p> <?= $doctor->specialite; ?> </p> </a>
<?php endforeach;?>