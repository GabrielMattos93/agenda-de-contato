
<?php include_once("templates/header.php"); ?>

<div class="container">
    <?php if(isset($msg) && $msg != ''): ?> 
        <p id="msg"><?php echo $msg?></p>
        <?php endif; ?>
        <h1 id="main-title">
            Minha Agenda
        </h1>
        <?php if(count($contacts) > 0): ?>
       
          <table class="table" id="contacts-table">
              <thead>
                  <th scope="col">#</th>
                  
                  <th scope="col">Nome</th>
                  
                  <th scope="col">Telefone</th>
                  
                  <th scope="col"></th>
              </thead>
              <tbody>
                  <?php foreach ($contacts as $contact): ?>
                    
                  <tr>
                      <td scope="row"><?php echo $contact["id"]  ?></td>
                      <td scope="row"><?php echo $contact["name"]  ?></td>
                      <td scope="row"><?php echo $contact["phone"]  ?></td>
                      <td class="action">
                          <a href="<?php $BASE_URL ?>./show.php?id=<?php echo $contact["id"] ?>"><i class="fas fa-eye check-icon"></i> </a>
                          <a href="<?php $BASE_URL ?>./edit.php?id=<?php echo $contact["id"] ?>"><i class="far fa-edit edit-icon"></i> </a>
                          <form class="delete-form"action="<?php $BASE_URL ?>./config/process.php" method="POST">
                              <input type="hidden" name="type" value="delete">
                              <input type="hidden" name="id" value="<?php echo $contact["id"] ?>">
                          <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                  </form>
                </td>
                  </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
            <?php else: ?>
                <p id="empty-list-text">
                    Ainda não há contatos na sua agenda, <a href="<?php $BASE_URL ?>./create.php">Clique aqui para adicionar
                </p>
                <?php endif; ?>
</div>

<?php include_once("templates/footer.php"); ?>