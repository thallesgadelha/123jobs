<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>
<?php loadPartial('top-banner'); ?>

<section class="container mx-auto p-4 mt-4">
      <div class="rounded-lg shadow-md bg-white p-3">
      <?php loadPartial('message'); ?>
       <div class="flex justify-between items-center">
      <a class="block p-4 text-blue-700" href="/listings">
        <i class="fa fa-arrow-alt-circle-left"></i>
        Voltar
      </a>
      <?php if(Framework\Authorization::isOwner($listing->user_id)) : ?>
      <div class="flex space-x-4 ml-4">
        <a href="/listings/edit/<?= $listing->id ?>" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded">Editar</a>
        <!-- Delete Form -->
        <form method="POST">
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded">Deletar</button>
        </form>
        <!-- End Delete Form -->
      </div>
      <?php endif; ?>
    </div>
        <div class="p-4">
          <h2 class="text-xl font-semibold"><?= $listing->title ?></h2>
          <p class="text-gray-700 text-lg mt-2">
            <?= $listing->description ?>.
          </p>
          <ul class="my-4 bg-gray-100 p-4">
            <li class="mb-2"><strong>Salario:</strong> <?= formatSalary($listing->salary) ?></li>
            <li class="mb-2">
              <strong>Localização:</strong> <?= $listing->city ?>, <?= $listing->state ?>
              <span
                class="text-xs bg-blue-500 text-white rounded-full px-2 py-1 ml-2"
                >Local</span
              >
            </li>
            <li class="mb-2">
              <strong>Tags:</strong> <?= $listing->tags ?>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="container mx-auto p-4">
      <h2 class="text-xl font-semibold mb-4">Detalhes da Vaga</h2>
      <div class="rounded-lg shadow-md bg-white p-4">
        <h3 class="text-lg font-semibold mb-2 text-blue-500">
          Requisitos
        </h3>
        <p>
          <?= $listing->requirements ?>
        </p>
        <h3 class="text-lg font-semibold mt-4 mb-2 text-blue-500">Beneficios</h3>
        <p><?= $listing->benefits ?></p>
      </div>
      <p class="my-5">
        Escreva "Aplicação Vaga" como o assunto do seu email e anexe seu curriculo.
      </p>
      <a
        href="mailto:<?= $listing->email ?>"
        class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium cursor-pointer text-indigo-700 bg-indigo-100 hover:bg-indigo-200"
      >
        Aplique Agora
      </a>
    </section>

<?php loadPartial('bottom-banner'); ?> 
<?php loadPartial('footer'); ?> 