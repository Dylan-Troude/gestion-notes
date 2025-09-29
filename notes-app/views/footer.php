<hr>
<p><small>Application codée avec ❤️</small></p>
<!-- head -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

<!-- form -->
<textarea id="content" name="content_md" required></textarea>

<script>
  const mde = new SimpleMDE({
    element: document.getElementById("content"),
    placeholder: "Écris ta note en Markdown…",
    spellChecker: false,          // plus discret pour débuter
    status: false,                // cache la barre de statut
    autosave: { enabled: true, uniqueId: "notes-app-content", delay: 1000 },
    toolbar: ["bold","italic","heading","|","quote","unordered-list","ordered-list","|","link","preview","guide"]
  });
</script>
<!-- scripts de rendu -->
<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dompurify@3.x/dist/purify.min.js"></script>

<div id="rendered"></div>
<script>
  // `contentFromDB` = variable PHP échappée en JSON
  const raw = <?= json_encode($note['content_md'] ?? "") ?>;
  const html = marked.parse(raw);
  document.getElementById('rendered').innerHTML = DOMPurify.sanitize(html);
</script>
</body>
</html>