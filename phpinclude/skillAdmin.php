<form class="adminSkill">
    skill : <input type="text" value="<?php echo $v['skill'] ?>" name="skill">
    Valeur : <input type="number" value="<?php echo $v['value'] ?>" name="value"><br>
    Catégorie : <input type="text" value="<?php echo $v['category'] ?>" name="category">
    <input type="hidden" value="<?php echo $v['id'] ?>" name="id">
    <button type="submit" value="submit">Modifier</button>
</form>