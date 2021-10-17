<template>
  <div class="hidden sm:block sm:fixed bottom-16 left-3 z-10">
    <div class="flex relative">
      <div class="px-1 py-1" v-for="(friend, index) in friends" :key="index">
        <div
          :id="'chat-' + index"
          class="
            py-1
            bg-gray-900
            border-2 border-gray-500
            rounded
            w-72
            text-center text-sm
            bg-opacity-80
            mb-1
            p-1
            hidden
          "
        >
          <div
            class="
              border-2 border-gray-700
              bg-opacity-900
              p-3
              rounded
              h-36
              overflow-y-auto
            "
          >
            <div
              class="mb-1"
              v-for="(message, index) in friend.messages"
              :key="index"
            >
              <div class="text-right" v-if="message.from == 'me'">
                <div class="">{{ message.from }}:</div>
                {{ message.message }}
              </div>
              <div class="text-left" v-else>
                <div class="">{{ message.from }}</div>
                {{ message.message }}
              </div>
            </div>
          </div>
          <div class="mt-2">
            <input
              type="text"
              class="rounded px-2 py-1 text-black w-full"
              placeholder="Type to chat"
            />
          </div>
        </div>
        <button
          @click="openChat(index)"
          class="
            py-1
            bg-gray-900
            border-2 border-gray-500
            rounded
            w-72
            text-center text-sm
            bg-opacity-80
            mt-auto
          "
        >
          {{ friend.name }}
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      friends: [
        {
          name: "Andre Pros",
          lastOnline: "10 Minutes Ago",
          messages: [
            {
              from: "Andre Pros",
              created_at: "15 Minutes Ago",
              message: "Udah nonton TI belum?",
            },
            {
              from: "me",
              created_at: "15 Minutes Ago",
              message: "Udah bro",
            },
          ],
        },
        {
          name: "Dwiki GG",
          lastOnline: "10 Minutes Ago",
          messages: [
            {
              from: "Dwiki GG",
              created_at: "15 Minutes Ago",
              message: "Udah nonton TI belum?",
            },
            {
              from: "me",
              created_at: "15 Minutes Ago",
              message: "Udah bro",
            },
            {
              from: "Dwiki GG",
              created_at: "15 Minutes Ago",
              message: "Udah nonton TI belum?",
            },
            {
              from: "me",
              created_at: "15 Minutes Ago",
              message: "Udah bro",
            },
            {
              from: "Dwiki GG",
              created_at: "15 Minutes Ago",
              message: "Udah nonton TI belum?",
            },
            {
              from: "me",
              created_at: "15 Minutes Ago",
              message: "Udah bro",
            },
          ],
        },
      ],
    };
  },
  methods: {
    openChat(index) {
      var chatElement = document.getElementById("chat-" + index);
      chatElement.classList.contains("hidden")
        ? chatElement.classList.remove("hidden")
        : chatElement.classList.add("hidden");
    },
  },
};
</script>
