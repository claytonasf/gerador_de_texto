<?php include __DIR__ . "/base/header.php" ?>

<div class="fixed-top d-flex justify-content-end p-5">

  <ul>
    <li class="d-flex flex-column justify-content-center  align-items-center">
      <svg class="" role="button" data-bs-toggle="dropdown" aria-expanded="false" fill="#000000" width="36px" height="36px" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <path d="M228,128A100,100,0,1,0,60.71,201.90967a3.97048,3.97048,0,0,0,.842.751,99.79378,99.79378,0,0,0,132.8982-.00195,3.96558,3.96558,0,0,0,.83813-.74756A99.76267,99.76267,0,0,0,228,128ZM36,128a92,92,0,1,1,157.17139,64.87207,75.616,75.616,0,0,0-44.50782-34.04053,44,44,0,1,0-41.32714,0,75.61784,75.61784,0,0,0-44.50782,34.04A91.70755,91.70755,0,0,1,36,128Zm92,28a36,36,0,1,1,36-36A36.04061,36.04061,0,0,1,128,156ZM68.86475,198.417a68.01092,68.01092,0,0,1,118.27.00049,91.80393,91.80393,0,0,1-118.27-.00049Z"></path>
        </g>
      </svg> &nbsp; &nbsp;
      <?php echo "Olá, " . $_SESSION['user']; ?>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="<?php echo $URL ?>logout">Sair</a></li>
        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#updatePassword">Alterar Senha</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#userList">Listar Usuário</a></li>
        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#userCreate">Cadastro de Usuário</a></li>
      </ul>
    </li>
  </ul>
  &nbsp; &nbsp; &nbsp; &nbsp;
  <svg data-bs-toggle="modal" data-bs-target="#config" width="34px" height="34px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
    <g id="SVGRepo_iconCarrier">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2788 2.15224C13.9085 2 13.439 2 12.5 2C11.561 2 11.0915 2 10.7212 2.15224C10.2274 2.35523 9.83509 2.74458 9.63056 3.23463C9.53719 3.45834 9.50065 3.7185 9.48635 4.09799C9.46534 4.65568 9.17716 5.17189 8.69017 5.45093C8.20318 5.72996 7.60864 5.71954 7.11149 5.45876C6.77318 5.2813 6.52789 5.18262 6.28599 5.15102C5.75609 5.08178 5.22018 5.22429 4.79616 5.5472C4.47814 5.78938 4.24339 6.1929 3.7739 6.99993C3.30441 7.80697 3.06967 8.21048 3.01735 8.60491C2.94758 9.1308 3.09118 9.66266 3.41655 10.0835C3.56506 10.2756 3.77377 10.437 4.0977 10.639C4.57391 10.936 4.88032 11.4419 4.88029 12C4.88026 12.5581 4.57386 13.0639 4.0977 13.3608C3.77372 13.5629 3.56497 13.7244 3.41645 13.9165C3.09108 14.3373 2.94749 14.8691 3.01725 15.395C3.06957 15.7894 3.30432 16.193 3.7738 17C4.24329 17.807 4.47804 18.2106 4.79606 18.4527C5.22008 18.7756 5.75599 18.9181 6.28589 18.8489C6.52778 18.8173 6.77305 18.7186 7.11133 18.5412C7.60852 18.2804 8.2031 18.27 8.69012 18.549C9.17714 18.8281 9.46533 19.3443 9.48635 19.9021C9.50065 20.2815 9.53719 20.5417 9.63056 20.7654C9.83509 21.2554 10.2274 21.6448 10.7212 21.8478C11.0915 22 11.561 22 12.5 22C13.439 22 13.9085 22 14.2788 21.8478C14.7726 21.6448 15.1649 21.2554 15.3694 20.7654C15.4628 20.5417 15.4994 20.2815 15.5137 19.902C15.5347 19.3443 15.8228 18.8281 16.3098 18.549C16.7968 18.2699 17.3914 18.2804 17.8886 18.5412C18.2269 18.7186 18.4721 18.8172 18.714 18.8488C19.2439 18.9181 19.7798 18.7756 20.2038 18.4527C20.5219 18.2105 20.7566 17.807 21.2261 16.9999C21.6956 16.1929 21.9303 15.7894 21.9827 15.395C22.0524 14.8691 21.9088 14.3372 21.5835 13.9164C21.4349 13.7243 21.2262 13.5628 20.9022 13.3608C20.4261 13.0639 20.1197 12.558 20.1197 11.9999C20.1197 11.4418 20.4261 10.9361 20.9022 10.6392C21.2263 10.4371 21.435 10.2757 21.5836 10.0835C21.9089 9.66273 22.0525 9.13087 21.9828 8.60497C21.9304 8.21055 21.6957 7.80703 21.2262 7C20.7567 6.19297 20.522 5.78945 20.2039 5.54727C19.7799 5.22436 19.244 5.08185 18.7141 5.15109C18.4722 5.18269 18.2269 5.28136 17.8887 5.4588C17.3915 5.71959 16.7969 5.73002 16.3099 5.45096C15.8229 5.17191 15.5347 4.65566 15.5136 4.09794C15.4993 3.71848 15.4628 3.45833 15.3694 3.23463C15.1649 2.74458 14.7726 2.35523 14.2788 2.15224ZM12.5 15C14.1695 15 15.5228 13.6569 15.5228 12C15.5228 10.3431 14.1695 9 12.5 9C10.8305 9 9.47716 10.3431 9.47716 12C9.47716 13.6569 10.8305 15 12.5 15Z" fill="#404040"></path>
    </g>
  </svg>


</div>

<div class="conatiner">


  <main class="d-flex justify-content-center  " style="height: 100vh;">


    <div class="col-md-4  align-self-center">
      <div class="d-flex gap-2 justify-content-center">
        <svg class="text-center" width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg" role="img">
          <title>ChatGPT</title><text x="-9999" y="-9999">ChatGPT</text>
          <path d="M37.5324 16.8707C37.9808 15.5241 38.1363 14.0974 37.9886 12.6859C37.8409 11.2744 37.3934 9.91076 36.676 8.68622C35.6126 6.83404 33.9882 5.3676 32.0373 4.4985C30.0864 3.62941 27.9098 3.40259 25.8215 3.85078C24.8796 2.7893 23.7219 1.94125 22.4257 1.36341C21.1295 0.785575 19.7249 0.491269 18.3058 0.500197C16.1708 0.495044 14.0893 1.16803 12.3614 2.42214C10.6335 3.67624 9.34853 5.44666 8.6917 7.47815C7.30085 7.76286 5.98686 8.3414 4.8377 9.17505C3.68854 10.0087 2.73073 11.0782 2.02839 12.312C0.956464 14.1591 0.498905 16.2988 0.721698 18.4228C0.944492 20.5467 1.83612 22.5449 3.268 24.1293C2.81966 25.4759 2.66413 26.9026 2.81182 28.3141C2.95951 29.7256 3.40701 31.0892 4.12437 32.3138C5.18791 34.1659 6.8123 35.6322 8.76321 36.5013C10.7141 37.3704 12.8907 37.5973 14.9789 37.1492C15.9208 38.2107 17.0786 39.0587 18.3747 39.6366C19.6709 40.2144 21.0755 40.5087 22.4946 40.4998C24.6307 40.5054 26.7133 39.8321 28.4418 38.5772C30.1704 37.3223 31.4556 35.5506 32.1119 33.5179C33.5027 33.2332 34.8167 32.6547 35.9659 31.821C37.115 30.9874 38.0728 29.9178 38.7752 28.684C39.8458 26.8371 40.3023 24.6979 40.0789 22.5748C39.8556 20.4517 38.9639 18.4544 37.5324 16.8707ZM22.4978 37.8849C20.7443 37.8874 19.0459 37.2733 17.6994 36.1501C17.7601 36.117 17.8666 36.0586 17.936 36.0161L25.9004 31.4156C26.1003 31.3019 26.2663 31.137 26.3813 30.9378C26.4964 30.7386 26.5563 30.5124 26.5549 30.2825V19.0542L29.9213 20.998C29.9389 21.0068 29.9541 21.0198 29.9656 21.0359C29.977 21.052 29.9842 21.0707 29.9867 21.0902V30.3889C29.9842 32.375 29.1946 34.2791 27.7909 35.6841C26.3872 37.0892 24.4838 37.8806 22.4978 37.8849ZM6.39227 31.0064C5.51397 29.4888 5.19742 27.7107 5.49804 25.9832C5.55718 26.0187 5.66048 26.0818 5.73461 26.1244L13.699 30.7248C13.8975 30.8408 14.1233 30.902 14.3532 30.902C14.583 30.902 14.8088 30.8408 15.0073 30.7248L24.731 25.1103V28.9979C24.7321 29.0177 24.7283 29.0376 24.7199 29.0556C24.7115 29.0736 24.6988 29.0893 24.6829 29.1012L16.6317 33.7497C14.9096 34.7416 12.8643 35.0097 10.9447 34.4954C9.02506 33.9811 7.38785 32.7263 6.39227 31.0064ZM4.29707 13.6194C5.17156 12.0998 6.55279 10.9364 8.19885 10.3327C8.19885 10.4013 8.19491 10.5228 8.19491 10.6071V19.808C8.19351 20.0378 8.25334 20.2638 8.36823 20.4629C8.48312 20.6619 8.64893 20.8267 8.84863 20.9404L18.5723 26.5542L15.206 28.4979C15.1894 28.5089 15.1703 28.5155 15.1505 28.5173C15.1307 28.5191 15.1107 28.516 15.0924 28.5082L7.04046 23.8557C5.32135 22.8601 4.06716 21.2235 3.55289 19.3046C3.03862 17.3858 3.30624 15.3413 4.29707 13.6194ZM31.955 20.0556L22.2312 14.4411L25.5976 12.4981C25.6142 12.4872 25.6333 12.4805 25.6531 12.4787C25.6729 12.4769 25.6928 12.4801 25.7111 12.4879L33.7631 17.1364C34.9967 17.849 36.0017 18.8982 36.6606 20.1613C37.3194 21.4244 37.6047 22.849 37.4832 24.2684C37.3617 25.6878 36.8382 27.0432 35.9743 28.1759C35.1103 29.3086 33.9415 30.1717 32.6047 30.6641C32.6047 30.5947 32.6047 30.4733 32.6047 30.3889V21.188C32.6066 20.9586 32.5474 20.7328 32.4332 20.5338C32.319 20.3348 32.154 20.1698 31.955 20.0556ZM35.3055 15.0128C35.2464 14.9765 35.1431 14.9142 35.069 14.8717L27.1045 10.2712C26.906 10.1554 26.6803 10.0943 26.4504 10.0943C26.2206 10.0943 25.9948 10.1554 25.7963 10.2712L16.0726 15.8858V11.9982C16.0715 11.9783 16.0753 11.9585 16.0837 11.9405C16.0921 11.9225 16.1048 11.9068 16.1207 11.8949L24.1719 7.25025C25.4053 6.53903 26.8158 6.19376 28.2383 6.25482C29.6608 6.31589 31.0364 6.78077 32.2044 7.59508C33.3723 8.40939 34.2842 9.53945 34.8334 10.8531C35.3826 12.1667 35.5464 13.6095 35.3055 15.0128ZM14.2424 21.9419L10.8752 19.9981C10.8576 19.9893 10.8423 19.9763 10.8309 19.9602C10.8195 19.9441 10.8122 19.9254 10.8098 19.9058V10.6071C10.8107 9.18295 11.2173 7.78848 11.9819 6.58696C12.7466 5.38544 13.8377 4.42659 15.1275 3.82264C16.4173 3.21869 17.8524 2.99464 19.2649 3.1767C20.6775 3.35876 22.0089 3.93941 23.1034 4.85067C23.0427 4.88379 22.937 4.94215 22.8668 4.98473L14.9024 9.58517C14.7025 9.69878 14.5366 9.86356 14.4215 10.0626C14.3065 10.2616 14.2466 10.4877 14.2479 10.7175L14.2424 21.9419ZM16.071 17.9991L20.4018 15.4978L24.7325 17.9975V22.9985L20.4018 25.4983L16.071 22.9985V17.9991Z" fill="currentColor"></path>
        </svg>
        <h1 class="mb-5 fs-3 text-center"> API ChatGPT</h1>
      </div>

      <div class="form">
        <form class="d-flex flex-column" id="formGTP" onsubmit="event.preventDefault(); uploadFile()" action="" method="POST">
          <div class="input-group mb-3">
            <input type="file" class="form-control" name="csvFile" id="csvFile">
            <label class="input-group-text" for="filegpt">CSV</label>
          </div>
          <button type="submit" class=" btn btn-success" style="width: 80%; margin:0 auto;">Enviar</button><br>
          <a href="<?php echo  $URL ?>planilha-base" class="text-center text-decoration-none text-success" download>Download da planilha base em CSV </a>
        </form>
      </div>

      <div class="loding" style="display: none; flex-direction: column;">
        <div class="loader" style="margin:8% auto;"></div>
        <p><strong>Gerando Texto da palavra chave:</strong> <span id="lodingKeyword"> </span></p>
        <p><strong>Textos Gerados:</strong> <span id="countKeyword"> </span></p>
        <p><strong>Erro ao Gerar:</strong> <span id="countError"> </span></p>

        <span id="element"></span>
      </div>


    </div>
  </main>
</div>


<!-- Modal List User-->
<div class="modal  fade " id="userList" tabindex="-1" aria-labelledby="userList" aria-hidden="true">
  <div class="modal-dialog modal-lg ">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Lista de Usuário</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Email</th>
              <th scope="col">Deletar</th>
            </tr>
          </thead>
          <tbody>

            <?php foreach ($users as $data) : ?>
              <tr>
                <th scope="row"><?php echo  $data['name'] ?></th>
                <td><?php echo  $data['email'] ?></td>
                <td>

                  <form action="<?php echo $URL ?>delete/user" method="POST">
                    <input type="hidden" name="delete" value="<?php echo  $data['email'] ?>" />
                    <button type="submit"> <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7628 9H7.63719C7.18864 9 6.82501 9.37295 6.82501 9.833V16.5C6.82501 17.8807 7.91632 19 9.26251 19H14.1375C14.784 19 15.404 18.7366 15.8611 18.2678C16.3182 17.7989 16.575 17.163 16.575 16.5V9.833C16.575 9.37295 16.2114 9 15.7628 9Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M14.625 7L13.9191 5.553C13.7541 5.21427 13.4167 5.0002 13.0475 5H10.3526C9.98338 5.0002 9.64596 5.21427 9.48092 5.553L8.77502 7H14.625Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path d="M10.8247 12.333C10.8247 11.9188 10.4889 11.583 10.0747 11.583C9.66047 11.583 9.32469 11.9188 9.32469 12.333H10.8247ZM9.32469 15.666C9.32469 16.0802 9.66047 16.416 10.0747 16.416C10.4889 16.416 10.8247 16.0802 10.8247 15.666H9.32469ZM14.0753 12.333C14.0753 11.9188 13.7396 11.583 13.3253 11.583C12.9111 11.583 12.5753 11.9188 12.5753 12.333H14.0753ZM12.5753 15.666C12.5753 16.0802 12.9111 16.416 13.3253 16.416C13.7396 16.416 14.0753 16.0802 14.0753 15.666H12.5753ZM14.625 6.25C14.2108 6.25 13.875 6.58579 13.875 7C13.875 7.41421 14.2108 7.75 14.625 7.75V6.25ZM16.575 7.75C16.9892 7.75 17.325 7.41421 17.325 7C17.325 6.58579 16.9892 6.25 16.575 6.25V7.75ZM8.77501 7.75C9.18923 7.75 9.52501 7.41421 9.52501 7C9.52501 6.58579 9.18923 6.25 8.77501 6.25V7.75ZM6.82501 6.25C6.4108 6.25 6.07501 6.58579 6.07501 7C6.07501 7.41421 6.4108 7.75 6.82501 7.75V6.25ZM9.32469 12.333V15.666H10.8247V12.333H9.32469ZM12.5753 12.333V15.666H14.0753V12.333H12.5753ZM14.625 7.75H16.575V6.25H14.625V7.75ZM8.77501 6.25H6.82501V7.75H8.77501V6.25Z" fill="#000000"></path>
                        </g>
                      </svg></button>
                  </form>

                </td>
              </tr>
            <?php endforeach; ?>

          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>



<!-- Modal Create User-->
<div class="modal fade" id="userCreate" tabindex="-1" aria-labelledby="userCreate" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Usuário</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?php echo $URL ?>create/user" method="POST">

          <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" name="name" id="name" required>
          </div>

          <div class="mb-3">
            <label for="Email" class="form-label">Email </label>
            <input type="email" class="form-control" name="email" id="Email" required>
          </div>


          <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="Password" required>
          </div>






      </div>
      <div class="modal-footer">

        <button type="submit" class="btn btn-success">Criar Usuário</button>

        </form>
      </div>
    </div>
  </div>
</div>






<!-- Modal update password -->
<div class="modal fade" id="updatePassword" tabindex="-1" aria-labelledby="updatePassword" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Alteração de Senha (Usuário)</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <span id='msg'></span>

        <form action="<?php echo $URL ?>updatePassword" method="POST" onsubmit="event.preventDefault(); validatorPassword()">

          <div class="mb-3">
            <label for="password" class="form-label">Nova Senha</label>
            <input type="password" class="form-control" name="newPassword" id="newPassword">
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Confirmar Senha</label>
            <input type="password" class="form-control" name="confirmPassword" id="confirmPassword">
          </div>


      </div>
      <div class="modal-footer">

        <button type="submit" class="btn btn-success">Alterar Senha</button>

        </form>
      </div>
    </div>
  </div>
</div>









<!-- Modal Config -->
<div class="modal" tabindex="-1" id="config">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Configurações</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">



        <form action="<?php $URL ?>options" method="POST">
          <div class="mb-3">
            <label for="key" class="form-label">Key</label>
            <div id="key-info" class="form-text">Insira a key do ChatGPT.</div>
            <input type="key" class="form-control" name="key" value="<?php echo $key ?>" id="key">

          </div>

          <div class="mb-3 col-4">
            <label for="token" class="form-label">Limite de Token</label>
            <input type="text" class="form-control" name="token" value="<?php echo $token ?>" id="token">
          </div>

          <div>
            <div id="key-info" class="form-text">Insira e chamada para Palavra-chave:[keyword], Empresa:[company], Segmento:[segment], Custom01:[custom01], Custom02:[custom02], Custom03:[custom03] .</div>
          </div>

          <div class="mb-3 col-12">
            <label for="system" class="form-label">System</label>
            <textarea class="form-control" rows="5" name="system" id="system"><?php echo $system ?></textarea>
          </div>

          <div class="mb-3 col-12">
            <label for="token" class="form-label">Prompt</label>
            <textarea class="form-control" rows="5" name="prompt"><?php echo $prompt; ?></textarea>
          </div>

        

          <button type="submit" class="btn  btn-outline-success">Salvar Alterações</button>

        
        </form>



        <hr>
        <div class="mb-3 ">
          <form action="<?php echo  $URL ?>export" method="POST">
            <p>Exportar dados do Banco</p>

            <div class="d-flex mb-2">

              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="DataPersonalizada" required>
                <label class="form-check-label" for="DataPersonalizada">
                  Data Personalizada
                </label>
              </div>
              &nbsp; &nbsp; &nbsp; &nbsp;
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="DataAtual" required>
                <label class="form-check-label" for="DataAtual">
                  Data
                </label>
              </div>

            </div>


            <div class="d-flex align-items-center" id="formExport">
              <!-- 
                      <input type="date" name="start"/>&nbsp &nbsp
                        <button type="submit" class="btn btn-outline-success btn-sm">Exportar</button>
                      </form> -->
            </div>

        </div>



      </div>
    </div>
  </div>
</div>


<?php include  __DIR__ . "/base/footer.php" ?>