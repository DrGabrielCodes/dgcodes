<?php
$title = "Admin Page: DGCodes";
require_once '../public/partials/header.php';

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=dgcodes_database', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdo->prepare('SELECT * FROM users_message ORDER BY date ASC');

$statement = $pdo->prepare('SELECT * FROM users_message ORDER BY date ASC');
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

// echo '<pre>';
// var_dump($users);
// echo '<pre>';


?>
<a class="button" href="./recommend.php" >Recommend me</a>
<main class="main-contents">
<section class="section-container container recommendation-input">
</section>

<table id="table-msg">
   <thead>
      <tr>
         <th>#</th>
         <th>User's name</th>
         <th>Email</th>
         <th>subject</th>
         <th>message</th>
         <th>Email from</th>
         <th>date</th>
      </tr>

   </thead>
   <tbody>
      <?php foreach($users as $i => $user):?>
         <tr>
            <td><?php echo $i + 1 ?> </td>
            <td><?php echo $user['name'] ?> </td>
            <td><?php echo $user['visitors_email'] ?> </td>
            <td><?php echo $user['subject'] ?> </td>
            <td><?php echo $user['message'] ?> </td>
            <td><?php echo $user['email_from'] ?> </td>
            <td><?php echo $user['date'] ?> </td>
            
         </tr>
      <?php endforeach; ?>
   </tbody>
</table>
</main>


<?php require_once '../public/partials/footer.php' ?>
<script src="/scripts/formValidation.js"></script>
</body>

</html>