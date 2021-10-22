<template>
  <nav class="bg-gray-800 fixed w-full z-10 h-16 shadow whitespace-nowrap">
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
            sm:items-stretch sm:justify-start
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
                  font-bold
                  text-yellow-300
                  hover:no-underline
                  transition
                  duration-300
                  ease-in-out
                "
              >
                Nobar ID
              </Link>
              <Link
                :href="route('front.friend.index')"
                class="
                  text-gray-300
                  hover:bg-gray-900 hover:text-white
                  px-3
                  py-2
                  rounded-md
                  text-sm
                  font-medium
                  hover:no-underline
                  transition
                  duration-300
                  ease-in-out
                "
                :class="
                  isUrl('friend')
                    ? 'bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium'
                    : ''
                "
                >Friends</Link
              >
              <Link
                :href="route('front.group.index')"
                class="
                  text-gray-300
                  hover:bg-gray-900 hover:text-white
                  px-3
                  py-2
                  rounded-md
                  text-sm
                  font-medium
                  hover:no-underline
                  transition
                  duration-300
                  ease-in-out
                "
                :class="
                  isUrl('group')
                    ? 'bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium'
                    : ''
                "
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
            sm:items-stretch sm:justify-end
          "
          v-if="$page.props.auth.user"
        >
          <Link
            v-if="hasAnyPermission(['user-access'])"
            :href="route('back.user.index')"
            :class="isUrl('back') ? 'bg-gray-900 ' : ''"
            class="
              text-gray-300
              hover:bg-gray-900
              active:bg-gray-600
              hover:text-white
              px-3
              py-2
              rounded-md
              text-sm
              font-medium
              hover:no-underline
              mr-2
            "
            >Admin Management</Link
          >
        </div>
      </div>
    </div>
  </nav>
</template>
