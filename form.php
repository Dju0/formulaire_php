<form action="thanks.php" method="post">
  <div>
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="user_nom" required>
  </div>
  <div>
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="user_prenom" required>
  </div>
  <div>
    <label for="courriel">Courriel :</label>
    <input type="email" id="courriel" name="user_email" required>
  </div>
  <div>
    <label for="telephone">Téléphone :</label>
    <input type="tel" id="telephone" name="user_telephone" required>
  </div>
  <div>
  <label for="sujet">Sujet :</label>
    <select id="sujet" name="user_sujet">
      <option value="question">Question générale</option>
      <option value="support">Support technique</option>
      <option value="feedback">Commentaires et suggestions</option>
    </select>
  </div>
  <div>
    <label for="message">Message :</label>
    <textarea id="message" name="user_message" required></textarea>
  </div>
  <div class="button">
    <button type="submit">Envoyer votre message</button>
  </div>
</form>
