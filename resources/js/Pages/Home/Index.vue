<template>
  <div class="grid grid-cols-4 gap-4 text-white">
    <div class="col-span-4 md:col-span-1">
      <div class="bg-gray-800 rounded-3xl shadow-inner px-4 py-4 mb-3 relative">
        <div class="absolute top-1 right-5 flex">
          <div class="bg-gray-700 text-xs px-1 rounded-lg mr-1">Online: 2</div>
          <!-- <div class="bg-gray-700 text-xs px-1 rounded-lg">Friends</div> -->
        </div>
        <carousel
          :perPageCustom="[
            [320, 8],
            [640, 8],
            [768, 3],
            [1024, 5],
            [1280, 6],
          ]"
          :paginationEnabled="false"
        >
          <slide v-for="(friend, index) in friends" :key="index">
            <friend-circle
              :avatar="friend.avatar"
              :is-online="friend.isOnline"
            ></friend-circle>
          </slide>
        </carousel>
      </div>
      <div class="">
        <h5 class="text-3xl mb-2 flex justify-end mr-2">
          Feeds
        </h5>
        <div class="max-h-96 overflow-y-auto rounded-3xl">
          <feed :feeds="feeds"></feed>
        </div>
      </div>
    </div>
    <div class="col-span-4 sm:col md:col-span-3 ...">
      <movie-list
        v-for="(movie, index) in movies"
        :key="index"
        :movies="movie.lists"
        :title="movie.name"
        class="mb-3"
      ></movie-list>
    </div>
  </div>
</template>

<script>
import { Carousel, Slide } from "vue-carousel";
import Layout from "@/Shared/Layout";
import MovieList from "@/Components/Movies/MovieList";
import FriendCircle from "@/Components/FriendCircle";
import Feed from "@/Components/Feeds/Feed";

export default {
  metaInfo: { title: "Movie" },
  layout: Layout,
  components: {
    Carousel,
    Slide,
    FriendCircle,
    MovieList,
    Feed,
  },
  data() {
    return {
      movies: [
        {
          lists: [
            {
              name: "Sang Chi",
              src: "/images/cover/sc.jpg",
              alt: "Sang Chi Movie",
              length: "2 Hours, 20 Min",
            },
            {
              name: "Black Widow",
              src: "/images/cover/bw.jpg",
              alt: "Black Widow Movie",
              length: "1 Hour, 36 Min",
            },
            {
              name: "Fast & Furious",
              src: "/images/cover/ff.jpg",
              alt: "Fast & Furious Movie",
              length: "2 Hours",
            },
            {
              name: "Dora",
              src: "/images/cover/dr.jpg",
              alt: "Dora Movie",
              length: "2 Hours",
            },
            {
              name: "Sang Chi",
              src: "/images/cover/sc.jpg",
              alt: "Sang Chi Movie",
              length: "2 Hours",
            },
            {
              name: "Black Widow",
              src: "/images/cover/bw.jpg",
              alt: "Black Widow Movie",
              length: "2 Hours",
            },
            {
              name: "Fast & Furious",
              src: "/images/cover/ff.jpg",
              alt: "Fast & Furious Movie",
              length: "2 Hours",
            },
            {
              name: "Dora",
              src: "/images/cover/dr.jpg",
              alt: "Dora Movie",
              length: "2 Hours",
            },
          ],
          name: "Action",
        },
        {
          lists: [
            {
              name: "Sang Chi",
              src: "/images/cover/sc.jpg",
              alt: "Sang Chi Movie",
              length: "2 Hours, 20 Min",
            },
            {
              name: "Black Widow",
              src: "/images/cover/bw.jpg",
              alt: "Black Widow Movie",
              length: "1 Hour, 36 Min",
            },
            {
              name: "Fast & Furious",
              src: "/images/cover/ff.jpg",
              alt: "Fast & Furious Movie",
              length: "2 Hours",
            },
            {
              name: "Dora",
              src: "/images/cover/dr.jpg",
              alt: "Dora Movie",
              length: "2 Hours",
            },
            {
              name: "Sang Chi",
              src: "/images/cover/sc.jpg",
              alt: "Sang Chi Movie",
              length: "2 Hours",
            },
            {
              name: "Black Widow",
              src: "/images/cover/bw.jpg",
              alt: "Black Widow Movie",
              length: "2 Hours",
            },
            {
              name: "Fast & Furious",
              src: "/images/cover/ff.jpg",
              alt: "Fast & Furious Movie",
              length: "2 Hours",
            },
            {
              name: "Dora",
              src: "/images/cover/dr.jpg",
              alt: "Dora Movie",
              length: "2 Hours",
            },
          ],
          name: "Adventure",
        },
        {
          lists: [
            {
              name: "Sang Chi",
              src: "/images/cover/sc.jpg",
              alt: "Sang Chi Movie",
              length: "2 Hours, 20 Min",
            },
            {
              name: "Black Widow",
              src: "/images/cover/bw.jpg",
              alt: "Black Widow Movie",
              length: "1 Hour, 36 Min",
            },
            {
              name: "Fast & Furious",
              src: "/images/cover/ff.jpg",
              alt: "Fast & Furious Movie",
              length: "2 Hours",
            },
            {
              name: "Dora",
              src: "/images/cover/dr.jpg",
              alt: "Dora Movie",
              length: "2 Hours",
            },
            {
              name: "Sang Chi",
              src: "/images/cover/sc.jpg",
              alt: "Sang Chi Movie",
              length: "2 Hours",
            },
            {
              name: "Black Widow",
              src: "/images/cover/bw.jpg",
              alt: "Black Widow Movie",
              length: "2 Hours",
            },
            {
              name: "Fast & Furious",
              src: "/images/cover/ff.jpg",
              alt: "Fast & Furious Movie",
              length: "2 Hours",
            },
            {
              name: "Dora",
              src: "/images/cover/dr.jpg",
              alt: "Dora Movie",
              length: "2 Hours",
            },
          ],
          name: "Family",
        },
      ],
      friends: [
        {
          name: "Friend A",
          avatar: "/images/friends/face_1.png",
          isOnline: true,
        },
        {
          name: "Friend 2",
          avatar: "/images/friends/face_2.jpg",
          isOnline: true,
        },
        {
          name: "Friend 3",
          avatar: "/images/friends/face_3.jpg",
          isOnline: false,
        },
        {
          name: "Friend A",
          avatar: "/images/friends/face_1.png",
          isOnline: true,
        },
        {
          name: "Friend 2",
          avatar: "/images/friends/face_2.jpg",
          isOnline: true,
        },
        {
          name: "Friend 3",
          avatar: "/images/friends/face_3.jpg",
          isOnline: false,
        },
        {
          name: "Friend A",
          avatar: "/images/friends/face_1.png",
          isOnline: true,
        },
        {
          name: "Friend 2",
          avatar: "/images/friends/face_2.jpg",
          isOnline: true,
        },
        {
          name: "Friend 3",
          avatar: "/images/friends/face_3.jpg",
          isOnline: false,
        },
      ],
      feeds: [
        {
          name: "Wailan Tirajoh",
          avatar: "/images/friends/face_1.png",
          isOnline: true,
          status: "Sang Chi kills it! big 5 star for marvel movies!",
          totalComments: 4,
          totalLikes: 15,
          totalDisikes: 3,
        },
        {
          name: "Friend B",
          avatar: "/images/friends/face_2.jpg",
          isOnline: true,
          status: "Dracarysssss",
          totalComments: 4,
          totalLikes: 13,
          totalDisikes: 2,
        },
        {
          name: "Friend B",
          avatar: "/images/friends/face_2.jpg",
          isOnline: true,
          status: "Dracarysssss",
          totalComments: 4,
          totalLikes: 13,
          totalDisikes: 2,
        },
      ],
    };
  },
};
</script>
