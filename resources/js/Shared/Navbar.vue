<template>
  <nav class="bg-gray-800 fixed w-full z-10 h-16 shadow-lg">
    <div class="container">
      <div
        class="
          relative
          flex
          items-center
          justify-between
          h-16
          w-full
          overflow-x-auto
        "
      >
        <div
          class="
            flex-1 flex
            items-center
            justify-center
            sm:items-stretch
            sm:justify-start
          "
        >
          <div class="flex-shrink-0 flex items-center"></div>
          <div class="block sm:ml-6">
            <div class="flex space-x-4">
              <Link
                :href="route('front.home.index')"
                class="
                  bg-gray-900
                  px-3
                  py-2
                  rounded-md
                  text-sm
                  font-medium
                  text-yellow-300
                  hover:no-underline
                  whitespace-nowrap
                "
              >
                Nobar ID
              </Link>

              <Link
                :href="route('front.watchlist.index')"
                class="
                  text-gray-300
                  hover:bg-gray-700
                  active:bg-gray-600
                  hover:text-white
                  px-3
                  py-2
                  rounded-md
                  text-sm
                  font-medium
                  hover:no-underline
                "
                :class="isUrl('watchlist') ? 'bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium' : ''"
                >WatchList</Link
              >
              <Link
                :href="route('front.friend.index')"
                class="
                  text-gray-300
                  hover:bg-gray-700
                  hover:text-white
                  px-3
                  py-2
                  rounded-md
                  text-sm
                  font-medium
                  hover:no-underline
                "
                :class="isUrl('friend') ? 'bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium' : ''"
                >Friends</Link
              >
              <Link
                :href="route('front.group.index')"
                class="
                  text-gray-300
                  hover:bg-gray-700
                  hover:text-white
                  px-3
                  py-2
                  rounded-md
                  text-sm
                  font-medium
                  hover:no-underline
                "
                :class="isUrl('group') ? 'bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium' : ''"
                >Group</Link
              >
            </div>
          </div>
        </div>
        <div
          class="
            flex-1 flex
            items-center
            justify-center
            sm:items-stretch
            sm:justify-end
          "
        >
          <a
            href="#"
            class="
              bg-gray-900
              text-white
              px-3
              py-2
              rounded-md
              text-sm
              font-medium
            "
          >
            Profile
          </a>
        </div>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  methods: {
    isUrl(...urls) {
      let currentUrl = this.$page.url.substr(1);
      if (urls[0] === "") {
        return currentUrl === "";
      }
      return urls.filter((url) => currentUrl.startsWith(url)).length;
    },
  },
};
</script>
