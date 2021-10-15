<template>
  <div>
    <h4 class="text-3xl mb-2 flex ml-4">{{ title }}</h4>
    <div class="bg-gray-800 rounded-3xl shadow-inner px-8 relative">
      <carousel
        :perPageCustom="[
          [320, 2],
          [1199, 6],
        ]"
        :navigationEnabled="true"
        :paginationEnabled="false"
        :mouseDrag="false"
      >
        <slide v-for="(movie, index) in movies" :key="index">
          <movie-card
            :src="movie.src"
            :alt="movie.alt"
            :name="movie.name"
            :length="movie.length"
          ></movie-card>
        </slide>
      </carousel>
    </div>
  </div>
</template>

<script>
import MovieCard from "@/Components/Movies/MovieCard";
export default {
  components: {
    MovieCard
  },
  props: {
    movies: Array,
    title: String,
  },
};
</script>
