<?php 

include_once 'init.php';
include_once 'login_functions.php';
include_once 'messages_functions.php';
include_once 'categories_functions.php';

$arraymsg = array_reverse(get_messages());
//$arraymsg = get_messages();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mural</title>
    <link rel="stylesheet" href="/assets/styles.css">
</head>
<body>
    <nav>
        <ul>
            <?php if(!is_logged()): ?>
            <li><a href="reg_login.php">Registro / Login</a></li>
            <?php else: ?>
                <li><?= currentUser()['name'] ?> <span>(<?= currentUser()['username'] ?>)</span></li>
                <li><a href="logout.php">Sair</a></li>
            <?php endif ?>
        
        </ul>
    </nav>

    <h1>Mural</h1>
    <h3>Mensagens</h3>
    <?php if(is_logged()): ?>
         <form action="addMessage.php" class="new-message" method="POST">
        <fieldset>
            <legend>Nova mensagem</legend>
            <textarea name="message" cols="30" rows="10" placeholder="Mensagem"></textarea>
            <select name="category" required="">
                <option value="" readonly>Escolha a categoria</option>
                <option value="" disabled>--</option>
                <?php foreach (get_categories() as $id => $category): ?>
                    <option value="<?= $id ?>"><?= $category['category']?></option>                 
                <?php endforeach ?>
            </select>
            <a href="new_category.php">Nova categoria</a>
            <input type="submit" value="enviar">
        </fieldset>
    </form>
    <?php endif ?>


    <?php foreach($arraymsg as $i => $mensagem): ?>
        <?php if (!is_logged()): ?>
                <div class="message">
            <?php else: ?>
            <?php if ($mensagem['user']['username'] == currentUser()['username']): ?>
                <div class="message from-user">
                <?php else: ?>
                    <div class="message">
             <?php endif ?>
        <?php endif ?>
      
        <?php foreach (get_categories() as $id => $categories):?>
                <?php if(!is_logged()): ?>
                    <?php if ($mensagem['category']['id'] == $categories['id']): ?>
                        
                    <div class="category category-<?= $categories['id'] ?>"><?= $categories['category']?></div>
                    <?php endif ?>

                    <?php else: ?>
                    <?php if($mensagem['user']['username'] == currentUser()['username'] ): ?>
                        
                        <?php if ($mensagem['category']['id'] == $categories['id']): ?>
                        
                            <div class="category category-<?= $categories['id'] ?>"><?= $categories['category']?> <a href="removeMessage.php?id=<?= $mensagem['category']['id'] ?> " class="del" title="Remover mensagem">&times;</a></div> 
                        <?php endif ?>
                      <?php else: ?>
                        <?php if ($mensagem['category']['id'] == $categories['id']): ?>
                        
                            <div class="category category-<?= $categories['id'] ?>"><?= $categories['category']?></div>
                        <?php endif ?>

                  
                    <?php endif ?>
                
                <?php endif ?>
        <?php endforeach ?>

            <div class="menssage-text"> <?=$mensagem['message'] ?></div>
            <div class="author_date">
                <div class="author"><?= $mensagem['user']['username'] ?></div>
                <div class="date">19/04/2019</div>
            </div>
            </div>
        </div>

    <?php endforeach ?>
</body>
</html>