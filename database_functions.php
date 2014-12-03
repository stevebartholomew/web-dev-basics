<?
class DbConnection extends SQLite3 {
  function __construct($path) {
    $this->open($path);
    $this->exec("CREATE TABLE IF NOT EXISTS todo_items (id integer PRIMARY KEY, description text)");
  }
}
?>
