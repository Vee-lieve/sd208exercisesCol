<?php
    session_start();
    $book  = (isset($_SESSION['input'])) ? $_SESSION['input']:array();//ternary operation to check the input session
    
    if(isset($_POST['add'])){
        if(!empty($_POST["bookmark"]) && !empty($_POST["bookmarkURL"])){
            array_push($book, [$_POST['bookmark'] ,$_POST['bookmarkURL']]);
            $_SESSION['input'] = $book;
        }
    }

    if(isset( $_POST['clear'])){
        $_SESSION['input'] = [];
    }
    if(isset($_POST['x'])){
        array_splice($_SESSION['input'], $_POST['id'], 1);
    }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookmark</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="mask bg-col align-items-center">
        <div class="container-fluid">   
            <div class="row">  
            <div class="card mx-auto d-block mw-100" style="height: 34rem; top: 68px;">
                    <div class="card-header bg-transparent">
                        <form action="./index.php" method="POST">
                            <h2 class="text-center mt-3" style="font-family: Philosopher;">Bookmark List</h2>
                            <div class="form-group mt-4 mx-4">
                                <label for="bookmarkName">Bookmark Name :</label>
                                <input type="text" class="form-control" id="bookmark" name="bookmark" aria-describedby="bookmarkName" placeholder="Input bookmark name..">
                            </div>
                            <div class="form-group mt-2 mx-4">
                                <label for="urlName">URL :</label>
                                <input type="text" class="form-control" id="bookmarkURL" name="bookmarkURL" aria-describedby="bookmarkURL" placeholder="Input url..">
                            </div>
                            <input type="submit" class="btn btn-japan-blush btn-sm rounded-pill active mt-1 ml-4 mr-2" name="add" value="Add Bookmark" style="font-size: 16px; width: 9rem;">
                            <input type="submit" class="btn btn-japan-blush btn-sm rounded-pill active mt-1 ml-4 mr-1" name="clear" value="Clear" style="font-size: 16px; width: 9rem;">
                        </form>
                    </div>
                    <div class="card-body mx-4">
                        <?php if(isset($_SESSION['input'])):?>
                        <?php for($id= 0; $id < count($_SESSION['input']); $id++):?>
                        <ul class="list-group" style="list-style-type:none;">
                            <li>
                                <a href='<?php echo $_SESSION['input'][$id][1];?>' target="_blank">
                                    <?php echo $_SESSION['input'][$id][0];?> </a>
                            </li>
                            <li>
                                <form action="index.php" method="POST">
                                    <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>">
                                    <input type="submit" class="button" name="x" value="X" style="width: 2rem; float: right;">
                                </form>
                            </li>
                        </ul>
                        <?php endfor?>
                        <?php endif?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>