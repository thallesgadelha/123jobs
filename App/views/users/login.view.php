<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>

<!-- Login Form Box -->
<div class="flex justify-center items-center mt-20">
      <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-500 mx-6">
        <h2 class="text-4xl text-center font-bold mb-4">Login</h2>
        <?php loadPartial('errors', [
            'errors' => $errors ?? []
          ]); ?>
        <form method="POST" action="/auth/login">
          <div class="mb-4">
            <input
              type="email"
              name="email"
              placeholder="Email"
              class="w-full px-4 py-2 border rounded focus:outline-none"
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
          <button
            type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded focus:outline-none"
          >
            Login
          </button>

          <p class="mt-4 text-gray-500">
            Ainda não tem uma conta?
            <a class="text-blue-900" href="/auth/register">Cadastro</a>
          </p>
        </form>
      </div>
    </div>

<?php loadPartial('footer'); ?> 