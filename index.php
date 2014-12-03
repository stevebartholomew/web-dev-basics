<?
require("database_functions.php");

$db = new DbConnection("todos.db");

if($_POST["action"] == "add") {
  $db->exec("INSERT INTO todo_items (description) VALUES ('" . $_POST["description"] . "')");
  header("Location: index.php");
}
else {
?>

<html>
  <head>
    <title>My Todo List</title>
  </head>

  <body>
    <h1>My Todo List</h1>
    <form action="index.php" method="post">
      <input type="hidden" name="action" value="add"/>

      <label for="description">New Todo</label>
      <input type="text" id="description" name="description"/>
      <input type="submit" value="Add"/>
    </form>

    <table>
      <?
        $result = $db->query("SELECT description FROM todo_items");

        if(!$result) {
           ?>Couldn't get todos<?
        }
        else {
           while($row = $result->fetchArray()) {
            ?>
            <tr>
              <td><?= $row[0] ?></td>
            </tr>
            <?
           }
        }
      ?>
    </table>
  </body>
</html>
<?
}
?>
