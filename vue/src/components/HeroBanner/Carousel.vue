<template>
    <div
    id="carouselDarkVariant"
    class="carousel slide carousel-fade carousel-dark relative"
    data-bs-ride="carousel"
    >
  <!-- Indicators -->
  <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
    <button
      data-bs-target="#carouselDarkVariant"
      data-bs-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      data-bs-target="#carouselDarkVariant"
      data-bs-slide-to="1"
      aria-label="Slide 1"
    ></button>
    <button
      data-bs-target="#carouselDarkVariant"
      data-bs-slide-to="2"
      aria-label="Slide 1"
    ></button>
  </div>

  <!-- Inner -->
  <div class="carousel-inner relative w-full overflow-hidden">
    <!-- Single item -->
    <div class="carousel-item active relative float-left w-full h-220">
      <img
        src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80"
        class="block w-full"
        alt="Motorbike Smoke"
      />
      <div class="carousel-caption hidden md:block absolute text-right top-64">
        <h5 class="text-xl">First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item relative float-left w-full h-220">
      <img
        src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(19).webp"
        class="block w-full"
        alt="Mountaintop"
      />
      <div class="carousel-caption hidden md:block absolute text-right top-64">
        <h5 class="text-xl">Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item relative float-left w-full h-220">
      <img
        src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(40).webp"
        class="block w-full"
        alt="Woman Reading a Book"
      />
      <div class="carousel-caption hidden md:block absolute text-right top-64">
        <h5 class="text-xl">Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <!-- Inner -->

  <!-- Controls -->
  <button
    class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
    type="button"
    data-bs-target="#carouselDarkVariant"
    data-bs-slide="prev"
  >
    <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button
    class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
    type="button"
    data-bs-target="#carouselDarkVariant"
    data-bs-slide="next"
  >
    <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</template>

<script>
export default {
  name: "Carousel",
};
</script>

<style lang="scss" scoped>

</style>