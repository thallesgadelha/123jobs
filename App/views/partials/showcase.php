    <!-- Showcase -->
    <section
      class="showcase relative bg-cover bg-center bg-no-repeat h-72 flex items-center"
    >
      <div class="overlay"></div>
      <div class="container mx-auto text-center z-10">
        <h2 class="text-4xl text-white font-bold mb-4">Encontre seu emprego dos sonhos</h2>
        <form method="GET" action="/listings/search" class="mb-4 block mx-5 md:mx-auto">
          <input
            type="text"
            name="keywords"
            placeholder="Palavra-chave"
            class="w-full md:w-auto mb-2 px-4 py-2 focus:outline-none"
          />
          <input
            type="text"
            name="location"
            placeholder="Localização"
            class="w-full md:w-auto mb-2 px-4 py-2 focus:outline-none"
          />
          <button
            class="w-full md:w-auto bg-custom-color-900 hover:bg-custom-color text-white px-4 py-2 focus:outline-none"
          >
          <i class="fa fa-search"></i> Procurar
          </button>
        </form>
      </div>
    </section>