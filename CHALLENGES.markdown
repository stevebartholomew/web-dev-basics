## 1. Fork this project on github into your own account

* Use the github web interface to 'fork' the project

## 2. Create a branch for your work

```
git branch my_features
```

## 3. Deleting a Todo

* Add form for each row next to the todo title &amp; include the 'id' column from the database
* Set the action to 'delete'
* Write a block of code to execute an SQL `DELETE` query for the item

## 4. Searching TODOs

* Add form at the top of the page to search todo items (hint: set the form 'method' to `GET` & use the `$_GET` hash in PHP instead of `$_POST`
* Edit the `$results = $db->query` line to optionally add a `WHERE description LIKE` statement to the SQL query

## 5. Make it look pretty

* Add a `<style>...</style>` block and add some CSS

