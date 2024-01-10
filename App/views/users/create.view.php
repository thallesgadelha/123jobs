<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>

<!-- Registration Form Box -->
<div class="flex justify-center items-center mt-20">
      <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-500 mx-6">
        <h2 class="text-4xl text-center font-bold mb-4">Cadastro</h2>
        <?php loadPartial('errors', [
            'errors' => $errors ?? []
          ]); ?>
        <form method="POST" action="/auth/register">
          <div class="mb-4">
            <input
              type="text"
              name="name"
              placeholder="Nome Completo"
              class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $user['name'] ?? '' ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="email"
              name="email"
              placeholder="Email"
              class="w-full px-4 py-2 border rounded focus:outline-none"
              value="<?= $user['email'] ?? '' ?>"
            />
          </div>
           <div class="mb-4">
            <input
              type="text"
              name="city"
              placeholder="Cidade"
              class="w-full px-4 py-2 border rounded focus:outline-none"
              value="<?= $user['city'] ?? '' ?>"
            />
          </div>
           <div class="mb-4">
            <input
              type="text"
              name="state"
              placeholder="Estado"
              class="w-full px-4 py-2 border rounded focus:outline-none"
              value="<?= $user['state'] ?? '' ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="password"
              name="password"
              placeholder="Senha"
              class="w-full px-4 py-2 border rounded focus:outline-none"
            />
          </div>
          <div class="mb-4">
            <input
              type="password"
              name="password_confirmation"
              placeholder="Confirme a Senha"
              class="w-full px-4 py-2 border rounded focus:outline-none"
            />
          </div>
          <button
            type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded focus:outline-none"
          >
            Cadastrar
          </button>

          <p class="mt-4 text-gray-500">
            Já tem uma conta?
            <a class="text-blue-900" href="/auth/login">Login</a>
          </p>
        </form>
      </div>
    </div>

<?php loadPartial('footer'); ?> 