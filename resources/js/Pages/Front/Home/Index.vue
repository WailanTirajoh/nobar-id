<template>
  <div class="relative">
    <div class="fixed bottom-16 right-3 z-10">
      <floating>
        <Link
          :href="route('front.video.index')"
          class="
            bg-gray-700
            px-2
            py-1
            rounded-2xl
            flex
            shadow-xl
            hover:text-white hover:no-underline
          "
        >
          <plus-icon size="1.5x"></plus-icon>
          <span class="ml-1"> Upload Video </span>
        </Link>
      </floating>
    </div>
    <div
      class="
        transform
        duration-500
        text-white
        fixed
        top-20
        right-6
        z-50
        translate-x-48
        hover:translate-x-3
        focus-within:translate-x-3
        group
      "
    >
      <button
        class="bg-gray-600 rounded-full hover:rotate-45 p-2 flex bg-opacity-60"
      >
        <search-icon size="1.5x"></search-icon>
        <input
          type="text"
          class="rounded-r-2xl ml-1 pl-2 text-black w-40 text-sm"
          placeholder="Search movies"
        />
      </button>
    </div>
    <div class="grid grid-cols-4 gap-4 text-white">
      <div class="col-span-4 md:col-span-1">
        <div
          class="bg-gray-800 rounded-3xl shadow-inner px-4 py-4 mb-3 relative"
        >
          <div class="absolute top-1 right-5 flex">
            <div class="bg-gray-700 text-xs px-1 rounded-lg mr-1">
              Online: 1
            </div>
            <!-- <div class="bg-gray-700 text-xs px-1 rounded-lg">Friends</div> -->
          </div>
          <carousel
            :perPageCustom="[
              [320, 6],
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
          <h5 class="text-3xl mb-2 flex justify-end mr-2">Feeds</h5>
          <div class="p-3 bg-gray-800 rounded-3xl mb-2">
            <input type="text" class="p-2 text-black px-2 rounded-xl w-full" placeholder="Share your movie experience here!" />
            <div class="flex justify-end mt-2 gap-x-3">
              <button class="px-3 py-1 rounded-2xl bg-gray-700">Tag Friend</button>
              <button class="px-3 py-1 rounded-2xl bg-gray-700">Post</button>
            </div>
          </div>
          <div class="max-h-96 overflow-y-auto rounded-3xl">
            <feed :feeds="feeds"></feed>
          </div>
        </div>
      </div>
      <div class="col-span-4 sm:col md:col-span-3">
        <movie-list
          v-for="(movie, index) in movies"
          :key="index"
          :movies="movie.lists"
          :title="movie.name"
          class="mb-3"
        ></movie-list>
      </div>
    </div>
  </div>
</template>

<script>
import Layout from "@/Shared/Layout";
import { Carousel, Slide } from "vue-carousel";
import { SearchIcon, PlusIcon } from "vue-feather-icons";
import MovieList from "@/Components/Movies/MovieList";
import FriendCircle from "@/Components/FriendCircle";
import Feed from "@/Components/Feeds/Feed";
import Floating from "@/Components/Floating";

export default {
  metaInfo: { title: "Movie" },
  layout: Layout,
  components: {
    Carousel,
    Slide,
    FriendCircle,
    MovieList,
    Feed,
    SearchIcon,
    PlusIcon,
    Floating,
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
          totalLikes: 15,
          totalDisikes: 3,
          created_at: "1 hour ago",
          comments: [
            {
              name: "Andre Pros",
              status: "Biasa aja bro",
              created_at: "1 hour ago",
            },
            {
              name: "Dwiki GG",
              status: "Biasa dong buang bang pros",
              created_at: "59 minutes ago",
            },
            {
              name: "Andre Pros",
              status: "Biasa aja bro",
              created_at: "1 hour ago",
            },
            {
              name: "Dwiki GG",
              status: "Biasa dong buang bang pros",
              created_at: "59 minutes ago",
            },
          ],
        },
        {
          name: "Friend B",
          avatar: "/images/friends/face_2.jpg",
          isOnline: true,
          status: "Dracarysssss",
          totalLikes: 13,
          totalDisikes: 2,
          created_at: "3 hour ago",
          comments: [],
        },
      ],
    };
  },
};
</script>
