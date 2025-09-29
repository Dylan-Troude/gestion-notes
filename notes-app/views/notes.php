<ul>
  <?php foreach ($notes as $note): ?>
    <li>
      <strong><?= htmlspecialchars($note['title']) ?></strong>  
      <p><?= nl2br(htmlspecialchars($note['content'])) ?></p>
      <small><?= $note['created_at'] ?></small>
      <a href="index.php?delete=<?= $note['id'] ?>">❌ Supprimer</a>
    </li>
  <?php endforeach; ?>
</ul>