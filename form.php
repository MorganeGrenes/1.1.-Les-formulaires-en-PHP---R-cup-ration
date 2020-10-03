<!--<form  action=""  method="get">-->
<form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
      <label  for="nom">Prénom : </label>
      <input  type="text"  id="prenom"  name="user_firstname">
    </div>
    <div>
        <label for="subject">Choose a subject:</label>
        <select id="subject" name="subject">
            <option value="subject1">subject1</option>
            <option value="subject2">subject2</option>
            <option value="subject3">subject3</option>
            <option value="subject4">subject4</option>
        </select>
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label  for="telephone">Téléphone :</label>
        <input  type="text"  id="telephone"  name="user_telephone">
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
  <?php
  var_dump($_GET);
  ?>
  