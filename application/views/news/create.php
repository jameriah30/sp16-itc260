<?php
/**
 * Created by PhpStorm.
 * User: jameriah
 * Date: 4/19/16
 * Time: 3:54 PM
 * views/news/create.php
 */

?>

<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

<label for="title">Title</label>
<input type="input" name="title" /><br />

<label for="text">Text</label>
<textarea name="text"></textarea><br />

<input type="submit" name="submit" value="Create news item" />

</form>
