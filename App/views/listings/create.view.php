<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>
<?php loadPartial('top-banner'); ?>

 <!-- Post a Job Form Box -->
 <section class="flex justify-center items-center mt-20">
      <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-600 mx-6">
        <h2 class="text-4xl text-center font-bold mb-4">Criar Lista de Emprego</h2>
        <!-- <div class="message bg-red-100 p-3 my-3">This is an error message.</div>
        <div class="message bg-green-100 p-3 my-3">
          This is a success message.
        </div> -->
        <form method="POST" action="/listings">
          <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
            Informações do Emprego
          </h2>
          <?php loadPartial('errors', [
            'errors' => $errors ?? []
          ]); ?>
          <div class="mb-4">
            <input
              type="text"
              name="title"
              placeholder="Titulo"
              class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing['title'] ?>"
            />
          </div>
          <div class="mb-4">
            <textarea
              name="description"
              placeholder="Descrição"
              class="w-full px-4 py-2 border rounded focus:outline-none"
            > <?= $listing['description'] ?>
          </textarea>
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="salary"
              placeholder="Salario"
              class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing['salary'] ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="requirements"
              placeholder="Requisitos"
              class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing['requirements'] ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="benefits"
              placeholder="Beneficios"
              class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing['benefits'] ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="tags"
              placeholder="Tags"
              class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing['tags'] ?>"
            />
          </div>
          <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
            Empresa & Localização
          </h2>
          <div class="mb-4">
            <input
              type="text"
              name="company"
              placeholder="Nome da Empresa"
              class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing['company'] ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="address"
              placeholder="Endereço"
              class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing['address'] ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="city"
              placeholder="Cidade"
              class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing['city'] ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="state"
              placeholder="Estado"
              class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing['state'] ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="phone"
              placeholder="Contato (Telefone)"
              class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing['phone'] ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="email"
              name="email"
              placeholder="Email"
              class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= $listing['email'] ?>"
            />
          </div>
          <button
            class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none"
          >
            Salvar
          </button>
          <a
            href="/"
            class="block text-center w-full bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded focus:outline-none"
          >
            Cancelar
          </a>
        </form>
      </div>
    </section>

<?php loadPartial('bottom-banner'); ?> 
<?php loadPartial('footer'); ?> 