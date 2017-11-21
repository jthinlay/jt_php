<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <title>Basic Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h2>Calculator</h2>
    <div class="jumbotron">
    <form class="form-group">
        <input type="text" name="num1" placeholder="number 1" class="form-control"/>
        <input type="text" name="num2" placeholder="number 2" class="form-control"/>
        <select name="operator" class="form-control">
            <option>None</option>
            <option>Add</option>
            <option>Substract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <br/>
        <button type="submit" name="submit" value="submit" class="btn btn-info">Calculete</button>
    </form>
    </div>
    <div class="jumbotron">
    <p><strong>Your answer is: </strong></p>
    <?php
        if(isset($_GET['submit'])){
            $result1 = $_GET['num1'];
            $result2 = $_GET['num2'];
            $operator = $_GET['operator'];
                switch ($operator){
                    case "None":
                        echo "You need to select a method!";
                    break;
                    
                    case "Add":
                        echo $result1 + $result2;
                    break;
                    
                    case "Substract":
                        echo $result1 - $result2;
                    break;
                    
                    case "Multiply":
                        echo $result1 * $result2;
                    break;
                    
                    case "Divide":
                        echo $result1 / $result2;
                    break;
                }
        }
    ?>
    </div>
    </div>
</body>
</html>