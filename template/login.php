<?php include __DIR__."/base/header.php" ?>


  <div class="container">

  
          

     <div class=" d-flex justify-content-center align-items-center " style="height: 100vh; ">
        <form class="col-4" action="<?php echo $URL_BASE ?>chatgpt/logar" method="POST" >

      <?php if(isset($_SESSION['msg_error'])): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><?php echo  $_SESSION['msg_error'] ?></strong>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>


                <h1 class="text-center fs-3" id="titleLogin" >Login</h1>
                <div class="mb-3">
                    <label for="loginEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="loginEmail" aria-describedby="emailHelp" required>
                </div>
            
                <div class="mb-3">
                    <label for="loginPassword" class="form-label">Senha</label>
                    <input type="password" class="form-control" name="password" id="loginPassword" required>
                </div>
        
                <button type="submit" class="btn btn-success w-100">Logar</button>

            </form>
       </div>

    </div>



<?php include  __DIR__."/base/footer.php" ?>